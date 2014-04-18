<?php get_header(); ?>
			
			<div class="row" id="archive">
				<div class="twelve columns">
				
					    <?php if (is_category()) { ?>
						    <div class="large-12 columns center">
							    <h2 class="archive-title h2">
								    <?php single_cat_title(); ?>
						    	</h2>
					    	</div>

					    	<hr/>

					    <?php } elseif (is_tag()) { ?> 
						    <h2 class="archive-title h2">
							    <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
						    </h2>
					    
					    <?php } elseif (is_author()) { 
					    	global $post;
					    	$author_id = $post->post_author;
					    ?>
						    <h2 class="archive-title h2">

						    	<span><?php _e("Posts By:"); ?></span> <?php echo get_the_author_meta('display_name', $author_id); ?>

						    </h2>
					    <?php } elseif (is_day()) { ?>
						    <h2 class="archive-title h2">
	    						<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
						    </h2>
		
		    			<?php } elseif (is_month()) { ?>
			    		    <h2 class="archive-title h2">
				    	    	<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
					        </h2>
					
					    <?php } elseif (is_year()) { ?>
					        <h2 class="archive-title h2">
					    	    <span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
					        </h2>
					       
					    <?php } ?>
					    
					    

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>



						   	<div class="large-block-grid-4 columns">
						   
						   		
						   				<a href="<?php the_permalink(); ?>" class="image-hover">
						   				
						   				<div class="large-4 columns">
						   					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						   
						   							<!-- wrapper div -->
						   							<div class='blog-feed-wrapper'>
						   								<!-- image -->
						   									<?php the_post_thumbnail('full', array('class' => 'absolute-homepage-image')); ?>
						   								<!-- description div -->
						   								<div class='description'>
						   									<!-- description content -->
						   									<div class="description_content">
						   										<!--<h4 class="bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>-->
						   										
						   										<h4><?php $cats='' ;
						   										foreach((get_the_category()) as $category) {
						   										    $cats=$cats.$category->cat_name . ' &bull; ';}
						   										$cats = substr($cats,0,-8); echo $cats; ?></h4>
						   										
						   										<h6 class="subheader" style="margin-top: -10px"><?php the_time() ?></h6>
						   										
						   										<div class="home_count">
						   											<?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
						   										</div>
						   										
						   									</div>
						   									<!-- end description content -->
						   								</div>
						   								<!-- end description div -->
						   							</div>
						   							<!-- end wrapper div -->
						   					 </div><!-- end post class -->
						   				</div><!-- end 6 columns -->
						   				
						   				</a>
						   				
						   				<?php endwhile; ?>	
						   				        
						   				        <?php kriesi_pagination();?>
						   				
						   				    <?php else : ?>
						   				
						   					    <article id="post-not-found" class="hentry clearfix">
						   						    <header class="article-header">
						   							    <h1><?php _e("Ruh-roh, that post or page has disappeared!", "bonestheme"); ?></h1>
						   					    	</header>
						   						    <section class="entry-content">
						   							    <p><?php _e("Try double checking the URL.", "bonestheme"); ?></p>
						   							</section>
						   							<footer class="article-footer">
						   							    <p><?php _e("This is the error message in the archive.php template. Please alert the webmaster.", "bonestheme"); ?></p>
						   							</footer>
						   				    	</article>
						   				
						   				    <?php endif; ?>
						   	</div>
						   	</div>
						   	
						   	</div><!-- end 12 columns -->


<?php get_footer(); ?>