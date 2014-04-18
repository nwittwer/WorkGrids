<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>

		<!--====== LET THE FUN BEGIN ======-->		
		<!--=== SEO ===-->
		<title><?php if (is_home() ) { echo "WorkGrids - A platform for sharing and discovering workspaces."; } else { the_title('', ' - WorkGrids'); } ?></title>
		
		<?php
			//if single post then add excerpt as meta description
			if (is_single()) {
			?>
			<meta name="description" content="<?php echo htmlspecialchars( strip_tags( html_entity_decode( get_the_excerpt($post->ID) ) ) ) ?>">
			
			<?php
			//if homepage use standard meta description
			} else if(is_home() || is_page())  {
			?>
			<meta name="Description" content="A platform for sharing and discovering workspaces.">
		<?php } ?>
		
		

		<meta name="keywords" content="workgrid, workspaces, workplace, workplaces, inspiring workspace, clean workspace" />
		<meta name="copyright" content="WorkGrid. Copyright (c) 2013" />
		
		<!-- === Template Styles === -->
		<!--<link href="<?php bloginfo('template_url'); ?>/css/style.css" media="screen" rel="stylesheet" type="text/css" />-->
		<link href="<?php bloginfo('template_url'); ?>/css/typography.css" media="screen" rel="stylesheet" type="text/css" />
		
		<!-- Foundation -->
		<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="<?php bloginfo('template_url'); ?>/css/foundation.css" media="screen" rel="stylesheet" type="text/css" />
		
		<link href="<?php bloginfo('template_url'); ?>/css/app.css" media="screen" rel="stylesheet" type="text/css" />
		
	
		<!--=== Apple Homescreen Icons ===-->
		<!-- 3rd Gen iPad -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-144x144-precomposed.png">
		<!-- Retina iPhone -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-114x114-precomposed.png">
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-72x72-precomposed.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-precomposed.png">
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		
  		
  		<!-- jQuery -->
  		<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js'></script>
  		<script src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
  		<script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>
  		
  		
  		<!-- Fancybox -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/apps/fancybox/jquery.fancybox.js"></script> 
		<link href="<?php bloginfo('template_url'); ?>/apps/fancybox/jquery.fancybox.css" media="screen" rel="stylesheet" type="text/css" />

		<script>
//			$(document).ready(function() {
//				$(".fancybox").fancybox({
//				
//					beforeLoad: function() {
//					            this.title = $(this.element).attr('caption');
//					        }
//				
//					openEffect	: 'fade',
//					closeEffect	: 'fade',
//					nextEffect: 'none',
//					prevEffect: 'none',
//					'titlePosition' : 'inside'
//				});
//			});
			
			
			$(".fancybox")
			    .attr('rel', 'gallery')
			    .fancybox({
			        beforeLoad: function() {
			            this.title = $(this.element).attr('caption');
			        }
			    });
			
		</script>
  		
  		
	  		<!--[if lt IE 9]>
	  				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	  		<![endif]-->
  		
		
		
		<?php
		if ( is_singular() && comments_open() && get_option('thread_comments') )
		  wp_enqueue_script( 'comment-reply' );
		?>
		
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
	</head>
	
	<body>
	
	
	<!--=== Header and Nav ===-->
	
		<!-- show cover page if is home page -->
		<?php if ( is_home() and !is_paged() ) { ?>
		<?php } ?>

	<!-- NAVIGATION -->
	<div class="row"
		<div class="large-12 columns">
			<?php include('navigation.php'); ?>
		</div>
	</div>
	
	
	<!-- End Header -->
	<div id="content">
	

	<!-- Custom Message -->
	<?php if (get_option('nt_custom_message')) { ?>
		<div class="alert-box" style="text-align: center;">
		  <?php echo get_option('nt_custom_message'); ?>
		  <a href="" class="close">&times;</a>
		</div>
	<?php } elseif ((date('m') == 4) && (date('d') == 1)) { ?>
			<p>April Fools!</p>
	<?php } elseif ((date('m') == 12) && (date('d') == 25)) { ?>
			<p>Happy Holidays!</p>			
	<?php } else { ?>
	
	<?php } ?>
	