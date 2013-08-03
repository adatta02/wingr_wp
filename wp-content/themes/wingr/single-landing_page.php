<?php
/** single.php
 *
 * The Template for displaying all single posts.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>

<section id="primary" class="span12">
	
	<?php tha_content_before(); ?>
	
	<div id="content" role="main">
		
		<?php tha_content_top();

		while ( have_posts() ) :
			the_post();?>
			
			<div class="entry-content clearfix">
				<?php
				the_content( );
				the_bootstrap_link_pages(); ?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', 'the-bootstrap' ), '<footer class="entry-meta"><span class="edit-link label">', '</span></footer>' );
			
			tha_entry_bottom(); ?>			
			
		<?php endwhile; ?>
				
		<?php tha_content_bottom(); ?>
		
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();
