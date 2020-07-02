<?php
/*
Template Name: Page fiche offre
*/
?>
<?php get_header();?>

    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-presentation-centres.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > <a href="recrutement.html">Recrutement</a> > Titre de l'offre d'emploi</p>
        </section>
        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau">Depuis 60 ans,</p>
                <p class="lastBandeau">nous vous livrons le meilleur de nous-mêmes.</p>
            </section>
        </section>

        <section class="offreEmploi">
            <h2>Titre de l'offre d'emploi</h2>
            <p>Publiée le 10.01.20</p>
            <section class="contentEmploi">
                <section class="imageEmploi">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actu.png" alt="Photo">
                    <p>Lorem ipsum</p>
                </section>
                <section class="texteEmploi">
                    <p>Lorem ipsum</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error facere in deserunt nobis labore, iure soluta suscipit atque libero fuga maiores aspernatur veniam incidunt dignissimos. Quaerat modi beatae sed soluta?</p>
                </section>
            </section>
        </section>

        <section class="candidater">
            <h2>Candidater</h2>
        </section>
    </section>
<?php get_footer();?>