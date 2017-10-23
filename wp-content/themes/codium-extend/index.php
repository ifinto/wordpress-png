<?php get_header( ); ?>

<div class="home-hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
			  <h1 class="home-hero-title">Download Free PNG on transparent background</h1>
			  <p>Images of things that could help you in design. Only high-quality pictures.</p>
				<div class="home-search-wrapper">
					<form method="get" action="<?= home_url( '/' ); ?>">
						<input type="text" class="form-control" placeholder="Search car icons, photos, whatever" name="s">
						<button class="submit-btn"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-categories page-section">
	<div class="container">
		<h2 class="section-title">Categories</h2>
		<div class="row">
			<?php
			$categories = get_categories( array(
		    'orderby' => 'name',
		    'order'   => 'ASC',
		    'hide_empty' => true,
		    'include' => [48, 91, 173, 407, 408, 432, 485, 7]
			) );
			 
			foreach( $categories as $category ) {
		    echo '<div class="col-sm-3">';
		    echo '  <a href="'. get_category_link( $category->term_id ) .'">';
		    echo '    <span class="cat-icon glyphicon glyphicon-flag" aria-hidden="true"></span> ';
		    echo      $category->name;
		    echo '  </a>';
		    echo '</div>';
			}
			?>
		</div>
	</div>
</div>

<div class="home-posts block-grid-wrapper page-section">
	<div class="container">
		<h2 class="section-title">Featured clipart</h2>
		<div class="block-grid-sm-4">
			<?php if (have_posts()) : ?> 
			<?php while (have_posts()) : the_post(); ?>
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
	
	<br>
</div>

<?php get_footer() ?>