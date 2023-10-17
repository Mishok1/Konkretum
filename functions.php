<?php
    add_action('wp_enqueue_scripts', 'beton_scripts');

    function beton_scripts() {
        wp_enqueue_style('beton-style', get_stylesheet_uri() );

        wp_enqueue_script('beton-scripts', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);
    };
    add_theme_support('menus');

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'services'){
            $atts['class'] .= ' navigation-services__link';
        } else {
            $atts['class'] .= ' footer__navigation-services__link';

        }

        return $atts;
    }
?>