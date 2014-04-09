<?php get_header(); ?>

<style type="text/css">
	
	.has-background-image {
		background-image: url('http://sherman.library.nova.edu/sites/learn/files/2014/04/studious-student-350x193.jpg');
	}

	@media only screen and (min-width: 45em ) {
		.has-background-image {
			background-image: url('http://sherman.library.nova.edu/sites/learn/files/2014/04/studious-student-720x405.jpg');
		}
	}

	@media only screen and (min-width: 64em ) {
		.has-background-image {
			background-image: url('http://sherman.library.nova.edu/sites/learn/files/2014/04/studious-student-1140x641.jpg');
		}
	}

	@media only screen and (min-width: 77.5em ) {
		.has-background-image {
			background-image: url('http://sherman.library.nova.edu/sites/learn/files/2014/04/studious-student.jpg');
		}
	}
	
</style>
<section class="background-base has-background has-background-image hero clearfix">
	<div class="wrap clearfix">
		<article class="card shadow" itemscope="" itemtype="http://schema.org/Event">

			<header>
				<h3 itemprop="name no-margin">Little Videos, Big Impact</h3>
			</header>

			<p class="epsilon excerpt">
				LibraryLearn has short video tutorials on a variety of library resources. The videos can show you how to use specific tools like
				NovaCat (our catalog), FindIt, Journal Finder, or even help guide you through the research process. 
			</p>

			<div class="spacer">
				<a class="button green" href="//sherman.library.nova.edu/sites/learn/category/getting-started/">Getting Started</a>
				<a class="button base" href="//nova.edu/library/main/ask.html">Ask a Librarian</a>
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
