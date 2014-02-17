<?php get_header(); ?>
<?php //get_template_part('template--feature-recent'); ?>
<div class="feature feature-event video" data-spotlight="librarylearn" data-audience data-category data-template="feature"></div>

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

<section class="hero wrap clearfix">

	<p class="delta">
		<strong>LibraryLearn</strong> is a hub for brief, to-the-point videos
		made by <abbr title="Nova Southeastern University">NSU</abbr> Librarians
		demonstrating how to use a variety of library resources, design 
		research strategies, master <a href="//novacat.nova.edu" title="NovaCat: NSU Libraries Catalog">NovaCat</a>,
		and more.
	</p>

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
