<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | FreedomPlay Admin</title>
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/app.min.css"); ?>">
</head>
<body>
    <header id="admin">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo site_url("dashboard"); ?>">FP Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("header-images-mgt"); ?>">Header Images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("faqs-mgt"); ?>">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("offer-images-mgt"); ?>">Offers Images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("about-us-mgt"); ?>">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url("how-to-play-mgt"); ?>">How to Play</a>
                        </li>
                        
                    </ul>
                </div>
            </div>        
        </nav>
    </header>