<?php
/**
*   Gabarit pour afficher les cartes des destinations
*/
// Récupérer le slug de l'article
$slug = basename(get_permalink()); ?>

<div class="carte">
    <?= the_post_thumbnail("medium"); ?>
    <h4><?php the_title(); ?></h4>
    <?php the_category() ?>
    <!-- Afficher l'image avec l'URL construite -->
    <p><?= wp_trim_words(get_the_content(), 10); ?></p>
    <a href="<?= get_permalink() ?>">Voir plus</a>
</div>