<?php
    $args = array ( 'pagename' => 'footer');
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ) :
    $the_query->the_post();

    $logo = get_field('logo');
    $camion = get_field('image_camion');
    $logo_mediapilote = get_field('logo_mediapilote');
    $arques = get_field('arques');
    $arras = get_field('arras');
    $link = get_field('lien_mediapilote');
?>
    <footer>
        <section class="footerPrincipal">
            <section>
                <section>
                    <img src="<?php echo $logo['sizes']['large']; ?>" alt="Logo Transports Gilliers" class="logoFooter">
                    <p><?= the_field('description'); ?></p>
                </section>
                <section class="infos">
                    <section class="adresseFooter">
                        <i class="fas fa-map-marker-alt"></i>
                        <section>
                            <p><?= $arques['titre_arques']; ?></p>
                            <?= $arques['adresse_arques']; ?>
                        </section>
                    </section>
                    <section class="tel">
                        <i class="fas fa-phone-alt"></i>
                        <p><?= $arques['telephone_arques']; ?></p>
                    </section>
                    <section class="mail">
                        <i class="far fa-envelope"></i>
                        <p><a href="<?= $arques['lien_mail1']; ?>"><?= $arques['mail_arques']; ?></a></p>
                    </section>
                </section>
                <section class="infos">
                    <section class="adresseFooter">
                        <i class="fas fa-map-marker-alt"></i>
                        <section>
                            <p><?= $arras['titre_arras']; ?></p>
                            <?= $arras['adresse_arras']; ?>
                        </section>
                    </section>
                    <section class="tel">
                        <i class="fas fa-phone-alt"></i>
                        <p><?= $arras['telephone_arras']; ?></p>
                    </section>
                    <section class="mail">
                        <i class="far fa-envelope"></i>
                        <p><a href="m<?= $arras['lien_mail2']; ?>"><?= $arras['mail_arras']; ?></a></p>
                    </section>
                </section>
                <img src="<?php echo $camion['sizes']['large']; ?>" alt="Image camion" class="truck noMobile">
            </section>
        </section>
        <section class="footerSecondaire">
            <ul>
                <li><a href="<?= the_field('lien_mentions'); ?>"><?= the_field('txt_mentions'); ?></a>-</li>
                <li><?= the_field('texte_realisation'); ?> <a href="<?= $link['url']; ?>"><img src="<?php echo $logo_mediapilote['sizes']['large']; ?>" alt="Logo Médiapilote"></a></li>
            </ul>
        </section>
    </footer>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
    <?php wp_footer();?>
</body>
</html>