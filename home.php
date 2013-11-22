<?php get_header(); ?>

	<?php 
		// Get Options, show feature.
		//get_template_part('template--feature-series'); 
		get_template_part('template--feature-recent');
	?>

<!-- Browse the Catalog
======================
-->	<section class="catalog search shadow">

		<div class="wrap clearfix">

			<div class="fourcol first">
			<header class="gamma no-margin">
				<em>Learn something new!</em>
			</header>
			</div>

			<div class="eightcol last">
				<form class="align-left" role="search" method="get" id="searchform" action="#">
				    <input type="search" value="" name="s" id="s" placeholder="<?php echo esc_attr__('APA, Find It, Journal Finder, Education, etc.','bonestheme') ?>" x-webkit-speech speech />
				    <input class="search-button" type="submit" id="searchsubmit" value="<?php echo esc_attr__('Go') ?>" />
			    </form>
		    </div>

		</div><!--/.wrap-->

	</section><!--/.catalog-->

<!-- Menu
======================
--> <nav id="panels" class="panels align-center clearfix" role="navigation">
		<div class="panel one-third guides">					
			<a class="align-bottom button" href="<?php echo esc_url( get_category_link( get_cat_id( 'Getting Started' ) )); ?>" title="<?php echo get_the_title( 118 ); ?>">
				Getting Started
			</a>
		</div>

		<div class="panel one-third research">					

			<a class="align-bottom button" href="<?php echo esc_url( get_category_link( get_cat_id( 'Research' ) ));?>">
				Research
			</a>

		</div>

		<div class="panel one-third citation-management">
			<a class="align-bottom button epsilon" href="<?php echo esc_url( get_category_link( get_cat_id( 'Citation Management' ) )); ?>">
				Citation Management
			</a>
		</div>

	</nav>

<!-- Content!
======================
-->	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">
	
		<!--<figure class="caption">
				<blockquote>
					<header>
						<em class="gamma">Learn to use the library!</em>
					</header>
					<p class="delta">
						<strong>LibraryLearn</strong> is a hot spot for brief 
						videos demonstrating the use of our vast resources. Learn how to develop
						a successful research strategy, get the most out of 
						<a href="http://novacat.nova.edu" target-"new">NovaCat</a> (the <b>cat</b>alog),
						find articles in the <a href="http://sherman.library.nova.edu/e-library" target="new">E-Library</a>, and more.
					</p>
				</blockquote>
			</figure>
		-->

		    <div id="main" role="main">
		    	
		    	<nav class="subject-list">
		  
			    	<ul class="browse-subjects">
					<?php wp_list_categories(array(
						'show_option_all'    => '',
						'orderby'            => 'name',
						'order'              => 'ASC',
						'style'              => 'list',
						'show_count'         => 0,
						'hide_empty'         => 1,
						'use_desc_for_title' => 1,
						'child_of'           => 0,
						'feed'               => '',
						'feed_type'          => '',
						'feed_image'         => '',
						'exclude'            => '1, 8, 14, 21, 17', // Exclude "Miscellaenous"
						'exclude_tree'       => '',
						'include'            => '',
						'hierarchical'       => 1,
						'title_li'           => __( '' ),
						'show_option_none'   => __('No categories'),
						'number'             => null,
						'echo'               => 1,
						'depth'              => 0,
						'current_category'   => 0,
						'pad_counts'         => 0,
						'taxonomy'           => 'category',
						'walker'             => null
					)); ?>
				</ul>				
			</nav>

		    </div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->



<?php get_footer(); ?>
