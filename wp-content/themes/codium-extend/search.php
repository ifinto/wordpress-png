<?php get_header( ); ?>
	<div id="container">
		<div id="content" class="column">
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'codium_extend' ), '' . get_search_query() . '<span></span>' ); ?></h1>
			<div class="linebreak clear"></div>	
			<?php if (have_posts()) : ?>  
			<?php while (have_posts()) : the_post(); ?>
			
			
			<!-- Begin post -->
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="title-box">
						<div class="title-box-info">
							<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark">
							<?php if (strlen($post->post_title) > 20) {
								echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . '...'; } else {
								the_title();
								} ?>
							</a></h2>
						</div>
					</div>
					<div class="entry-content">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<?php get_template_part('template-parts/list-item-image'); ?>
						</a>
					</div>
			</div>

<?php endwhile;  ?>

<div class="center">			
	<?php if(function_exists('wp_pagenavi')) { 
		wp_pagenavi();
	} else {?>
		<div class="navigation mobileoff"><p><?php posts_nav_link(); ?></p></div>
		 <?php } ?>  
		<div class="navigation_mobile"><p><?php posts_nav_link(); ?></p></div> 
</div>


		</div><!-- #content -->
	</div><!-- #container -->
	
<?php //get_sidebar() ?>
<?php get_footer() ?>


<?php else : ?>

<div id="post-0" class="no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'codium_extend' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'codium_extend' ); ?></p>
						<?php //get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<script type="text/javascript">
	                // focus on search field after it has loaded
	                document.getElementById('s') && document.getElementById('s').focus();
</script>				
<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php //get_sidebar() ?>
<?php get_footer() ?>