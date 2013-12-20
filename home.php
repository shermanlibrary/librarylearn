<?php get_header(); ?>

	<?php 		
		// Get Options, show feature.
		//get_template_part('template--feature-series'); 

		if ( $ua->isComputer) { get_template_part('template--feature-recent'); }
	?>

<!-- Browse the Website
======================
-->	<section class="catalog search site-search">

		<form class="align-left wrap clearfix" role="search" method="get" id="searchform" action="#">

			<label class="gamma no-margin" for="s">
				<em>Learn something new!</em>
			</label>

			<div class="input">				
			    <input type="search" value="" name="s" id="s" placeholder="<?php echo esc_attr__('APA, FindIt, Journal Finder, Education, etc. ','bonestheme') ?>" x-webkit-speech speech />
			    <input class="search-button" type="submit" id="searchsubmit" value="<?php echo esc_attr__('Go') ?>" />
		    </div>

	    </form>

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

			<blockquote class="page-description">
				<header>
					<em class="gamma">What is <strong>LibraryLearn</strong>?</em>
				</header>
				<p class="delta">
					<em>LibraryLearn</em> is a hub for brief, to-the-point videos
					made by <abbr title="Nova Southeastern University">NSU</abbr> Librarians
					demonstrating how to use a variety of library resources, design 
					research strategies, master <a href="//novacat.nova.edu" title="NovaCat: NSU Libraries Catalog">NovaCat</a>,
					and more.
				</p>
			</blockquote>

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
						'exclude'            => '1, 3, 4, 5', // Exclude "Miscellaenous"
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
