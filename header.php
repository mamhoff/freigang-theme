<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
	
		</header> <!-- end header -->
		
		<div id="container" class="container">
			<div class="row head-row">
				<div class="col-md-3 fg-logo">
					<img src="<?php bloginfo('template_directory'); ?>/images/jac-logo.jpg" alt="Freigang Applications Consulting Logo"></img>
				</div>
				<div class="col-md-6 fg-nav-primary">
						<?php wp_nav_menu( 
						    	array( 
						    		'menu' => 'main-menu', /* menu name */
						    		'menu_class' => 'fg-main-menu',
						    		'theme_location' => 'main_nav', /* where in the theme it's assigned */
						    		'container' => 'fg-main-menu', /* container class */
						    	 	'depth' => '2', /* suppress lower levels for now */
						    	)
						    ); ?>
				</div>
				<div class="col-md-3 fg-social">
					<?php if ( is_active_sidebar( 'header_right' ) ) : ?>

						<div class="fg-social-lang">
							<?php dynamic_sidebar( 'header_right' ); ?>
							<ul>
								<li><a id="facebook" target="_blank" href="https://www.facebook.com/pages/Freigang-Applications-Consulting/600534169989366/">
									<img src="<?php bloginfo('template_directory'); ?>/images/white_facebook.png" alt="FREIGANG Applications Consulting on Facebook"></a></li>
								<li><a id="twitter" target="_blank" href="https://twitter.com/@FreigangAC/">
									<img src="<?php bloginfo('template_directory'); ?>/images/white_twitter_bird.png" alt="FREIGANG Applications Consulting on Twitter"></a>
								</li>
								<li><a id="xing" target="_blank" href="https://www.xing.com/companies/freigangapplicationsconsulting/">
									<img src="<?php bloginfo('template_directory'); ?>/images/white_xing.png" alt="FREIGANG Applications Consulting on Xing"></a>
								</li>
								<li><a id="linkedin" target="_blank" href="http://www.linkedin.com/company/3346395?trk=tyah&trkInfo=tas%3AFreigang%20Applications%20Consulting/">
									<img src="<?php bloginfo('template_directory'); ?>/images/white_linkedin.png" alt="FREIGANG Applications Consulting on LinkedIn"></a>
								</li>
							</ul>
						</div>

					<?php else : ?>
					<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>
				</div>
			</div>	
		
