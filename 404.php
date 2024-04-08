<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
<!-- <h2>index.php</h2> -->

        <div id="accueil" class="global bck-primaire-100">
            <section class="accueil__section acceuil__404">
                <div class="section__cours">
                    <h1>Erreur 404</h1>
                    <p>La page que vous cherchez n'existe pas.</p>
                    <a class="ligne-hover" href="<?= get_home_url(); ?>">Retourner à l'accueil</a>
                </div>
                <img class="image-404" src="<?php echo get_template_directory_uri() . '/images/404.png';?>" alt="illustration d'erreur 404">
            </section>
        </div>
<?php
    get_footer();
?>