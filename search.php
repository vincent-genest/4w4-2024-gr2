<?php
/**
 * Modèle de recherche
 */

get_header();
?>
    
    <div id="accueil" class="global bck-primaire-100">
        <section class="accueil__section">
        <div class="section__destinations">
        <?php if (have_posts()) : ?>
                    <h1>Résultats de recherche pour : "<?php echo esc_html(get_search_query()); ?>"</h1>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="carte">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                            <p><a href="<?php echo get_permalink(); ?>">Voir plus</a></p>
                        </div>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <h1>Aucun résultat trouvé pour : "<?php echo esc_html(get_search_query()); ?>"</h1>
                <?php endif; ?>

            </div>
        </section>
    </div>
<!-- Le reste du contenu du modèle single.php après la section accueil__section -->
<div id="evenement" class="global bck-primaire-100">
    <section class="evenement__section">
        <h2>Événement (h2)</h2>
        <details>
            <summary>Lorem Ipsum</summary>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, reprehenderit corporis consequatur culpa odit quam nulla facere dolorum impedit quidem animi, minus quas molestiae repellat necessitatibus atque doloribus laborum cum.
        </details>
        <blockquote>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio error consequatur iste facere cumque, saepe quaerat magnam autem dignissimos non, molestias laudantium illo praesentium maxime deleniti sed incidunt qui quia.
            <span>une autre personne connue</span>
        </blockquote>
        <a href="#">Voir plus</a>
    </section>
    <?php
        get_template_part('gabarit/vague')
    ?>
</div>

<?php get_footer(); ?>