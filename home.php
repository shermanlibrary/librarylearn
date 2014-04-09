<?php get_header(); ?>

<section class="background-base has-background has-background-image hero clearfix" style="background-image: url('http://sherman2.library.nova.edu/sites/copyright/wp-content/uploads/sites/10/2014/04/8864977481_8c0264cadd_h.jpg');">
	<div class="wrap clearfix">
		<article class="card shadow" itemscope="" itemtype="http://schema.org/Event">

			<header>
				<h3 itemprop="name no-margin">Little Videos, Big Impact</h3>
			</header>

			<p class="epsilon excerpt">
				LibraryLearn has short video tutorials on a variety of library resources. They can teach you how to use specific tools like
				NovaCat (our catalog), FindIt, Journal Finder, or even help guide you through the research process. 
			</p>

			<div class="spacer">
				<a class="button green">Browse for Videos</a>
				<a class="button base">Ask a Librarian</a>
			</div>

		</article>
	</div>
</section>

<?php get_template_part( 'template-search' ); ?>

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



<section class="assorted-features background-base has-background hero clearfix no-margin">
	<div class="feature-event wrap clearfix">
		<article class="card" itemscope="" itemtype="http://schema.org/Event">

			<div class="fourcol first media">
				<a href="http://sherman2.library.nova.edu/sites/spotlight/event/helene-berr-exhibit/">
					<img src="http://sherman2.library.nova.edu/sites/spotlight/wp-content/uploads/sites/2/2013/11/helene-berr-a-stolen-life-350x193.jpg" alt="Helene Berr Exhibit">

				</a>
			</div>

			<div class="eightcol last">
				<h3 class="no-margin" itemprop="name">
					Featured Video
				</h3>
				<p class="excerpt">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>

		</article>
	</div>
</section>
<!-- Content!
======================
-->	<div id="content">
	
		<div id="inner-content" class="wrap clearfix">

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
