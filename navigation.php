</div>
</div>	


<header class="site-header">
	<div class="row">
		<div class="large-12 columns">
			<hgroup id="logo">
				<!--<a href="http://nickwittwer.com"><img id="logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"/></a>-->
				<a href="<?php echo home_url(); ?>"><h3 id="logo" class="bold">WorkGrids</h3></a>
			</hgroup>
		
			<nav id="nav">
			
			<span class="site-nav">
			
				<a class="nav-link <?php if (is_home()){ echo "active";}?>" href="<?php echo home_url(); ?>">Home</a>
				
				<a class="nav-link <?php if (is_page('grid')){ echo "active";}?>" href="/grid">The Grid</a>
				
				<a class="nav-link <?php if (is_page('wallpapers')){ echo "active";}?>" href="/wallpapers">Wallpapers</a>
			

					<!-- if user is logged in, display profile link in nav -->
					<?php if ( is_user_logged_in() ) { ?>
					
					<a class="nav-link <?php if (is_page('profile')){ echo "active";}?>" href="<?php echo home_url() . '/p/u/' . get_the_author_meta( 'user_login', wp_get_current_user()->ID ); ?>">Profile</a>
					
					<?php } ?>

					
					<!--<li class="<?php if (is_page('projects')){ echo "active";}?>">
						<a href="<?php echo home_url();?>/projects">Projects</a> 
					</li>-->

			</span>
			
			
			<span class="right-nav">

				<?php if ( !is_user_logged_in() ) { ?>
					<a class="nav-link nav-signup" href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Sign Up</a>
					
					<?php
					$redirect = '&amp;redirect_to='.urlencode(wp_make_link_relative(get_option('siteurl')));
					$uri = wp_nonce_url( site_url("wp-login.php?$redirect", 'login'), 'log-in' );
					?>
					
					<a class="nav-link" href="<?php echo $uri;?>"><?php _e('Login');?></a>
				
				<?php } else { ?>
					
					<a class="nav-link" href="<?php echo site_url(); ?>/wp-admin/post-new.php">+ New Post</a>
					
					<?php if(is_single()) { ?>
						<?php edit_post_link('Edit','',''); ?>
					<? } ?>
					
					<!--<a class="nav-link" href="<?php echo site_url(); ?>/wp-admin/">Backend</a>-->
					
					<?php
					$redirect = '&amp;redirect_to='.urlencode(wp_make_link_relative(get_option('siteurl')));
					$uri = wp_nonce_url( site_url("wp-login.php?action=logout$redirect", 'login'), 'log-out' );
					?>
					
					<a class="nav-link" href="<?php echo $uri;?>"><?php _e('Logout');?></a>
				
				<?php } ?>

			</span>
			
			
			
			
			<span id="trigger-nav" class="nav-link show-for-medium-down">
			
			 &#9776;
			
			</span>
			
			
			
			</nav>
		</div>
	</div>

	
</header>