<?php
/**
 * Created by PhpStorm.
 * User: barun
 * Date: 9/14/2018
 * Time: 11:53 AM
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require 'dbconfig.php';
$app = new \Slim\App(["settings" => $config]);


$container = $app->getContainer();
$container['db'] = function ($container) {
    try {
        $db = $container['settings']['db'];
        $con = @mysqli_connect($db['servername'], $db['username'], $db['password'], $db['dbname']);
        return $con;
    } catch (Exception $ex) {
        return $ex->getMessage();
    }
};


//test api
$app->get('/test/hello/{name}', function (Request $reu, Response $res, array $arr) {
    $name = $arr['name'];
    $res->getBody()->write("Hello :,$name");
    return $res;
});

//data post
$app->post('/user/create', function (Request $req, Response $res) {
    $conn = $this->db;
    $d1 = $req->getParam('input_name'); //String
    $d2 = $req->getParam('input_number'); //int
    $d3 = $req->getParam('input_email');//email
    $d4 = $req->getParam('input_date');//date
    $query = "INSERT INTO users(name,mobile,email,dob) VALUES(?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $d1, $d2, $d3,$d4);
    if ($stmt->execute()) {
        return $res->withJson(array('status' => 'User Created'), 200);
    }

});

$app->run();