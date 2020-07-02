<?php
add_theme_support( 'post-thumbnails' );


function gilliers_scripts() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.css' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'animations', get_template_directory_uri() . '/assets/css/animations.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'fontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css' );

    wp_enqueue_script( 'swiper', get_template_directory_uri() .  '/assets/js/swiper.js',
    array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js',
    array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'gilliers_scripts' );


/*Page d'options*/
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

function ajouter_menu(){
    register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'ajouter_menu');

/*Ajouter un custom logo */
function wpc_theme_support() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}
add_action('after_setup_theme','wpc_theme_support');


// Ajout d'un CPT
function wpm_custom_post_type() {
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Actualités', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Actualités', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Actualités'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les actualités'),
        'view_item'           => __( 'Voir les actualités'),
        'add_new_item'        => __( 'Ajouter une nouvelle actualité'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer l\'actualité'),
        'update_item'         => __( 'Modifier l\'actualité'),
        'search_items'        => __( 'Rechercher une actualité'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );
    
    // On peut définir ici d'autres options pour notre custom post type
    
    $args = array(
        'label'               => __( 'Actualités'),
        'description'         => __( 'Tous sur actualités'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title',),
        /* 
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'actualites'),
        'menu_icon'           => 'dashicons-text-page'
    
    );

    // On enregistre notre custom post type qu'on nomme ici "diaporama" et ses arguments
    register_post_type( 'actualites', $args );

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Offres d\'emploi', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Offres d\'emploi', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Offres d\'emploi'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les offres d\'emploi'),
        'view_item'           => __( 'Voir les offres d\'emploi'),
        'add_new_item'        => __( 'Ajouter une nouvelle offre d\'emploi'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer l\'offre d\'emploi'),
        'update_item'         => __( 'Modifier l\'offre d\'emploi'),
        'search_items'        => __( 'Rechercher une offre d\'emploi'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );
    
    // On peut définir ici d'autres options pour notre custom post type
    
    $args = array(
        'label'               => __( 'Offres d\'emploi'),
        'description'         => __( 'Tous sur offres d\'emploi'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title',),
        /* 
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'offres'),
        'menu_icon'           => 'dashicons-portfolio'
    
    );
    
    // On enregistre notre custom post type qu'on nomme ici "diaporama" et ses arguments
    register_post_type( 'offres', $args );
    }
    
    add_action( 'init', 'wpm_custom_post_type', 0 );