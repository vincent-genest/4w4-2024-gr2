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
            <div>Nous contacter</div>
            <?= get_custom_logo(); ?>
            <div class="entete__menu">
                <input id="chk_burger" type="checkbox" name="">
                <label id="burger" for="chk_burger">
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                </label>
                <?php wp_nav_menu(array("container" => "nav")); ?>
            </div>
        </header>