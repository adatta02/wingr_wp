<?php 

remove_filter( 'the_content', 'wpautop' );

add_action( 'init', 'create_landingpage_type' );
function create_landingpage_type(){
	
	register_post_type( 'landing_page',
			array( 'labels' => array(
								'name' => __( 'Landing Page' ),
								'singular_name' => __( 'Landing Pages' )
				 			   ),
				   'public' => true,
				   'has_archive' => false,
				   'rewrite' => array('slug' => 'landing'),
			)
	);	
	
}

/*
add_action("pre_get_posts", "custom_front_page");
function custom_front_page($wp_query){
	
	if($wp_query->get('page_id') == get_option('page_on_front')){
		$wp_query->set('post_type', 'landing_page');
		$wp_query->set('page_id', '7');
		
		$wp_query->is_page = 1;
		$wp_query->is_singular = 1;		
	}
	
}
*/