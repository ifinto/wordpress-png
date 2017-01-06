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
				<div class="slider-value-from js-size-slider-from">0 px</div>
				<div class="slider-value-to   js-size-slider-to"><i>&infin;</i></div>
			</div>
		</section>
		<section>
			<h3 class="filter-title">Image type</h3>
			<div class="btn-group btn-group-justified js-image-type" role="group">
				<a href="#" class="btn btn-default" role="button" data-type="any">Any</a>
				<a href="#" class="btn btn-default" role="button" data-type="cartoon">Cartoon</a>
      </div>
		</section>
		<section>
			<h3 class="filter-title">Background color</h3>
			<div class="bg-color-picker-wrapper">
				<input class="form-control 	jscolor {width:101, padding:5, shadow:false, borderWidth:0, backgroundColor:'transparent', insetColor:'#000'}" value="ffffff">
				<span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
			</div>
		</section>
	</div>
	<div class="search-output block-grid-wrapper">
		<?php
			$posts_count = 0;
		?>
		<div class="block-grid-lg-6 block-grid-md-4 block-grid-sm-3">
			<?php
				function hasTag($tag) {
					return preg_match('/cartoon/i', $tag->name);
				}

				if (have_posts()) :
				while (have_posts()) : the_post();

				if ($post->post_type !== 'post') continue;
				$text  = $post->post_content;
				$array = preg_split('/\s*\R\s*/m', trim($text), NULL, PREG_SPLIT_NO_EMPTY);
				$first = $array[0];
				list($url, $params) = explode('?', $first);
				if ($params) {
					parse_str($params, $img_params);
				}
				if ($img_params['w'] && $_GET["w_from"]) {
					if ($img_params['w'] < $_GET["w_from"]) continue;
				} 
				if ($img_params['w'] && $_GET["w_to"]) {
					if ($img_params['w'] > $_GET["w_to"]) continue;
				} 
				if ($_GET["img_type"] == 'cartoon') {
					$tags = wp_get_post_tags($post->ID);
					$hasType = !!array_filter($tags, 'hasTag');
					if (!$hasType) continue;
				}
				$posts_count++;
			?>
				<div class="block-grid-item">
					<div class="list-item custom-img-bg">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<?php get_template_part('template-parts/list-item-image'); ?>
							<h2 class="entry-title"><?= get_the_title(); ?></h2>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php if ($posts_count == 0) { ?>
				<div class="search-not-found">No images found</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="center">			
	<?php	if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
</div>

<?php get_footer() ?>