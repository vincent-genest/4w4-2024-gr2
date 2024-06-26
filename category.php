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
            
                <div class="entete__article" style="background-image: url('<?= $image_url ?>');">
                <h2><?php  echo single_cat_title(); ?></h2>
                </div>

                <div class="section__destinations">
        
                
                    <?php if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="carte">
                                <?= the_post_thumbnail("medium"); ?>
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
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>

        <?php get_footer(); ?>