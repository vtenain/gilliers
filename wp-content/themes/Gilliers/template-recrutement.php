<?php
/*
Template Name: Page recrutement
*/
?>
<?php get_header();?>
    <?php
        while(have_posts()):
            the_post();            
    ?>
    <section style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-presentation-centres.png') no-repeat; background-size:cover; background-position:center;" class="firstSection">
        <section class="ariane">
            <p><a href="index.html">Accueil</a> > Recrutement</p>
        </section>

        <section class="bandeau" style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-pages.png') no-repeat; background-size:cover; background-position:center;">
            <section>
                <p class="firstBandeau"><?= the_field('first', 'options'); ?></p>
                <p class="lastBandeau"><?= the_field('second', 'options'); ?></p>
            </section>
        </section>

        <section class="pourquoi">
            <h2><?= the_field('titre_recru'); ?></h2>
            <?= the_field('sous-titre_recru'); ?>
            <?= the_field('description_recru');?>
        </section>

        <section class="emplois">
            <h2><?= the_field('titre_offres'); ?></h2>
            <?php 
                endwhile;
                wp_reset_postdata();
            ?>
            <section class="offresEmploi">
                <section class="job">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo">
                    <article>
                        <p class="cdi">CDI - Homme / Femme</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ispum dolor sit amet, lorem ipsum dolor sit amet</p>
                    </article>
                    <section></section>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, nostrum. Cum, deserunt doloribus adipisci laboriosam assumenda quibusdam. Est saepe quo exercitationem praesentium ratione tenetur, deserunt, error enim modi magni labore.</p>
                    <a href="#" class="btn-yellow">Voir l'offre</a>
                </section>
                <section class="job">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo">
                    <article>
                        <p class="cdi">CDI - Homme / Femme</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ispum dolor sit amet, lorem ipsum dolor sit amet</p>
                    </article>
                    <section></section>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, nostrum. Cum, deserunt doloribus adipisci laboriosam assumenda quibusdam. Est saepe quo exercitationem praesentium ratione tenetur, deserunt, error enim modi magni labore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora delectus optio ad illum corrupti itaque tempore sequi quaerat modi labore, saepe iure dolores voluptas dolorem sint assumenda error eligendi. Architecto.</p>
                    <a href="#" class="btn-yellow">Voir l'offre</a>
                </section>
                <section class="job">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo">
                    <article>
                        <p class="cdi">CDI - Homme / Femme</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ispum dolor sit amet, lorem ipsum dolor sit amet</p>
                    </article>
                    <section></section>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, nostrum. Cum, deserunt doloribus adipisci laboriosam assumenda quibusdam. Est saepe quo exercitationem praesentium ratione tenetur, deserunt, error enim modi magni labore.</p>
                    <a href="#" class="btn-yellow">Voir l'offre</a>
                </section>
                <section class="job">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo">
                    <article>
                        <p class="cdi">CDI - Homme / Femme</p>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </article>
                    <section></section>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, nostrum. Cum, deserunt doloribus adipisci laboriosam assumenda quibusdam. Est saepe quo exercitationem praesentium ratione tenetur, deserunt, error enim modi magni labore.</p>
                    <a href="#" class="btn-yellow">Voir l'offre</a>
                </section>
                <section class="job">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/actus.png" alt="Photo">
                    <article>
                        <p class="cdi">CDI - Homme / Femme</p>
                        <p>Lorem ipsum dolor sit amet consectetur. Lorem ispum dolor sit amet, lorem ipsum dolor sit amet</p>
                    </article>
                    <section></section>
                    <p>Lorem ipsum dolor sit.</p>
                    <a href="#" class="btn-yellow">Voir l'offre</a>
                </section>
            </section>
        </section>

        <?php
            while(have_posts()):
                the_post();            
        ?>
        <section class="bandeauRejoindre"  style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-emploi.png') no-repeat; background-size:cover; background-position:center;">
            <section  style="background:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg-bandeauRejoindre.png') no-repeat; background-size:100% 100%; background-position:center;">
                <h2><?= the_field('titre_rejoindre'); ?></h2>
                <?= the_field('description_rejoindre'); ?>
                <a href="<?= the_field('lien_rejoindre'); ?>" class="btn-white"><?= the_field('txt_rejoindre'); ?></a>
            </section>
        </section>
    </section>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
<?php get_footer();?>