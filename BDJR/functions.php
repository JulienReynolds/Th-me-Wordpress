<?php

function supp_theme (){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menu('menu-header', 'entete du menu');
  register_nav_menu('menu-footer', 'pied de page menu');
  add_image_size ('format-bd', 1000, 600, true);

}
function charger_bst () {
 wp_register_style('boostrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css');
 wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js');
 wp_enqueue_style ('boostrap');
 wp_enqueue_script ('boostrap');
 
}
function montheme_menu_class(array $classes): array {
$classes[] = 'nav-item';
return $classes;
}
function montheme_menu_link_class(array $classes): array {
$attrs['class'] = 'nav-link';
return $attrs;
}
function ma_pagination (){
$pages = paginate_links(['type' => 'array']); 
if ($pages === null){
	return;
}
	echo '<nav aria-label="Pagination" class ="my-4">';
	echo '<ul class ="pagination">';
	foreach($pages as $page) {
		$active = strpos($spage, 'current') !==false;
		$class ='page-item';
		if ($active) {
			$class .= 'active';
		}
	
	echo '<li class ="'.$class.'">';
	echo str_replace('page-numbers', 'page-link', $page);
	echo '</li>';
}

echo '</ul>';
echo '</nav>'; 
}

function custom_boxes () {
	add_meta_box ('articles_payant', 'Articles pour Abonnées', 'custom_boxes_render', 'post');
	}
		
		function custom_boxes_render () {
		?>
		<label for="Articles Abonnées"></label>
		<input type ="checkbox" value ="1" name="articles_payant">
		<?php
		
	}
	
	function sauvegarde_art_payant ($post_id, $post, $update){
		update_post_meta($post_id, 'articles_payant', '1');
/* 		if (array_key_exists('articles_payant', $_POST) && current_user_can( 'edit_post', $post_id)){
			if($POST['articles_payant'] === '0'){
				delete_post_meta($post_id, 'articles_payant');
			}else{
				update_post_meta($post_id, 'articles_payant', 1);
			}
		} */
	}
	


add_action('after_setup_theme', 'supp_theme');
add_action('wp_enqueue_scripts', 'charger_bst');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_action('add_meta_boxes', 'custom_boxes');
add_action ('save_post', 'sauvergarde_art_payant');


include 'custom.php';