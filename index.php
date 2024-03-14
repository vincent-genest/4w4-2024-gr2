<?php
    /**
     * Modèle de base index.php
     */
    get_header();
?>
<!-- <h2>index.php</h2> -->
        <div id="entete" class="global">

            <section class="entete__header">
                <h1 class="bgc-texte">Thème du groupe 2</h1>
                <h2 class="bgc-texte">4w4 - Conception d'interface <span>et développement Web</span></h2>
                <h3 class="bgc-texte">TIM - Collège de maisonneuve</h3>
                <button class="entete__button">S'inscrire</button>
            </section>
            <?php
                get_template_part('gabarit/vague')
            ?>
        </div>
        <div id="accueil" class="global">
            <section class="accueil__section">
                <h2>Accueil (h2)</h2>
                <div class="section__cours">
                    
                    <!-- 
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            <details>
                            the_title('<h5>','</h5>');
                            $contenu = get_the_content();
                            $contenu = wp_trim_words($contenu, 10);
                            echo $contenu;
                            </details>
                        }
                    } -->
                    
                    <?php if(have_posts()):
                        while(have_posts()): the_post();
                            $titre = get_the_title();
                            $sigle = substr($titre, 0, 7);
                            $duree = substr($titre, strpos( $titre, '(') + 1, -1);
                            // $titre = trim(substr($titre, 7), $duree)
                            $titre = trim(substr($titre, 7, strpos($titre, '(') - 7));
                            // strpos()
                            ?>
                            <div class="carte">
                                <h5><?= $sigle; ?></h5>
                                <h4><?= $titre; ?></h4>
                                <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                                <h6>Durée : <?= $duree; ?></h6>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>

                </div>
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
        <div id="footer" class="global">
            <footer class="footer__section">
                <form class="recherche" action="">
                    <input class="recherche__input" type="search" name="" placeholder="Recherche" />
                    <button class="recherche__button">
                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                </form>
                <div class="sociaux">
                    <a target="_blank" href="https://www.facebook.com/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>Facebook icon</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path></svg> </a>
                    <a target="_blank" href="https://www.instagram.com/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path></svg></a>                    
                    <a target="_blank" href="https://wordpress.com/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>WordPress icon</title><path d="M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0"></path></svg></a>                    
                    <a target="_blank" href="https://github.com/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>GitHub icon</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                    <a target="_blank" href="https://www.youtube.com/"><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#fff"><title>YouTube icon</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path></svg></a>
                    <a target="_blank" href="https://www.pinterest.ca/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>Pinterest icon</title><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path></svg></a>
                    <a target="_blank" href="https://www.google.ca/"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#fff" xmlns="http://www.w3.org/2000/svg"><title>Google icon</title><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path></svg></a>                
                </footer>
        </div>
    </body>
</html>
