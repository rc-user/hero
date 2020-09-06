<?php

add_action('init', function () {
    /**
     * Post Type: 登録フォーム.
     */

    $labels = array(
        'name' => __('登録フォーム', 'twentyseventeen'),
        'singular_name' => __('登録フォーム', 'twentyseventeen'),
    );

    $args = array(
        'label' => __('登録フォーム', 'twentyseventeen'),
        'labels' => $labels,
        'description' => '',
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_rest' => false,
        'rest_base' => '',
        'has_archive' => false,
        'show_in_menu' => true,
        'exclude_from_search' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => false,
        'query_var' => true,
        'menu_icon' => 'dashicons-email',
        'supports' => array( 'title' ),
    );

    register_post_type('dcp_form', $args);
});
