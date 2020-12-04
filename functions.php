<?php 


function origamid_css() {

	wp_register_style( 'origamid-style', get_template_directory_uri() . '/style.css', [], false, false );
	wp_enqueue_style( 'origamid-style' );

}
add_action(  'wp_enqueue_scripts', 'origamid_css'  );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-principal' => __( 'Menu Principal' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function my_custom_sizes() {
	add_image_size('large', 1400, 380, true);
	add_image_size('medium', 768, 380, true);
}
add_action('after_setup_theme', 'my_custom_sizes');


function Custom_post_type_produtos() {
	register_post_type('produtos',array(
		'label' => 'produtos',
		'description' => 'produtos',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'supports' => array('title', 'editor', 'page_attributes','post_formats'),

		'labels' => array(
			'name' => 'produtos',
			'singular_name' => 'produtos',
			'menu_name' => 'produtos',
			'add_new' => 'adicionar novo',
			'add_new_item' => 'adicionar novo produto',
			'edit'=> ' editar',
			'edit_item' => 'editar produto',
			'new_item' => 'novo produto',
			'view' => 'ver produto',
			'view_item' => 'ver produto',
			'search_items' => 'procurar produtos',
			'not_found' => 'nenhum produto encontrado',
			'not_found_in_trash' => 'nenhum produto encotrado no lixo',)
		));
}
add_action('init', 'custom_post_type_produtos');


?>