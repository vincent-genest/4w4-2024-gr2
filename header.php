<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Horizon - club de voyage</title>
        
        <!--
            <link rel="icon" href="images/favicon.png" />
             <link rel="stylesheet" href="normalize.css">
             <link rel="stylesheet" href="style.css">
        -->
        
        <link rel="icon" href="<?php echo get_template_directory_uri() . '/images/favicon.png';?>">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" />
        
        <?php wp_head(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    <body>
        <header id="menu" class="global bck-primaire-100 clr-primaire-600">
            <div class="entete__contenu">
                <div class="entete__recherche">
                <?php get_search_form() ?>
                    <!-- <a href="#">
                        <p class="btn_menu ligne-hover">Nous contacter</p>
                        <svg class="icone_contact icone" width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" ><path d="M7 12L17 12"  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 8L13 8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 20.2895V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V15C21 16.1046 20.1046 17 19 17H7.96125C7.35368 17 6.77906 17.2762 6.39951 17.7506L4.06852 20.6643C3.71421 21.1072 3 20.8567 3 20.2895Z" stroke-width="1.5"></path>
                        </svg>
                    </a> -->
               
                </div>
                <!-- permet d'ajouter un logo qui à été choisi avec les customizer -->
                <?= get_custom_logo(); ?>
                <div class="entete__menu">
                    <input id="chk_burger" type="checkbox" name="">
                    <label id="burger" for="chk_burger">
                        <p class="btn_menu ligne-hover">menu</p>                        
                    
                        <svg class="icone_burger icone burger_rotation" viewBox="0 0 100 100">
                            <path
                                  class="trait haut"
                                  d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path
                                  class="trait milieu"
                                  d="m 70,50 h -40" />
                            <path
                                  class="trait bas"
                                  d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                        </svg>
                    </label>
                    <?php wp_nav_menu(array(
                        "menu"=> "principal",
                        "container" => "nav")); ?>
                </div>
            </div>
        </header>