<?php
    /**
     * Modèle de base index.php
     */
    get_header();
    
?>
        <!-- <h1>Single.php</h1> -->
        <!-- afficher l'image de la destination -->
        <?php
            $image_url = get_the_post_thumbnail_url();
        ?>

        <div id="accueil" class="global bck-primaire-100 accueil_single">
            <section class="accueil__section flexbox">
                <div>
                    <div class="entete__article" style="background-image: url('<?= $image_url ?>');">
                    </div>
                    <?php if(have_posts()):
                        while(have_posts()): the_post();?>
                            <div class="carte">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>          
                                <div class="carte__contenu">
                                    <div class="carte__infos">
                                        <?php the_category() ?>
                                            <div class="carte__icones">
                                                <p><span class="material-symbols-outlined">thermometer_loss</span> <?php the_field("temperature_minimum") ?>°</p>
                                                <p><span class="material-symbols-outlined">thermometer_gain</span> <?php the_field("temperature_maximum") ?>°</p>
                                                <p> <span class="material-symbols-outlined">humidity_percentage</span> <?php the_field("humidite") ?>%</p>
                                                <p> <span class="material-symbols-outlined">travel</span> <?php the_field("ville_avoisinante") ?></p>
                                            </div>

                                    </div>
                                    <div class="carte__img"></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>

        <div id="evenement" class="global bck-primaire-100">
            <section class="evenement__section">
            
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>
        
        <script src="<?php echo get_template_directory_uri() . '/js/single.js';?>"> </script>
        <?php get_footer(); ?>