<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
        <!-- <h1>Front-page.php</h1> -->
        <div id="entete" class="bck-primaire-300 global">

            <section class="entete__header">
                <h1 class="bgc-texte"><?= get_bloginfo("name"); ?> </h1>
                <h2 class="bgc-texte"><?= get_bloginfo("description"); ?> </span></h2>
                <h3 class="bgc-texte">Découvrez une foule de voyages à portée de main</h3>
                <a href="#accueil">
                    <button class="entete__button clr-agencement-secondaire">Voir plus</button>
                </a>
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>
        <div id="accueil" class="global">
            <section class="accueil__section">
                <h2>Accueil (h2)</h2>
                <h3>Catégories</h3>
                <div class="section__categories">
                    <?php
                      
                        $categories = get_categories();
                    
                        foreach ($categories as $category) {
                        $cat_liens = get_term_link($category);
                        $cat_desc = $category->description;
                        $cat_desc_trimmed = wp_trim_words($cat_desc, 10);
                        $post_compte = $category->count;
                        $image_url = get_template_directory_uri() . '/images/categories/' . strtolower($category->slug) . ".jpg";
                        ?>

                            <div class="carte" style="background-image: url('<?php echo $image_url; ?>');">
                            <h2><a href="<?php echo esc_url($cat_liens); ?>"><?php echo $category->name; ?></a></h2>
                            <p><?php echo $cat_desc_trimmed; ?></p>
                            <p><a href="<?php echo esc_url($cat_link); ?>">Voir les <?php echo $post_compte; ?> destinations</a></p>
                        </div>
                        
                    <?php } ?>

                </div>
                <h3>Destinations populaires</h3>
                <div class="section__destinations">
                <!-- 
                    get_the_title(); // retourne une chaine qui contient le titre
                    the_title(); // echo du titre
                 -->

                    <?php if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="carte">
                                <h4><?php the_title(); ?></h4>
                                <?php the_category() ?>
                                <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                                <p><a href="<?= get_permalink() ?>">Voir plus</a></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

            </section>
        </div>
        <div id="galerie" class="global diagonal">
            <section class="galerie__section">
                <h2>Galerie (h2)</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <a href="">Culpa</a> qui nulla dolore provident dicta nam nemo corrupti ipsa beatae
                    voluptatem? Expedita officiis repellendus in dicta molestiae voluptatibus veniam eaque ipsa!
                </p>
                <div class="galerie__img">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie1.webp';?>" alt="galerie 1">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie2.webp';?>" alt="galerie 2">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie3.webp';?>" alt="galerie 3">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie4.webp';?>" alt="galerie 4">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie5.webp';?>" alt="galerie 5">
                    <img src="<?php echo get_template_directory_uri() . '/images/galerie6.webp';?>" alt="galerie 6">
                    <!-- 
                    <img src="images/galerie1.webp" alt="galerie 1">
                    <img src="images/galerie2.webp" alt="galerie 2">
                    <img src="images/galerie3.webp" alt="galerie 3">
                    <img src="images/galerie4.webp" alt="galerie 4">
                    <img src="images/galerie5.webp" alt="galerie 5">
                    <img src="images/galerie6.webp" alt="galerie 6">
                     -->
                </div>
                <blockquote>
                    Quelle galerie incroyable!
                    <span>Steve Jobs</span>
                </blockquote>
            </section>
        </div>
        <div id="evenement" class="global">
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