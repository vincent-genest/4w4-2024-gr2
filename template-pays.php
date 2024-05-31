<?php
/**
 * Template name: Pays
 *
 */
?>
<!-- On inclut le header -->
<?php get_header(); ?>

<!-- On crée une section pour la page d'accueil -->
<div class="template global">
    <section class="accueil__section flexbox">
        <?php
            //On va chercher le titre de la page et le contenu de la page
            if ( have_posts() ) : the_post(); ?>
                <h1><?= get_the_title(); ?></h1>
            <?php the_content();?>
        <?php endif;?>
    </section>
    <!-- Vague du début de la section pays -->
    <?php
        get_template_part('gabarit/vague')
    ?>
</div>

<!-- Section pays -->
<div id="pays" class="template global bck-primaire-100">
    <section>
        <?php
            //On affiche la liste des pays
            echo do_shortcode('[em_pays]');
        ?>
    </section>

    <!-- Vague de fin de la section pays -->
    <?php
        get_template_part('gabarit/vague')
    ?>
</div>

<!-- On inclut le footer -->
<?php get_footer(); ?>