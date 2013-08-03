<?php
/** header.php
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0 - 05.02.2012
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<?php tha_head_top(); ?>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title><?php wp_title( '&laquo;', true, 'right' ); ?></title>
		
		<?php tha_head_bottom(); ?>
		<?php wp_head(); ?>
		
		<link href="/wp-content/themes/wingr/styles.less" rel="stylesheet/less" type="text/css">
		<link href="/wp-content/themes/wingr/utils.less" rel="stylesheet/less" type="text/css">
		
        <script type="text/javascript" src="/wp-content/themes/wingr/js/less-1.4.1.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>		
	</head>
	
	<body <?php body_class(); ?>>
		
	  	<div class="header">
	  		<div class="container">
	  		    <div class="row-fluid">
		    		<div class="span12">
		    			<div class="pull-left"><h3><a href="/">Wingr</a></h3></div>
		    			<div class="pull-right">
		    				<ul class="listless">
		    					<li><a href="/">Home</a></li>
		    					<li><a href="/sign-up">Sign Up</a></li>
		    					<li><a href="/contact">Contact</a></li>
		    					<li><a class="btn btn-primary" href="http://app.wingr.me">Login</a></li>
		    				</ul>
		    			</div>
		    			<div class="clearfix"></div>
		    		</div>
	    		</div>
	  		</div>
	  	</div>	
	
		<div class="container">
			<div id="page" class="hfeed row">
				