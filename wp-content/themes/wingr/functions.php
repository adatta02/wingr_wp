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

add_filter( 'get_pages',  'add_landing_page' );
function add_landing_page( $pages ) {
     $my_cpt_pages = new WP_Query( array( 'post_type' => 'landing_page' ) );
     if ( $my_cpt_pages->post_count > 0 ) {
         $pages = array_merge( $pages, $my_cpt_pages->posts );
     }
     return $pages;
}