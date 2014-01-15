<?php get_header(); ?>
		
<div id="feature" class="feature video">

	<div id="inner-feature" class="wrap clearfix">

			<div class="media contrast-against-dark">
			<?php if (have_posts()) : while (have_posts()) : the_post(); setPostViews(get_the_ID());?>
			
			<h1 class="single-title gamma" itemprop="headline"><?php the_title(); ?></h1>

			<?php

			// 1. Get the format of the tutorial
			$academy_video_format = get_post_meta( get_the_ID(), 'academy_video_format', true); 

			/* ==================
			 * From here, some logic!
			 */ // If the tutorial video requires anything but the standalone files
				// --it was produced through Adobe Captivate, for instance--then we need 
				// to adjust the display accordingly.
				if ( $academy_video_format != 'standard' ) :

					$adobe_captivate_url = get_post_meta( get_the_ID(), 'captivate_url', true);
				 ?>

				 <div class="fluid-embed-wrapper">
				 	<iframe frameborder="0" src="<?php echo $adobe_captivate_url ?>"></iframe>
			 	</div>


				<?php
				else :
				 ?>

				<?php get_template_part('template-standard_video_format'); ?>
				<?php $video_root = 'http://www.nova.edu/library/video/' . get_post_meta( get_the_ID(), 'academy_video_file', true); ?>



			<?php endif; ?>
			</div><!--/.media-->
		</div><!--/.wrap-->
	</div><!--/.feature-->

	<div id="content">

		<div id="inner-content" class="wrap clearfix">

				<div id="main" class="eightcol first clearfix" role="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
						<section class="post-content" itemprop="articleBody">
							<h2 class="tera"><em>About</em></h2>
							<p class="epsilon">
								<?php echo get_the_excerpt(); ?>
							</p>

							<h3>Resources</h3>
							<?php the_content(); ?>
						</section> <!-- end article section -->
				
						<?php //comments_template();// comments should go inside the article element ?>
			
					</article> <!-- end article -->
			
				</div> <!-- end #main -->

				<div class="fourcol last">
					<aside>
						
						<?php if ( $academy_video_format == 'standard' ) : ?>
						<section class="stack-blocks">
							<header>
								<h3 class="section-title">Download</h3>
							</header>
							<ul>
								<li>
									Read the <a href="<?php echo wp_get_attachment_url( get_post_meta( get_the_ID(), 'captions', true ) ); ?>.srt">Transcript</a>
								</li>
								<li>
									Download the <a href="<?php echo $video_root; ?>.mp4" title="Download the MP4">Video</a> (.mp4)
								</li> 
								
							</ul>
						</section>
						<?php endif; ?>
						
						<?php get_sidebar( 'video' );  ?>

						<section class="media">
							<?php library_related_videos(); ?>
						</section>	
					</aside>
				</div>

			

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<?php endwhile; ?>			

	<?php else : ?>

		<article id="post-not-found" class="hentry clearfix">
    		<header class="article-header">
    			<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    		</header>
    		<section class="post-content">
    			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    		</section>
    		<footer class="article-footer">
    		    <p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
    		</footer>
		</article>

	<?php endif; ?>

<?php get_footer(); ?>