<?php
/*
Template Name: Page fiche actualite
*/
?>
<?php get_header();?>
    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-presentation-centres.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > <a href="actualites.html">Nos actualités</a> > Titre de l'actualité</p>
        </section>

        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau">Depuis 60 ans,</p>
                <p class="lastBandeau">nous vous livrons le meilleur de nous-mêmes.</p>
            </section>
        </section>

        <section class="actu">
            <h2>Titre de l'actualité</h2>
            <p>Publiée le 10.01.20</p>
            <section class="contentActu">
                <section class="imageActu">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actu.png" alt="Photo">
                    <p>Lorem ipsum</p>
                </section>
                <section class="texteActu">
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facere in deserunt nobis labore, iure soluta suscipit atque libero fuga maiores aspernatur veniam incidunt dignissimos. Quaerat modi beatae sed soluta?</p>
                </section>
            </section>
            <section class="contentActu">
                <section class="texteActu">
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facere in deserunt nobis labore, iure soluta suscipit atque libero fuga maiores aspernatur veniam incidunt dignissimos. Quaerat modi beatae sed soluta?</p>
                </section>
                <section class="imageActu">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actu.png" alt="Photo">
                    <p>Lorem ipsum</p>
                </section>
            </section>
        </section>
    </section>

    <section class="conseil" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-conseil.png') no-repeat; background-size:cover; background-position:center;">
        <section>
            <section class="carre carreBleu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carre-bleu.png') no-repeat; background-size:100%; background-position:center;">
                <section>
                    <h2>Besoin d'un conseil, d'un devis ?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, omnis! Maxime officiis adipisci deserunt maiores! Quis, earum vitae molestiae sed ipsa beatae eius cum deserunt vel, amet, a non sapiente?</p>
                    <a href="contact.html" class="btn-yellow">Nous contacter</a>
                </section>
            </section>
            <section class="carre carreJaune" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carre-jaune.png') no-repeat; background-size:100%; background-position:center;">
                <section>
                    <h2>Nous rejoindre</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, omnis! Maxime officiis adipisci deserunt maiores! Quis, earum vitae molestiae sed ipsa beatae eius cum deserunt vel, amet, a non sapiente?</p>
                    <a href="offres.html" class="btn-white">Voir toutes nos offres d'emploi</a>
                </section>
            </section>
        </section>        
    </section>
<?php get_footer();?>