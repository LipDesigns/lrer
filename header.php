<!DOCTYPE html>
<html lang="fr">

<head <?php language_attributes();?>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <header id="header">
        <nav>
            <div class="pre-nav">
                <div class="logo">
                <a href="<?php echo get_permalink(9) ?>"><img src="http://localhost/refugeecureuilroux/wp-content/uploads/2021/06/Logo.png" alt="logo du site" style="width:100px; height:100px;"></a>
                </div>
                <h1>Le Refuge de l’écureuil roux</h1>
                <hr>
                <hr>
            </div>

        <!-- Menu Fullscreen -->

            <div class="full-nav">
                <?php
                    wp_nav_menu(array(
                        'menu' => 'menu principal'
                    )); ?>
            </div>

        <!-- Menu Burger -->

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    
                <?php
                    wp_nav_menu(array(
                        'menu' => 'menu principal'
                    )); ?>

                </div>
            </div>

            <span class="btn-burger"style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

        </nav>
    </header>

