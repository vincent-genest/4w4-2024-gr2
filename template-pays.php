<?php
/**
 * Template name: Pays
 *
 */
?>
<?php get_header(); ?>
<div class="template global">
    <section class="accueil__section flexbox">
        <?php
            if ( have_posts() ) : the_post(); ?>
                <h1><?= get_the_title(); ?></h1>
            <?php the_content();?>
        <?php endif;?>
    </section>
    <?php
        get_template_part('gabarit/vague')
    ?>
</div>

<div id="pays" class="template global bck-primaire-100">
    <section>
        <?php
            echo do_shortcode('[em_pays]');
        ?>
    </section>
    <?php
        get_template_part('gabarit/vague')
    ?>
</div>
<?php get_footer(); ?>