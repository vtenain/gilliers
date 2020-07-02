<?php
/*
Template Name: Page qui sommes nous
*/
?>
<?php get_header();?>
    <?php
        while(have_posts()):
            the_post();
            $imgBandeau = get_field('image_de_fond', 'options');
            
    ?>

    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-presentation.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > Qui sommes - nous ?</p>
        </section>

        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau"><?= the_field('first', 'options'); ?></p>
                <p class="lastBandeau"><?= the_field('second', 'options'); ?></p>
            </section>
        </section>

        <?php
            $competences = get_field('competences');
            $competence1 = $competences['competence_1'];
            $competence2 = $competences['competence_2'];
            $competence3 = $competences['competence_3'];
            $competence4 = $competences['competence_4'];
            $imgComp1 = $competence1['image_titre'];
            $imgComp2 = $competence2['image_titre2'];
            $imgComp3 = $competence3['image_titre3'];
            $imgComp4 = $competence4['image_titre4'];
        ?>
        <section class="presentation">
            <h2><?= the_field('titre_pres'); ?></h2>
            <?= the_field('description_pres'); ?>
            <section class="competences">
                <section>
                    <img src="<?php echo $imgComp1['sizes']['large']; ?>" alt="Fierté">
                    <?= $competence1['description_comp1'];?>
                </section>
                <section>
                    <img src="<?php echo $imgComp2['sizes']['large']; ?>" alt="Agilité">
                    <?= $competence2['description_comp2'];?>
                </section>
                <section>
                    <img src="<?php echo $imgComp3['sizes']['large']; ?>" alt="Rapidité">
                    <?= $competence3['description_comp3'];?>
                </section>
                <section>
                    <img src="<?php echo $imgComp4['sizes']['large']; ?>" alt="Fiabilité">
                    <?= $competence4['description_comp4'];?>
                </section>
            </section>
        </section>

        <?php
            $dates = get_field('dates');
            $date1 = $dates['date_1'];
            $date2 = $dates['date_2'];
            $date3 = $dates['date_3'];
            $date4 = $dates['date_4'];
        ?>
        <section class="historique">
            <h2><?= the_field('titre_hist'); ?></h2>
            <p><?= the_field('description_hist'); ?></p>
            <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-historique.png') no-repeat; background-size:contain; background-position:center;">
                <section class="histoire">
                    <section>
                        <h2><?= $date1['date1']; ?></h2>
                        <p class="titleHistoire"><?= $date1['sous_titre_date1']; ?></p>
                        <?= $date1['desc_date1']; ?>
                    </section>
                    <section class="histoireMargin">
                        <h2><?= $date2['date2']; ?></h2>
                        <p class="titleHistoire"><?= $date2['sous_titre_date2']; ?></p>
                        <?= $date2['desc_date2']; ?>
                    </section>
                </section>
                <section class="histoire">
                    <section>
                        <h2><?= $date3['date3']; ?></h2>
                        <p class="titleHistoire"><?= $date3['sous_titre_date3']; ?></p>
                        <?= $date3['desc_date3']; ?>
                    </section>
                    <section class="histoireMargin">
                        <h2><?= $date4['date4']; ?></h2>
                        <p class="titleHistoire"><?= $date4['sous_titre_date4']; ?></p>
                        <?= $date4['desc_date4']; ?>
                    </section>
                </section>
            </section>
        </section>

        <?php
            $info1 = get_field('description')['info_1'];
            $info2 = get_field('description')['info_2'];
            $info3 = get_field('description')['info_3'];
            $info4 = get_field('description')['info_4'];
            $info5 = get_field('description')['info_5'];
            $info6 = get_field('description')['info_6'];
            $bg_atouts = get_field('bg_atouts');
        ?>
        <section class="atouts" style="background:url('<?php echo $bg_atouts['sizes']['large']; ?>') no-repeat; background-size:100% 100%; background-position:center;">
        <section>
            <h2><?= the_field('titre_atouts'); ?></h2>
            <section class="atoutsDesc">
                <section>
                    <p class="chiffre"><?= $info1['chiffre1']; ?></p>
                    <?= $info1['description1']; ?>
                </section>
                <section>
                    <p class="chiffre"><?= $info2['chiffre2']; ?></p>
                    <?= $info2['description2']; ?>
                </section>
                <section>
                    <p class="chiffre"><?= $info3['chiffre3']; ?></p>
                    <?= $info3['description3']; ?>
                </section>
                <section>
                    <img src="<?php echo $info4['chiffre4']['sizes']['large']; ?>" class="chiffre" alt="Icône Tour Eiffel">
                    <?= $info4['description4']; ?>
                </section>
                <section>
                    <img src="<?php echo $info5['chiffre5']['sizes']['large']; ?>" class="chiffre" alt="Icône chariot">
                    <?= $info5['description5']; ?>
                </section>
                <section>
                    <img src="<?php echo $info6['chiffre6']['sizes']['large']; ?>" class="chiffre" alt="Icône transport dangereux">
                    <?= $info6['description6']; ?>
                </section>
            </section>
            <a href="<?= the_field('lien_btn'); ?>" class="btn-yellow"><?= the_field('texte_btn'); ?></a>
        </section>
    </section>

    <?php
        $bg_centres = get_field('bg_centres');
        $carte = get_field('image_carte');
        $centre1 = get_field('centre_1');
        $centre2 = get_field('centre_2');
        $img = $centre1['image_centre1'];
        $img2 = $centre2['image_centre2'];
    ?>
    <section class="centres" style="background:url('<?php echo $bg_centres['sizes']['large']; ?>') no-repeat; background-size:cover; background-position:center;">
        <section>
        <section class="lieux">
                <h2><?= the_field('titre_centres'); ?></h2>
                <section>
                    <section class="adresse">
                        <img src="<?php echo $img['sizes']['large']; ?>" alt="Photo du centre logistique d'Arques">
                        <p><?= $centre1['titre_centre1']; ?></p>
                        <?= $centre1['adresse_centre1']; ?>
                    </section>
                    <img src="<?php echo $carte['sizes']['large']; ?>" alt="Carte de l'implantation des centres logistique de Transport Gilliers">
                    <section class="adresse">
                        <img src="<?php echo $img2['sizes']['large']; ?>" alt="Photo du centre logistique d'Arras">
                        <p><?= $centre2['titre_centre2']; ?></p>
                        <?= $centre2['adresse_centre2']; ?>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
<?php get_footer();?>