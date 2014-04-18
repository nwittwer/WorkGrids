
	<a href="<?php the_permalink(); ?>" class="image-hover">
	
	<div class="large-4 columns">
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<!-- wrapper div -->
				<div class='blog-feed-wrapper'>
					<!-- image link  -->
						<a class="fancybox preview-button" rel="1" 
							caption="By <?php the_author();?><br/>
							<a href='<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, ''); echo $src[0]; ?>'>DOWNLOAD</a>" 
							href="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), false, ''); echo $src[0]; ?>">
							<span class="search-icon"></span>
						</a>
					<!-- image -->
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('full', array('class' => 'absolute-homepage-image')); ?>
						</a>
						
					<!-- description div -->
					<div class='description'>
						<!-- description content -->
						<div class="description_content">
							<!--<h4 class="bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>-->
							
							<h5><?php the_author_posts_link(); ?></h5>
												
							<!--<h6 class="subheader" style="margin-top: -10px"><?php the_time() ?></h6>-->
							
							<div class="home_count">
								<span class="views-grid"><span class="views-icon"></span><?php echo getPostViews(get_the_ID()); ?></span>
								<?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
							</div>
							
						</div>
						<!-- end description content -->
					</div>
					<!-- end description div -->
				</div>
				<!-- end wrapper div -->
		 </div><!-- end post class -->
	</div><!-- end columns -->
	
	</a>
