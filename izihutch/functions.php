<?php

if (!function_exists('izihutch_scripts')) :

    function izihutch_scripts() {
        
        // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
        wp_enqueue_style('style-css', get_theme_file_uri('assets/css/style.css'), ['reset-css'], '1.0.0');

        // [] pour pas de dépendance
        wp_enqueue_style('reset-css', get_theme_file_uri('assets/css/reset.css'), [], '2.0.0');

    }

endif;

// Ajout d'une action au Hook "wp_enqueue_scripts"
add_action('wp_enqueue_scripts', 'izihutch_scripts');

if (!function_exists('izihutch_setup')) :

    function izihutch_setup() {
        
        // supporte la fonctionnalité de thème "tilte-tag"
        add_theme_support('title-tag');

        // Supporte la fonctionnalité de thème "menu"
        add_theme_support('menus');

        // Je déclare à WP les différents menus de mon thème
        register_nav_menus([
            'headerIzi' => 'Menu présent en dessous du titre du site (haut de page)',
            'footerIzi' => 'Menu présent juste au-dessus du piede de page du site (bas de page)'
        ]);

    }

endif;

// Ajout d'une action au Hook "wp_enqueue_scripts"
add_action('after_setup_theme', 'izihutch_setup');