<!-- A Feature Section
======================
-->	<div id="feature" class="feature recent separator video">

		<div id="inner-feature" class="wrap clearfix">

		<?php

			$args = array(
						'posts_per_page'	=> 1,
						'post_type'			=> 'academy_video'
					);								
			$recent_videos = get_posts( $args );
			foreach ( $recent_videos as $post ) : setup_postdata( $post ); 
		?>
			<div class="sixcol first">
				<div class="media contrast-against-dark">


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

				</div>
			</div>

			<div class="sixcol last">
					<h2 class="single-title gamma"><?php the_title(); ?></h3>
					<!--<p class="meta">
						<time class="icon-calendar" datetime="<?php // echo the_time('Y-m-j'); ?>" pubdate> 
							<?php // the_time('F jS, Y'); ?>
						</time> 

						<span class="icon-mobile"> <?php // echo getPostViews(get_the_ID()); ?> views</span>
					</p>-->		

						<section class="post-content zeta">
							<?php echo the_excerpt(); ?>

							<a class="button coral zeta" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> Watch </a>
						</section>
			</div>

		<?php endforeach; wp_reset_postdata(); wp_reset_query();?>
		</div>

	</div>