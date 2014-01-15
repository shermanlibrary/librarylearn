<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
				
				    <div id="main" class="wrap clearfix" role="main">
				
					    <?php if (have_posts()) : $i = 0; while (have_posts()) : if ( $i < 4 ) { $i++; } if ( $i == 4 ) { $i = 1; } the_post(); ?>
					
						<div class="fourcol <?php echo ( $i == 1 ? 'first' : ( $i == 3 ? 'last' : '' ) ) ?>" style="height:600px;">
						    
						    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix portlet'); ?> role="article">
								
								<div class="media">
		    						
									<a class="thumbnail" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php echo ( has_post_thumbnail() ? the_post_thumbnail( 'media-small' ) : '<img src=http://placehold.it/640x360>' ); ?>
									</a>

								</div>

								<header>
									<br>
							    	<h2 class="delta no-margin"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						    	</header>

							    <section class="post-content clearfix">
							
									    <?php the_excerpt(); ?>
						
							    </section> <!-- end article section -->
						
						    </article> <!-- end article -->
					</div>
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('bones_page_navi')) { // if experimental feature is active ?>
						
						        <?php bones_page_navi(); // use the page navi function ?>

					        <?php } else { // if it is disabled, display regular wp prev & next links ?>
						        <nav class="wp-prev-next">
							        <ul class="clearfix">
								        <li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								        <li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							        </ul>
					    	    </nav>
					        <?php } ?>
					
					    <?php else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    						    <header class="article-header">
    							    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    						    <section class="post-content">
    							    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
        						</section>
    	    					<footer class="article-footer">
    		    				    <p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
    			    			</footer>
    				    	</article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
                
                </div> <!-- end #inner-content -->
                
			</div> <!-- end #content -->

<?php get_footer(); ?>