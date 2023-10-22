<?php
function services_get_loc(){
    flush_rewrite_rules();
    if(get_locale() === 'lt_LT'){
        return 'paslaugos';
    } else {
        return 'services';
    };
};
function skills_get_loc(){
    flush_rewrite_rules();
    if(get_locale() === 'lt_LT'){
        return 'igudziai';
    } else {
        return 'skills';
    };
};
function projects_get_loc(){
    flush_rewrite_rules();
    if(get_locale() === 'lt_LT'){
        return 'projektai';
    } else {
        return 'projects';
    };
};
function deu_post_types() {
    
	register_post_type('services', array(
        $slug = services_get_loc(),
        'rewrite' => array('slug' => $slug),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Services',
            'add_new_item' => 'Add',
            'edit_item' => 'Edit',
            'all_items' => 'All',
            'singular_name' => 'Service'
		),
		'menu_icon' => 'dashicons-hammer',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('skills', array(
        $slug = skills_get_loc(),
        'rewrite' => array('slug' => $slug),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Skills',
            'add_new_item' => 'Add',
            'edit_item' => 'Edit',
            'all_items' => 'All',
            'singular_name' => 'Skill'
		),
		'menu_icon' => 'dashicons-heart',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
    register_post_type('projects', array(
        $slug = projects_get_loc(),
        'rewrite' => array('slug' => $slug),
		'public' => true,
        'show_in_rest' => true,
        'show_in_menu' => true,
        'menu_position' => 7,
        'taxonomies' => ['category', 'post_tag'],
		'labels' => array(
			'name' => 'Projects',
            'add_new_item' => 'Add',
            'edit_item' => 'Edit',
            'all_items' => 'All',
            'singular_name' => 'Projects'
		),
		'menu_icon' => 'dashicons-portfolio',
        'supports' => array(
            'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats', 'custom-fields'
        )
	));
}
add_action('init', 'deu_post_types');
