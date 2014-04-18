<?php /* Template Name: Grid */ ?>

<?php get_header(); ?>


<br/>

					<!-- Display Recent Articles -->
						<div class="row">
						<div class="large-12 columns">
							<h2>All Workspaces</h2>
							
						</div>
						</div>
						
						<hr/>
						
						<div class="row">
						<div class="large-12 columns">
						
						<div class="large-block-grid-4 columns">
								
								<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=6&cat=-5,-9,-10&paged=' . $paged); ?>
								
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

	<?php get_footer(); ?>