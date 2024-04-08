<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
<!-- <h2>index.php</h2> -->

        <div id="accueil" class="global">
            <section class="accueil__section">
                <div class="section__cours">
                    <h1>Erreur 404</h1>
                    <p>La page que vous cherchez n'existe pas.</p>
                    <a href="<?= get_home_url(); ?>">Retourner à l'accueil</a>
                
                </div>
            </section>
        </div>
<?php
    get_footer();
?>
