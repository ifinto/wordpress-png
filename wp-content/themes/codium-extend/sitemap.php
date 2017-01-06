<?php get_header() ?>

	<div class="page-title">
		<h1 class="entry-title"><?php the_title() ?></h1>
	</div>

	<div class="container page-content">
		<?php the_post() ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
			<div class="entry-content">
				<?php the_content() ?>
				<div class="clear"></div>
			</div>
		</div><!-- .post -->
	</div>

<?php get_footer() ?>