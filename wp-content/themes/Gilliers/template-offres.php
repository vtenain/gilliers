<?php
/*
Template Name: Page nos offres de transport
*/
?>
<?php get_header();?>
    <?php
        while(have_posts()):
            the_post();            
    ?>

    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-centres.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > Nos offres de transport</p>
        </section>

        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau"><?= the_field('first', 'options'); ?></p>
                <p class="lastBandeau"><?= the_field('second', 'options'); ?></p>
            </section>
        </section>

        <?php
            $personne1 = get_field('photo_1');
            $personne2 = get_field('photo_2');
        ?>
        <section class="offresDesc">
            <section class="description">
                <section class="imgOffres">
                    <section>
                        <img src="<?php echo $personne1['sizes']['large']; ?>" alt="Photo d'une personne">
                    </section>
                    <section>
                        <img src="<?php echo $personne2['sizes']['large']; ?>" alt="Photo d'une personne">
                    </section>
                </section>
                <section class="texte">
                    <p><?= the_field('titre_offres'); ?></p>
                   <?= the_field('description_offres'); ?>
                </section>
            </section>
            <?php
                $first = get_field('premier_element');
                $firstImg = get_field('premier_element')['image_chaine1'];
                $second = get_field('deuxieme_element');
                $secondImg = get_field('deuxieme_element')['image_chaine2'];
                $third = get_field('troisieme_element');
                $thirdImg = get_field('troisieme_element')['image_chaine3'];
            ?>
            <section class="chaine">
                <h2><?= the_field('titre_chaine'); ?></h2>
                <section>
                    <section class="logistique">
                        <section class="image">
                            <img src="<?php echo $firstImg['sizes']['large']; ?>" alt="Pictogramme d'une femme">
                        </section>
                        <h3><?= $first['titre_chaine1']; ?></h3>
                        <section class="descLogistique">
                            <p><?= $first['description_chaine1']; ?></p>
                        </section>
                    </section>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-yellow.png" alt="Flèche jaune">
                    <section class="logistique">
                        <section class="image">
                            <img src="<?php echo $secondImg['sizes']['large']; ?>" alt="Pictogramme d'un entrepot">
                        </section>
                        <h3><?= $second['titre_chaine2']; ?></h3>
                        <section class="descLogistique">
                            <p><?= $second['description_chaine2']; ?></p>
                        </section>
                    </section>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-yellow.png" alt="Flèche jaune">
                    <section class="logistique">
                        <section class="image">
                            <img src="<?php echo $thirdImg['sizes']['large']; ?>" alt="Pictogramme d'un camion">
                        </section>
                        <h3><?= $third['titre_chaine3']; ?></h3>
                        <section class="descLogistique">
                            <p><?= $third['description_chaine3']; ?></p>
                        </section>
                    </section>
                </section>
                <a href="<?= the_field('lien_bouton'); ?>" class="btn-yellow"><?= the_field('txt_btn'); ?></a>
            </section>
        </section>
    </section>

    <?php
        $blocs = get_field('blocs');
        $bloc1 = $blocs['bloc_1'];
        $bloc2 = $blocs['bloc_2'];
        $bloc3 = $blocs['bloc_3'];
        $bloc4 = $blocs['bloc_4'];
        $img = $bloc1['image_bloc'];
        $img2 = $bloc2['image_bloc2'];
        $img3 = $bloc3['image_bloc3'];
        $img4 = $bloc4['image_bloc4'];
    ?>
    <section class="transport" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-offres.png') no-repeat; background-size:cover; background-position:center;">
        <h2><?= the_field('titre_offre'); ?></h2>
        <p><?= the_field('description_offre'); ?></p>
        <section class="offresTransport">
            <section>
                <section class="imgTransport">
                    <img src="<?php echo $img['sizes']['large']; ?>" alt="Icône de la Tour Eiffel">
                </section>
                <section class="titreTransport">
                    <?= $bloc1['titre_bloc']; ?>
                </section>
                <?= $bloc1['description_bloc']; ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rectangle.png" alt="Rectangle">
            </section>
            <section>
                <section class="imgTransport">
                    <img src="<?php echo $img2['sizes']['large']; ?>" alt="Icône d'un chariot">
                </section>
                <section class="titreTransport">
                    <?= $bloc2['titre_bloc2']; ?>
                </section>
                <?= $bloc2['description_bloc2']; ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rectangle.png" alt="Rectangle">
            </section>
            <section>
                <section class="imgTransport">
                    <img src="<?php echo $img3['sizes']['large']; ?>" alt="Icône dangereux">
                </section>
                <section class="titreTransport">
                    <?= $bloc3['titre_bloc3']; ?>
                </section>
                <?= $bloc3['description_bloc3']; ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rectangle.png" alt="Rectangle">
            </section>
            <section>
                <section class="imgTransport">
                    <img src="<?php echo $img4['sizes']['large']; ?>" alt="Icône d'un camion">
                </section>
                <section class="titreTransport">
                    <?= $bloc4['titre_bloc4']; ?>
                </section>                
                <?= $bloc4['description_bloc4']; ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rectangle.png" alt="Rectangle">
            </section>
        </section>
    </section>

    <?php
        $imgBandeau = get_field('titre_bandeau');
    ?>
    <section class="besoin" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-besoin.png') no-repeat; background-size:cover; background-position:center;">
        <section>
            <section class="besoinDevis">
                <img src="<?= $imgBandeau['sizes']['large']; ?>" alt="Besoin d'un conseil, d'un devis ?">
            </section>
            <a href="<?= the_field('lien_bandeau'); ?>" class="btn-white"><?= the_field('txt_btn_bandeau'); ?></a>
        </section>
    </section>

    <?php
        endwhile;
        wp_reset_postdata();
    ?>
<?php get_footer();?>