<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
        <!-- <h1>Single.php</h1> -->
        
        <div id="accueil" class="global bck-primaire-100">
            <section class="accueil__section flexbox">
                <div>
                    <?php if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="carte">
                                <h2><?php the_title(); ?></h2>
                                <?php the_category() ?>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                </div>
            </section>
        </div>

        <div id="evenement" class="global bck-primaire-100">
            <section class="evenement__section">
                <h2>Événement (h2)</h2>
                <details>
                    <summary>Lorem Ipsum</summary>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, reprehenderit corporis consequatur culpa odit quam nulla facere dolorum impedit quidem animi, minus quas molestiae repellat necessitatibus atque doloribus laborum cum.
                </details>
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio error consequatur iste facere cumque, saepe quaerat magnam autem
                    dignissimos non, molestias laudantium illo praesentium maxime deleniti sed incidunt qui quia.
                    <span>une autre personne connue</span>
                </blockquote>
                <a href="#">Voir plus</a>
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>

        <?php get_footer(); ?>