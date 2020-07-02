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
                <section class="column">
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2021</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum </p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa tenetur totam tempora perspiciatis officiis nobis iure! Veritatis, et autem, at eius praesentium voluptate debitis voluptas, quidem itaque exercitationem adipisci.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                </section>
                
                <section class="column">
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2022</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                </section>
                
                <section class="column">
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2023</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur suscipit harum nulla a nesciunt alias sed odio voluptatibus, reiciendis pariatur quas modi expedita eveniet facilis sunt iste, culpa beatae! Perferendis?</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>  
                </section>
                <section class="column">
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2022</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
                    <article>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo actualtité">
                        <section>
                            <p class="dateActu">Publiée le 10.01.2020</p>
                            <p class="titreActu">Lorem ipsum dolor sit amet</p>
                            <p class="descActu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus similique, enim ad totam quos nam ducimus minima.</p>
                            <p class="btn-actu" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-btn.png') no-repeat; background-size:cover; background-position:center;"><a href="#">En savoir plus</a></p>
                        </section>
                    </article>
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