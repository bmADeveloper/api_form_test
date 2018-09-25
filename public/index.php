<?php
/**
 * Created by PhpStorm.
 * User: barun
 * Date: 9/24/2018
 * Time: 4:43 PM
 */ ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title has-text-centered has-text-info is-capitalized is-size-1-desktop is-size-3-mobile">
            RestFull Api Test
        </h1>
        <div class="box has-background-grey-lighter">
            <p class="subtitle has-text-link has-text-justified is-capitalized is-size-3-desktop is-size-6-mobile">
                Registration page
            </p>
            <form method="get" enctype="multipart/form-data" id="subsFrm">
                <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                    <div class="field ">
                        <div class="label">Name</div>
                        <div class="control has-icons-left">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <input class="input" type="text" name="input_name" placeholder="Your Name">
                            <label class="help has-text-right">Validation Check Status</label>
                        </div>
                    </div>
                    <div class="field ">
                        <div class="label">Gmail</div>
                        <div class="control has-icons-left">
                            <span class="icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input class="input" type="text" name="input_email" placeholder="Your E-mail">
                            <label class="help has-text-right">Validation Check Status</label>
                        </div>
                    </div>
                    <div class="field ">
                        <div class="label">Mobile</div>
                        <div class="control has-icons-left">
                            <span class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                            <input class="input" type="tel" name="input_number" placeholder="Your Mobile Numbers">
                            <label class="help has-text-right">Validation Check Status</label>
                        </div>
                    </div>
                    <div class="field ">
                        <div class="label">Mobile</div>
                        <div class="control has-icons-left">
                            <span class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                            <input class="input" type="date" name="input_date" placeholder="Your DOB">
                            <label class="help has-text-right">Validation Check Status</label>
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <input type="submit" class="button is-success is-hovered">
                        </div>
                        <div class="control">
                            <input type="reset" class="button is-danger">
                        </div>
                    </div>
                </div>
            </form>


        </div>

    </div>
</section>
</body>
</html>