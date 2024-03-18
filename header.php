<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Thème gr2</title>
        <!-- <link rel="stylesheet" href="normalize.css"> -->
        <!-- <link rel="stylesheet" href="style.css"> -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css';?>" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';?>" />
        
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,500&display=swap" rel="stylesheet" />
    </head>
    <body>
        <header id="menu" class="global">
            <div class="entete__contenu">
                <div class="entete__contact">
                    <a href="#" class="btn_menu">Nous contacter
                        <svg class="icone_contact icone" width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M7 12L17 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 8L13 8" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 20.2895V5C3 3.89543 3.89543 3 5 3H19C20.1046 3 21 3.89543 21 5V15C21 16.1046 20.1046 17 19 17H7.96125C7.35368 17 6.77906 17.2762 6.39951 17.7506L4.06852 20.6643C3.71421 21.1072 3 20.8567 3 20.2895Z" stroke="#000000" stroke-width="1.5"></path>
                        </svg>
                    </a>
               
                </div>
                <!-- permet d'ajouter un logo qui à été choisi avec les customizer -->
                <?= get_custom_logo(); ?>
                <div class="entete__menu">
                    <input id="chk_burger" type="checkbox" name="">
                    <label id="burger" for="chk_burger">
                        <p class="btn_menu">menu</p>
                    <!-- <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg> -->
                        
                    
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
                    <?php wp_nav_menu(array("container" => "nav")); ?>
                </div>
            </div>
        </header>