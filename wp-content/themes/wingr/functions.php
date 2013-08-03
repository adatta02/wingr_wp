<?php 

remove_filter( 'the_content', 'wpautop' );

function get_concierge_authors(){
	global $wpdb;
	
	$userMetas = array();
	$user_ids = $wpdb->get_col("SELECT id FROM $wpdb->users ORDER BY display_name ASC");
		
	foreach( $user_ids as $id ){
		$meta = get_user_meta($id);
		$meta["id"] = $id;
		$capabilities = unserialize($meta["wp_capabilities"][0]);
		
		if( in_array("administrator", array_keys($capabilities)) ){
			continue;
		}
		
		$meta["link_url"] = get_author_posts_url($id);
		$meta["pic_url"] = get_avatar($id, 200);		
		
		$userMetas[] = $meta;
	}	
	
	return $userMetas;
}

add_action( 'init', 'create_custom_types' );
function create_custom_types(){
	
	register_post_type( 'landing_page',
			array( 'labels' => array('name' => __( 'Landing Page' ), 'singular_name' => __( 'Landing Pages' )),
				   'public' => true,
				   'has_archive' => false,
				   'rewrite' => array('slug' => 'landing'),
			)
	);		
	
}

add_filter( 'get_pages',  'add_landing_page' );
function add_landing_page( $pages ) {
     $my_cpt_pages = new WP_Query( array( 'post_type' => 'landing_page' ) );
     if ( $my_cpt_pages->post_count > 0 ) {
         $pages = array_merge( $pages, $my_cpt_pages->posts );
     }
     return $pages;
}