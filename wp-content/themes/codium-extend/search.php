<?php get_header( ); ?>

<div class="page-title">
	<h1><?php printf( __( 'Search Results for: %s', 'codium_extend' ), '' . get_search_query() . '<span></span>' ); ?></h1>
</div>

<div class="search-page">
	<div class="search-header">
		<div class="search-filters-title">
			Search filters
		</div>
		<div class="search-categories">
		</div>
	</div>
	<div class="search-filters js-search-filters">
		<section>
			<h3 class="filter-title">Image size</h3>
			<div class="js-size-slider"></div>
			<div class="slider-values">
				<div class="slider-value-from js-size-slider-from"></div>
				<div class="slider-value-to   js-size-slider-to"></div>
			</div>
		</section>
	</div>
	<div class="search-output block-grid-wrapper">
		<div class="block-grid-lg-6 block-grid-md-4 block-grid-sm-3">
			<?php
				if (have_posts()) :
				while (have_posts()) : the_post();

				$text  = $post->post_content;
				$array = preg_split('/\s*\R\s*/m', trim($text), NULL, PREG_SPLIT_NO_EMPTY);
				$first = $array[0];
				list($url, $params) = explode('?', $first);
				if ($params) {
					parse_str($params, $img_params);
				}
				if ($img_params['w'] && $_GET["w_from"]) {
					if ($img_params['w'] < $_GET["w_from"]) return;
				} 
				if ($img_params['w'] && $_GET["w_to"]) {
					if ($img_params['w'] > $_GET["w_to"]) return;
				} 
			?>
				<div class="block-grid-item">
					<div class="list-item">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<?php get_template_part('template-parts/list-item-image'); ?>
							<h2 class="entry-title"><?= get_the_title(); ?></h2>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="center">			
	<?php	if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
</div>

<?php get_footer() ?>