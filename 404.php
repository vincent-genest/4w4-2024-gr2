<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
<!-- <h2>index.php</h2> -->

        <div id="accueil" class="global bck-primaire-100">
            <section class="accueil__section acceuil__404">
            <div class="section__404">
                    <h1>Erreur 404</h1>
                    <h5>La page que vous cherchez n'existe pas.</h5>
                    <p>Pour revenir à la page d'acceuil, cliquez sur le bouton</p>
                    <a href="<?php echo get_home_url(); ?>">
                        <button class="erreur404__button bouton__lien">Retourner à l'accueil</button>
                    </a>
                    
                    <!-- La barre de recherche -->
                    <?php get_search_form() ?>

                    <div class="liste__404">
                        <?php
                        $categories_parents = get_categories(array('parent' => 0)); // Récupère toutes les catégories parentes
                        
                        foreach ($categories_parents as $categorie_parente) {
                            $nom_categorie_parente = $categorie_parente->name;
                            
                            // Obtenez l'ID de la catégorie parent avec le nom spécifié
                            $categorie_parente_trouvee = get_category_by_slug($categorie_parente->slug);
                            
                            // Si la catégorie parente est trouvée, récupérez ses catégories enfants
                            if ($categorie_parente_trouvee) {
                                $id_categorie_parente = $categorie_parente_trouvee->term_id;
                                $categories_enfants = get_categories(array('parent' => $id_categorie_parente));
                                
                                echo '<div>';
                                echo '<h5>' . $nom_categorie_parente . '</h5>'; // Utilisez le nom du parent comme titre
                                echo '<ul>';
                                
                                foreach ($categories_enfants as $categorie_enfant) {
                                    $lien_categorie_enfant = get_term_link($categorie_enfant);
                                    echo '<li><a href="' . esc_url($lien_categorie_enfant) . '">' . $categorie_enfant->name . '</a></li>';
                                }
                                
                                echo '</ul>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>

                </div>
                    <img class="image-404" src="http://localhost/4w4/wp-content/uploads/2024/04/404.png" alt="illustration d'erreur 404">
                </section>
            </div>
            <?php
    get_footer();
?>
