<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

    <title> <?php the_title(); ?></title>

</head>

<body <?php body_class(); ?>>


    <!--=====================================================
====================== NAVBAR =============================-->
    <nav id="navigationBar" class=" navbar navbar-expand-lg navbar-light transparent fixed-top ">
        <div id="logo">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo get_theme_file_uri( 'img/logo.png' );?>" alt="">
            </a>
        </div>
        <button class="navbar-toggler toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ">
                <li class="nav-item active ">
                    <a class="nav-link active zoomTransitionLight" href="<?php echo site_url(); ?>">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown transparent">
                    <a class="nav-link zoomTransitionLight dropdown-toggle" href="<?php echo site_url('/category/training/'); ?>"
                        id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Training
                    </a>
                    <div class="dropDown transparent dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                        <a class=" zoomTransitionLight dropdown-item " href="<?php echo get_site_url('https://sciencebehindfitness.com/category/training/exercise-guides/'); ?>">Exercise Guides</a>
                        <a class="zoomTransitionLight dropdown-item " href="<?php echo get_site_url('https://sciencebehindfitness.com/category/training/workout-programs/'); ?>">Workout Programs</a>
                    </div>
                </li>
                <li class="nav-item dropdown transparent">
                    <a class="nav-link zoomTransitionLight dropdown-toggle" href="<?php echo site_url('/category/nurtition/'); ?>"
                        id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Nutrition
                    </a>
                    <div class="dropDown transparent dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                        <a class=" zoomTransitionLight dropdown-item " href="<?php echo site_url('/category/nurtition/build-muscle/'); ?>">Build Muscle</a>
                        <a class="zoomTransitionLight dropdown-item " href="<?php echo site_url('/category/nurtition/lose-fat'); ?>">Lose Fat</a>
                    </div>
                </li> <li class="nav-item dropdown transparent">
                    <a class="nav-link zoomTransitionLight dropdown-toggle" href="<?php echo site_url('/category/lifestyle-motivation/'); ?>"
                        id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Lifestyle & Motivation
                    </a>
                    <div class="dropDown transparent dropdown-menu"  aria-labelledby="navbarDropdownMenuLink">
                        <a class=" zoomTransitionLight dropdown-item " href="<?php echo site_url('/category/lifestyle-motivation/'); ?>">Off Beating</a>
                    </div>
                </li>
                <div id="searchIcon" class="search-icon zoomTransitionLight">
                    <li class="nav-item">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </li>
                </div>
                <div id="darkButton" class="darkModeBtn zoomTransitionLight">
                    <li class="nav-item">
                        <button id="darkButton" onclick="darkModeToggle()">Dark Mode</button>
                    </li>
                </div>

            </ul>
        </div>
    </nav>
