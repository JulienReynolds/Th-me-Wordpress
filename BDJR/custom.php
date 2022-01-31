<?php
function custom_post_type() {

	$labels = array(
		'name'                  => 'BD',
		'singular_name'         => 'BD',
		'menu_name'             => 'BD',
		'name_admin_bar'        => 'BD',
		'archives'              => 'Archives',
		'attributes'            => 'Attribues',
		//'parent_item_colon'     => 'Parent:',
		'all_items'             => 'Toutes les BD',
		'add_new_item'          => 'Ajouter nouvelle BD',
		'add_new'               => 'Ajout',
		'new_item'              => 'Nouvel BD',
		'edit_item'             => 'Modification BD',
		'update_item'           => 'Mise à jour BD',
		'view_item'             => 'Voir',
		'view_items'            => 'Information',
		'search_items'          => 'Recherche',
		'not_found'             => 'Introuvable',
		'not_found_in_trash'    => 'Introuvable dans la corbeille',
		'featured_image'        => 'Image',
		'set_featured_image'    => 'Choisir image ',
		'remove_featured_image' => 'Supprimer image',
		'use_featured_image'    => 'Utiliser comme image',
		'insert_into_item'      => 'Ajouter à l objet',
		'uploaded_to_this_item' => 'Ajouter à cette bd ',
		'items_list'            => 'Liste BD',
		'items_list_navigation' => 'Navigation Liste',
		'filter_items_list'     => 'Filtrer',
	);
	$args = array(
		'label'                 => 'BD',
		'description'           => 'Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'bd', $args );

}
function montheme_init() {
	register_taxonomy('Type_ouvrage', 'bd',  [
	'labels' => [
	'name'=> 'Type_ouvrage',
	'singular_name' =>'Type_ouvrage',
	'plural-name' =>'Types_ouvrages',
	'search_items' => 'Rechercher des ouvrages',
	'all-items' => 'Tous les ouvrages',
	'edit_item' => 'Modifier ouvrage',
	'update_item' => 'Mettre à jour ouvrage',
	'add_new_item' =>'Ajouter nouvel ouvrage',
	'new_item_name' =>'Ajouter nouveau nom',
	'menu name' => 'Ouvrages',
	],
	'show_in_rest' => true,
	'hierarchical' => true,
	'show_admin_column' => true,
	  'public' => true,
        'has_archive' => true,
	]);
}
add_action ('init', 'montheme_init');
	
	
add_action( 'init', 'custom_post_type');
