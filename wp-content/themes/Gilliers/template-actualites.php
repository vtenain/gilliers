<?php
/*
Template Name: Page actualités
*/
?>
<?php get_header();?>
    <?php
        while(have_posts()):
            the_post();            
    ?>

    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-presentation-centres.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > Nos actualités</p>
        </section>

        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau"><?= the_field('first', 'options'); ?></p>
                <p class="lastBandeau"><?= the_field('second', 'options'); ?></p>
            </section>
        </section>

        <section class="presentationActus">
            <h2><?= the_field('titre_actus') ?></h2>
            <?= the_field('description_actus'); ?>
            <?php
                endwhile;
                wp_reset_postdata();
            ?>
            <section class="cardsActus">
                <?php   
                    $i=-1; $array = []; 
                    $args = array ( 'post_type' => 'actualites', 'posts_per_page' => -1, 'orderby' => 'publish_date', 'order' => 'DESC');
                    $the_query = new WP_Query( $args ); 
                    if ($the_query->have_posts()): while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $i++;
                    array_push($array, [get_the_date(), get_the_title(), get_field("extrait")]); 
                ?>
                <?php endwhile; wp_reset_postdata();?>
                <?php else: ?> <p>Désolé, aucun contenu à afficher</p>
                <?php endif; ?>

                <?php $col1 = []; $col2 = []; $col3 = []; $col4 = []; $col5 = []; $col6 = []; $col7 = []; $k=-1; 
                for($j=0; $j < count($array); $j++):
                    if($k === 3): $k = -1; endif; $k++;?>
                    <?php if($k === 0): array_push($col1, $array[$j]); endif;?>
                    <?php if($k === 1): array_push($col2, $array[$j]); endif;?>
                    <?php if($k === 2): array_push($col3, $array[$j]); endif;?>
                    <?php if($k === 3): array_push($col4, $array[$j]); endif;?>
                <?php endfor; 

                for($l=0; $l < count($array); $l++):
                    if($k === 1): $k = -1; endif; $k++;?>
                    <?php if($k === 0): array_push($col5, $array[$l]); endif;?>
                    <?php if($k === 1): array_push($col6, $array[$l]); endif;?>
                <?php endfor; 

                for($m=0; $m < count($array); $m++): ?>
                    <?php array_push($col7, $array[$m]);?>
                <?php endfor; ?>

                <section class="column large">
                <?php for($a=0; $a < count($col1); $a++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col1[$a][0] ?></p>
                            <p class="titreActu"><?= $col1[$a][1] ?></p>
                            <p class="descActu"><?= $col1[$a][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>
                <section class="column large">
                <?php for($b=0; $b < count($col2); $b++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col2[$b][0] ?></p>
                            <p class="titreActu"><?= $col2[$b][1] ?></p>
                            <p class="descActu"><?= $col2[$b][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>
                <section class="column large">
                <?php for($c=0; $c < count($col3); $c++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col3[$c][0] ?></p>
                            <p class="titreActu"><?= $col3[$c][1] ?></p>
                            <p class="descActu"><?= $col3[$c][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>
                <section class="column large">
                <?php for($d=0; $d < count($col4); $d++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col4[$d][0] ?></p>
                            <p class="titreActu"><?= $col4[$d][1] ?></p>
                            <p class="descActu"><?= $col4[$d][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>

                <section class="column medium">
                <?php for($e=0; $e < count($col5); $e++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col5[$e][0] ?></p>
                            <p class="titreActu"><?= $col5[$e][1] ?></p>
                            <p class="descActu"><?= $col5[$e][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>
                <section class="column medium">
                <?php for($f=0; $f < count($col6); $f++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col6[$f][0] ?></p>
                            <p class="titreActu"><?= $col6[$f][1] ?></p>
                            <p class="descActu"><?= $col6[$f][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>

                <section class="column small">
                <?php for($g=0; $g < count($col7); $g++): ?>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu"><?= $col7[$g][0] ?></p>
                            <p class="titreActu"><?= $col7[$g][1] ?></p>
                            <p class="descActu"><?= $col7[$g][2] ?></p>
                            <p class="btn-actu" style="background:url("<?php echo get_stylesheet_directory_uri(); ?>"/assets/img/bg-btn.png") no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                <?php endfor; ?>
                </section>
            </section>
        </section>
    </section>

    <?php
        while(have_posts()):
            the_post();            
    ?>
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