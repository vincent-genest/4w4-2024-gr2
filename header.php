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
            <div class="entete__menu">
                <?php
                    wp_nav_menu();
                ?>
            </div>
        </header>