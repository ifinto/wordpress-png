<?php get_header() ?>

	<div id="container">
		<div id="content" class="two-thirds column">
		
<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<div class="linebreak clear"></div>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'codium_extend'), "</div>\n", 'number'); ?>

<div class="clear"></div>


				</div>
			</div><!-- .post -->



		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>