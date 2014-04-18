<div id="footer-top">
		<div class="row">
				<div class="large-12 columns">
			
					<div class="large-6 small-2 columns">
						<a href="">Home</a> |
						<a href="">Grid</a> |
						<a href="">Blog</a> |
						<a href="">Team</a> |
					</div>
					
					<div class="large-4 columns">
						
					</div>
			
					<div class="large-4 columns">
						
					</div>
				</div>
		</div>				
	</div>
	
	
	
	<div id="footer-bottom">
		<div class="row">
			<div class="large-12 columns footer">
			
				<div class="large-6 columns">
					<p id="footer-love">Made with <span class="heart-icon"></span> in California</p>
				</div>
				
				<div class="large-6 columns">
					<p class="right">&copy; <?php echo date('Y'); ?>. WorkGrid. 
					
					<?php if ( !is_user_logged_in() ) { ?>
						<a class="nav-link nav-signup" href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register">Sign Up</a>
					
					<?php } else { ?>

						<?php
						$redirect = '&amp;redirect_to='.urlencode(wp_make_link_relative(get_option('siteurl')));
						$uri = wp_nonce_url( site_url("wp-login.php?action=logout$redirect", 'login'), 'log-out' );
						?>
						
						<a href="<?php echo $uri;?>"><?php _e('Logout');?></a>
					
					<?php } ?>
					
					<a href="mailto:hi@nickwittwer.com">Report bugs</a></p>		
				</div>
				
			</div>
		</div>
	</div>
	
	</div><!-- end content div -->
	
					
			<script src="<?php bloginfo('template_url'); ?>/js/retina.js"></script>
			
			<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.js"></script>
			
			<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.tooltips.js"></script>
			
			<script src="<?php bloginfo('template_url'); ?>/js/foundation/foundation.section.js"></script>
			
			<script src="<?php bloginfo('template_url'); ?>/js/jquery.instagram.js"></script>
			
			
			
			<script>
			  $(document).foundation();
			</script>
			
			

			
			<!-- Google Analytics Here -->
			<?php if (!current_user_can('level_10')) { ?>
			
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
				
				  ga('create', 'UA-41130431-2', 'halfbake.me');
				  ga('send', 'pageview');
				
				</script>
			
			<?php } ?>
			<!-- end analytics -->
			
			
			
			
			<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->