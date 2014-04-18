<?php get_header(); ?>

<br/>




<?php if ( !is_user_logged_in() ) { ?>

	<div id="hero">
		<div class="row">
			<div class="large-12 columns section">
				<h1>WorkGrids</h1><br/>
				<h4>A free network for workplace sharing and discovery.</h4><br/>
	
				<?php if (get_option('users_can_register')) : ?>
					<a href="<?php bloginfo('wpurl'); ?>/wp-login.php?action=register"><button><span class="">Get started</span></button></a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>

<?php } else { ?>

	<div class="row">
		<div class="show-for-small small-12 columns center">
			<a href="mailto:team@halfbake.me?subject=Post to WorkGrid"><button><span class="">Upload Workspace</span></button></a>
		</div>
	</div>
	
	<div class="show-for-small">
	<br/>
	<hr/>
	</div>
<?php } ?>




	<!-- Display Recent Articles -->
	<div class="row">
	<div class="large-12 columns">
		<h2 class="right-button-aligned">Featured</h2>
		
		<a href="/grid"><span class="action-button float-right">View All</span></a>
		
	</div>
	</div>
	
	<hr/>
	
	<!-- all workspaces -->
	<div class="row">
		<div class="large-12 columns">
				




				<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('cat=12&paged=' . $paged); ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php include('loop-grid.php') ?>
					
					<?php endwhile; ?>
					
						<?php kriesi_pagination(); ?>
					
					<?php else : ?>
					
						<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
							<h1>Ruh roh. No posts?</h1>
						</div>
				
				<?php endif; wp_reset_query(); ?>
				
	
		</div>
	
	</div>
	</div><!-- end 12 columns -->
	
	<hr/>



	<!-- show posts only from blog -->
	<div class="row section">
	<div class="large-12 columns">
		<h2 class="right-button-aligned">Articles</h2>
		
		<a href="<?php echo home_url();?>/section/posts/"><span class="action-button float-right">View All</span></a>
		
	</div>
	</div>
	
	<hr/>

	<div class="row">
			<div class="large-12 columns">
					
	
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('cat=5&paged=' . $paged); ?>
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
						<?php include('loop-blog.php') ?>
						
						<?php endwhile; ?>
						
							<?php kriesi_pagination(); ?>
						
						<?php else : ?>
						
							<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
								<h5>No more articles to display.</h5>
							</div>
					
					<?php endif; wp_reset_query(); ?>
					
		
			</div>
		
		</div>
		</div><!-- end 12 columns -->
		
		<hr/>


<!-- Display Recent Pictures -->
<div class="row section">
	<div class="large-12 columns">
		<h2>Recent Pictures</h2>
		<h5>#myworkspace</h5>
				
				
				<div id="loading-image">
					<img src="<?php bloginfo('template_url'); ?>/img/loading.gif" alt="Loading..." />
				</div>
				
				
				<div class="instagram"></div></div>
				<button class="load-more" style="margin: 0 auto;">Load More</button>
				
				<div id="my_gallery"></div>
				

			
	</div>
</div>
	
	<?php get_footer(); ?>
	
</body>
</html>