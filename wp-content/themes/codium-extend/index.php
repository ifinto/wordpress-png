<?php get_header( ); ?>
	<div id="container" class="">
		<div id="content" class="column">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home add') ) : ?><?php endif; ?>
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

<?php endwhile; endif ?>

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
	

<?php get_footer() ?>