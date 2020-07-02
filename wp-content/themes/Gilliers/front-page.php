<?php get_header();?>
    <?php
        while(have_posts()):
            the_post();
    ?>
    <section class="diapo">
        <div class="swiper-container diapoAccueil">
            <div class="swiper-wrapper">
                <?php 
                    $images = get_field('images');
                    for ($i=0; $i < count($images); $i++) { 
                        $image = $images[$i];
                ?>
              <div class="swiper-slide">
                  <img src="<?php echo $image['image']['url'] ?>" alt="Transports Gilliers: depuis 60 ans, nous vous livrons le meilleur de nous-mêmes">
              </div>
              <?php 
                    }
              ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
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
        $bloc_gauche = get_field('bloc_gauche');
        $bloc_droite = get_field('bloc_droite');
        $bg_devis = get_field('bg_devis');
    ?>
    <section class="conseil" style="background:url('<?php echo $bg_devis['sizes']['large']; ?>') no-repeat; background-size:cover; background-position:center;">
        <section>
            <section class="carre carreBleu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carre-bleu.png') no-repeat; background-size:100% 100%; background-position:center;">
                <section>
                    <h2><?= $bloc_gauche['titre_bloc1']; ?></h2>
                    <p><?= $bloc_gauche['description_bloc1']; ?></p>
                    <a href="<?= $bloc_gauche['lienBtn_bloc1']; ?>" class="btn-yellow"><?= $bloc_gauche['btn_bloc1']; ?></a>
                </section>
            </section>
            <section class="carre carreJaune" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/carre-jaune.png') no-repeat; background-size:100% 100%; background-position:center;">
                <section>
                    <h2><?= $bloc_droite['titre_bloc2']; ?></h2>
                    <p><?= $bloc_droite['description_bloc2']; ?></p>
                    <a href="<?= $bloc_droite['lienBtn_bloc2']; ?>" class="btn-white"><?= $bloc_droite['btn_bloc2']; ?></a>
                </section>
            </section>
        </section>        
    </section>

    <section  style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-confiance.png') no-repeat; background-size:cover; background-position:center;">
        <section class="actualites">
            <h2><?= the_field('titre_actus'); ?></h2>
            <p><?= the_field('description_actus'); ?></p>
            <?php
                endwhile;
                wp_reset_postdata(); 
            ?>
            <section class="actus">
                <?php
                    $args = array ( 'post_type' => 'actualites',
                    'posts_per_page' => '4' );
                    $the_query = new WP_Query( $args );
                    while ( $the_query->have_posts() ) :
                    $the_query->the_post();
                    $bloc1 = get_field('bloc_1');
                    $bloc2 = get_field('bloc_2');
                    $imgActu = $bloc1['image_actus1'];
                ?>
                <section>
                    <section style="background:url('<?php echo $imgActu['sizes']['large']; ?>') no-repeat; background-size:100%; background-position:center;" class="imgActus"></section>
                    <p class="dateActu">Publiée le <?php echo the_time('d.m.y'); ?></p>
                    <p class="titreActu"><?= $bloc1['titre_actus1']; ?></p>
                    <p class="descActu"><?= the_field('extrait'); ?> [...]</p>
                </section>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
                <?php
                     while(have_posts()):
                        the_post();
                ?>
            </section>
            <a href="<?= the_field('lienBtn_actus'); ?>" class="btn-yellow"><?= the_field('btnActus'); ?></a>
        </section>

        <?php
            $carton = get_field('img_confiance');
        ?>
        <section class="confiance">
            <img src="<?php echo $carton['sizes']['large']; ?>" alt="Cartons">
            <h2><?= get_field('titre_confiance'); ?></h2>
            <section class="diapoConfiance">
                <div class="swiper-container diapoConfiance">
                    <div class="swiper-wrapper">
                        <?php
                            $diapo = get_field('diaporama_confiance');
                            for ($i=0; $i < count($diapo); $i++) { 
                                $imageDiapo = $diapo[$i];
                        ?>
                        <div class="swiper-slide">
                            <img src="<?= $imageDiapo['image_confiance']['url']; ?>" alt="Logos partenaires">
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
        </section>
    </section>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
<?php get_footer();?>