<?php
    /**
     * Modèle de base de l'affichage d'une liste d'une certaine catégorie
     */
    get_header();
?>
        <!-- <h1>category</h1> -->
                <?php
                    // Obtenir l'objet de la catégorie en cours
                    $category = get_queried_object();
                    // Obtenir le slug de la catégorie
                    $category_slug = $category->slug;
                    // afficher l'image en utilisant le slug de la catégorie
                    $image_url = get_template_directory_uri() . '/images/categories/' . strtolower($category_slug) . ".jpg";
                ?>
                <!-- affiche l'image de la caté.gore -->
                
        <!-- <div id="accueil" class="global"> -->
        <div id="accueil" class="global accueil__category bck-primaire-100">

            <section class="accueil__section flexbox">
            
                <div class="entete__category" style="background-image: url('<?= $image_url ?>');">
                <h2><?php  echo single_cat_title(); ?></h2>
                </div>

                <div class="section__destinations">
        
                
                    <?php if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="carte">
                                <h4><?php the_title(); ?></h4>
                                <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                                <p><a href="<?= get_permalink() ?>">Voir plus</a></p>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>


            </section>
        </div>
        <div id="evenement" class="global bck-primaire-100">
            <section class="evenement__section">
                <h2>Événements</h2>
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