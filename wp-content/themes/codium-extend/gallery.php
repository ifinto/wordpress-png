<?php
/*
Template Name: Gallery
*/
?>
<?php get_header( ); ?>
	<div id="container">
		<div id="content" class="two-thirds column">
				
<?php if (have_posts()) : ?>  
<?php query_posts('cat=47&showposts=10'); ?>
<?php while (have_posts()) : the_post(); ?>
			
			
			<!-- Begin post -->
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="smalltumb"><a href="<?php the_permalink() ?>" title="<?php printf(__('Link to %s', 'codium_extend'), esc_html(get_the_title(), 1)) ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div>
						
			</div>
			<!-- End post -->

<div class="linebreak clear"></div>

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
	
<?php get_sidebar() ?>
<?php get_footer() ?>