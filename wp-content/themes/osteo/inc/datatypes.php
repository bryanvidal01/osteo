<?php
function wp_custom_post_type() {
    register_post_type('appointment',
        array(
            'labels'      => array(
                'name'          => __('Rendez-vous', 'lsd_lang'),
                'singular_name' => __('Rendez-vous', 'lsd_lang'),
            ),
            'public'      => true,
            'has_archive' => false,
        )
    );
}

add_action('init', 'wp_custom_post_type');

function wp_register_taxonomy() {
    /*$labels = array(
        'name'                       => _x( 'Localisation', 'taxonomy general name' ),
        'singular_name'              => _x( 'Localisation', 'taxonomy singular name' ),
        'menu_name'                  => __( 'Localisation' )
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
    );

    register_taxonomy( 'location', 'professeurs', $args );

    */
}

add_action('init', 'wp_register_taxonomy');
