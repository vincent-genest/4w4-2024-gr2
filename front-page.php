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
                    <button class="entete__button">Voir plus&emsp;➜</button>
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
                /*
                get_categories() : Est l'ensemble des catégories du site
                get_category() : Est l'ensemble des catégories d'un post

                $categories = get_categories();
                foreach($categories as $elm_categorie){
                    $nom = $elm_categorie->name;
                    $description = $elm_categorie->description;
                    $nombre_destinations = $elm_categorie->count;
                    $url_categorie = get_term_link($elm_categorie->id);
                    ?>

                    <article>
                    <h3> php echo nom; </h3>
                    <p> php echo description; </p>
                    <p> Nombre de destination : php echo nombre_destinations; </p>
                }
                */
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
                                    <button>
                                        <?php
                                        // On change le message du bouton selon le nombre de destinations
                                        if ($nombre_destinations > 1) {
                                            echo "Voir les " . $nombre_destinations . " destinations&emsp;➜";
                                        } else {
                                            echo "Voir la destination&emsp;➜";
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
                        // Récupérer le slug de l'article
                        $slug = basename(get_permalink());
                        // Construire l'URL de l'image en utilisant le slug
                        // $image_url = get_template_directory_uri() . '/images/populaires/' . $slug . '.jpg';
                    ?>
                        <div class="carte">
                            <!-- <img src="<php echo esc_url($image_url); ?>" alt="<php the_title(); ?>"> -->
                            <?= the_post_thumbnail("medium"); ?>
                            <h4><?php the_title(); ?></h4>
                            <?php the_category() ?>
                            <!-- Afficher l'image avec l'URL construite -->
                            <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                            <a href="<?= get_permalink() ?>">Voir plus</a>
                        </div>
                    <?php endwhile;
                endif; ?>

                </div>
            </section>
        </div>
        <div id="galerie" class="global diagonal bck-primaire-100">
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