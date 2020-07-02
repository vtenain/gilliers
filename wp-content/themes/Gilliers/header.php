<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transports Gilliers</title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <section>
            <section class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                </a>
            </section>
            
            <nav class="menuSite">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => 'ul',
                    'container_class' => 'menu'
                ));
                ?>
            </nav>
            <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
                Menu
            </button>
        </section>
    </header>