<?php
/**
 * Template name: Evenement
 *
 */
?>
<?php get_header(); ?>
<main class="template global">
    <section class="accueil__section flexbox">
        <?php
            if ( have_posts() ) : the_post(); ?>
            <h1><?= get_the_title(); ?></h1>
            <?php the_content();?>
        <?php endif;?>
    </section>
</main><!-- #main -->
<?php
get_footer();