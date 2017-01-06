<?php get_header() ?>

	<div class="page-title">
		<h1 class="entry-title"><?php the_title() ?></h1>
	</div>

	<div class="container page-content">
		<?php the_post() ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
			<div class="linebreak clear"></div>
			<div class="entry-content">
			<?php the_content() ?>

			<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>
			<div class="clear"></div>

			</div>
		</div><!-- .post -->
	</div>

<?php get_footer() ?>