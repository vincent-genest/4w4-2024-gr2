<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
        <!-- <h1>Front-page.php</h1> -->
        <div id="entete" class="global">

            <section class="entete__header">
                <h1 class="bgc-texte"><?= get_bloginfo("name"); ?> </h1>
                <h4 class="bgc-texte"><?= get_bloginfo("description"); ?> </span></h4>
                    
                <a href="#accueil">
                    <button class="entete__button bouton__lien">Décourvir </button>
                </a>
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>
        <div id="accueil" class="global bck-primaire-100">
            <section class="accueil__section flexbox">

            
                <!-- CATÉGORIES -->
                <?php
            
                    //Fonction pour afficher les types de catégories 
                    function afficher_categories_parents() {
                        $parents = get_categories(array(
                            'parent' => 0, // Seulement les catégories sans parent
                        ));

                        // On appel la fonction pour afficher pour chaque catégories parents
                        foreach ($parents as $parent) {
                            $parent_name = $parent->name;
                            afficher_categories($parent_name);
                        }
                    }

                    // Fonction pour afficher les catégories enfants
                    function afficher_categories($parent_name) {
                        $parent_id = get_term_by('name', $parent_name, 'category')->term_id;

                        $categories = get_categories(array(
                            'parent' => $parent_id // Seules les catégories avec le nom de parent spécifié
                        ));

                        //Si la catéforie s'apelle galerie, on ne l'affiche pas
                        if($parent_name == "Galerie"){
                            return;
                        }

                        echo '<h2>' . $parent_name . '</h2>';
                        echo '<div class="section__categories">';

                        foreach ($categories as $category) :
                            $description_categories = wp_trim_words($category->description, 10);
                            $nombre_destinations = $category->count;
                            $url_categories = get_term_link($category);
                            $image_url = get_template_directory_uri() . '/images/categories/' . strtolower($category->slug) . ".jpg";
                    ?>

                            <div class="carte" style="background-image: url('<?= $image_url; ?>');">
                                <h2><a href="<?= esc_url($url_categories); ?>"><?= $category->name; ?></a></h2>
                                <p><?= $description_categories; ?></p>
                                <a href="<?= esc_url($url_categories); ?>">
                                    <button class="bouton__lien">
                                        <?php
                                        // On change le message du bouton selon le nombre de destinations
                                        if ($nombre_destinations > 1) {
                                            echo "Voir les " . $nombre_destinations . " destinations";
                                        } else {
                                            echo "Voir la destination";
                                        }
                                        ?>
                                    </button>
                                </a>
                            </div>
                    <?php
                        endforeach;

                        echo '</div>';
                    }

                // On affiche les catégories
                afficher_categories_parents();
                ?>

                <!-- ARTICLE POPULAIRE -->
                <h2>Destinations populaires</h2>
                <div class="section__destinations flexbox">
                    
                    <?php if(have_posts()):
                        while(have_posts()): the_post();
                            // $ma_categorie = "carte";
                            // if(in_category("galerie")){
                            //     $ma_categorie = "galerie";
                            // }
                            // get_template_part( 'gabarit/categorie', $ma_categorie );
                            
                            // afficher les carte populaires seulement
                            if (in_category('populaire')) {
                                get_template_part('gabarit/categorie', 'carte');
                            }
                            ?>
                        <?php endwhile;
                    endif; ?>
                </div>

                <h2>Destinations</h2>
                    <?php
                    // Appel du shortcode directement dans le fichier front-page.php
                    echo do_shortcode('[em_destination]');
                    ?>


            </section>
        </div>
        <div id="galerie" class="global diagonal bck-primaire-100">
            <section class="galerie__section">
                <h2>Galerie</h2>

                <?php if(have_posts()):
                        while(have_posts()): the_post();
                            if (in_category('galerie')) {
                                get_template_part( 'gabarit/categorie', "galerie" );
                            }
                            ?>
                        <?php endwhile;
                    endif; ?>
            </section>
        </div>
        <div id="evenement" class="global bck-primaire-100">
            <section class="evenement__section">
               
                <!-- <h2>À venir...</h2> -->
                <!-- <details>
                    <summary>Lorem Ipsum</summary>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, reprehenderit corporis consequatur culpa odit quam nulla facere dolorum impedit quidem animi, minus quas molestiae repellat necessitatibus atque doloribus laborum cum.
                </details>
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio error consequatur iste facere cumque, saepe quaerat magnam autem
                    dignissimos non, molestias laudantium illo praesentium maxime deleniti sed incidunt qui quia.
                    <span>une autre personne connue</span>
                </blockquote>
                <a href="#">Voir plus</a> -->
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>

        <?php get_footer(); ?>