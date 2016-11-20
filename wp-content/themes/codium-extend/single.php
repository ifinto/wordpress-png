<?php get_header() ?>

	<div id="container">
		<div id="content" class="two-thirds column">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>">
					<div class="title-box">
					<div class="title-box-info">
						<h1 class="entry-title"><?php the_title() ?> PNG Clipart</h1>
					</div>
				</div>
				<div class="entry-content">
					<?php get_template_part('template-parts/single-image'); ?>
					<div class="clear"></div>
					<div></h1>

					<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'codium_extend' ), 'after' => '</div>' ) ); ?>
					
					<?php if(is_single() && function_exists('igit_rpwt_posts')) igit_rpwt_posts(); ?>
 				</div>
				<div style="clear:both;"></div>		
			
				<div class="clear"></div>
			</div><!-- .post -->
		  
		  
		<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Single bottom add') ) : ?><?php endif; ?>

<?php if ((get_post_meta($post->ID, 'post-id', true))) { ?>
<p class="similar-box">Similar blueprints</p>
<div class="post">
	<!--<h2>For a similar 3D project you may need</h2>-->
	<?php $mydiscslug = get_post_meta($post->ID, "post-id", $single=true); ?>
		<?php // retrieve one post with an ID of 1
		query_posts('p=' . $mydiscslug); ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
			</div>
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
	</div>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>
</div>
<?php } ?>
<?php if ((get_post_meta($post->ID, 'post-id2', true))) { ?>
<div class="post">
	<!--<h2>For a similar 3D project you may need</h2>-->
	<?php $mydiscslug = get_post_meta($post->ID, "post-id2", $single=true); ?>
		<?php // retrieve one post with an ID of 1
		query_posts('p=' . $mydiscslug); ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
			</div>
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
	</div>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>
</div>
<?php } ?>
<?php if ((get_post_meta($post->ID, 'post-id3', true))) { ?>
<div class="post">
	<!--<h2>For a similar 3D project you may need</h2>-->
	<?php $mydiscslug = get_post_meta($post->ID, "post-id3", $single=true); ?>
		<?php // retrieve one post with an ID of 1
		query_posts('p=' . $mydiscslug); ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
			</div>
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
	</div>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>
</div>
<?php } ?>
<?php if ((get_post_meta($post->ID, 'post-id4', true))) { ?>
<div class="post">
	<!--<h2>For a similar 3D project you may need</h2>-->
	<?php $mydiscslug = get_post_meta($post->ID, "post-id3", $single=true); ?>
		<?php // retrieve one post with an ID of 1
		query_posts('p=' . $mydiscslug); ?>
		<?php while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?></a>
			</div>
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
	</div>
	<?php endwhile;?>
	<?php wp_reset_query(); ?>
</div>
<?php } ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>