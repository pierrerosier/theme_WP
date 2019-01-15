<?php
    //==============================================
    //======== Chargement des scripts ==============
    //==============================================
    define ('PRPOR_VERSION', '1.0.0'); //constante définit le n de version des styles.

    function prpor_scripts() {
        wp_enqueue_style('prpor_bootstrap-core', get_template_directory_uri().'/css/bootstrap.min.css', array(), PRPOR_VERSION, 'all');
        // style.css a comme dépendance bootstrap.min.css et sera dc chargé après.
        wp_enqueue_style('prpor_custom', get_template_directory_uri().'/style.css', array('prpor_bootstrap-core'), PRPOR_VERSION, 'all');
        wp_enqueue_script('prpor_script', get_template_directory_uri().'/js/portfolio.js', array(), PRPOR_VERSION, false);
    }

    add_action('wp_enqueue_scripts', 'prpor_scripts');
?>