<?php get_header() ?>

	<div class="single-post-page">
		<div class="page-title">
			<h1 class="entry-title"><?php the_title() ?> PNG Clipart</h1>
		</div>

		<div class="search-filters">
			
		</div>
		<div class="container">
			<div class="entry-images">
				<?php get_template_part('template-parts/single-image'); ?>
			</div>
		</div>
	
		<div class="block-grid-wrapper">
			<div class="container">
				<h2 class="section-title">Related posts:</h2>
				<?php if(is_single() && function_exists('igit_rpwt_posts')) igit_rpwt_posts(); ?>
			</div>
		</div>
	</div>

<?php get_footer() ?>