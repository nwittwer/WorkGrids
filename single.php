<?php get_header(); ?>
		
		
		
		<br/>
		
		
		
				<?php if ( in_category( array( 'posts' ) )) { ?>
					
					Blog post

				<?php } else { ?>
					
					Normal Post

					<!-- get the post -->
					<?php } if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			
						
						<?php setPostViews(get_the_ID()); ?>
						
						<!--<div class="image-wrap" id="featured-wrapper">
						
						
							<div id="next-prev-links">
								<div class="prev-link"><?php previous_post_link('%link', 'Previous') ?></div>
								<div class="next-link"><?php next_post_link('%link', 'Next') ?></div>
							</div>
						
							
							<a href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, ''); echo $src[0]; ?>">

								<?php the_post_thumbnail('full', array('class' => 'article-hero-img')); ?>
							
							</a>
							
						</div>-->
					
			<div class="row">		

						<!-- article content 
						<div class="large-12 columns" id="article-top">
						      <h1><?php the_title(); ?></h1>
						    </div>-->
						    
						<div class="large-8 columns">   

								<div class="image-wrap" id="featured-wrapper">
														
														
									<div id="next-prev-links">
										<div class="prev-link"><?php previous_post_link('%link', 'Previous') ?></div>
										<div class="next-link"><?php next_post_link('%link', 'Next') ?></div>
									</div>
								
									
									<a href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, ''); echo $src[0]; ?>">
		
										<?php the_post_thumbnail('full', array('class' => 'article-hero-img')); ?>
									
									</a>
									
								</div>
						</div>
						    
						    
						<div class="large-4 columns" id="article">
						
							<div class="post_data">
								<span><?php the_author_posts_link(); ?></span><br/>
							
								<h5 class="subheader italic post_date published"><?php the_time() ?></h5>
						
								<div class="single_count">

									<?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
									
									<span class="views"><span class="views-icon"></span><?php echo getPostViews(get_the_ID()); ?></span>
									
									<h6 class="cat-button">Tags: <?php the_category(', '); ?></h6>
								</div>
							</div>
						
						    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						        <div id="entry">
					        		<h2 class="bold entry-content"><?php the_title(); ?></h2>
					        		
						            <div class="entry-content"><?php the_content(); ?></div>
						        </div>
						    </div>
						    
					    </div>
					    <?php endwhile; endif; ?>
			    	
			</div>
			    
			<hr/>
									
			<div class="row">					
			<!-- load the comments! -->
			<?php comments_template(); ?>
			</div>
			
			
			<?php wp_reset_postdata(); ?>

	<?php get_footer(); ?>