<?php get_header( ); ?>

<div class="home-posts block-grid-wrapper page-section">
	<div class="container">
		<h1 class="page-title"><?php
				printf( __( '%s', 'codium_extend' ), '' . single_tag_title( '', false ) . '<span></span>' );
		?>  PNG Clipart</h1>
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

	<div class="center">			
		<?php	if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
	</div>
</div>
	
<?php //get_sidebar() ?>
<?php get_footer() ?>