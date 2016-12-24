f<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php bloginfo('name'); wp_title();?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<link rel="shortcut icon" href="/favicon.ico" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tools.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head() ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83966738-2', 'auto');
  ga('send', 'pageview');

</script>


</head>



<body <?php body_class(); ?>> 



<div id="wrapperpub" class="container">

	<div id="header">

		<div class="sixteen columns">

			<h1 id="blog-title" class="blogtitle"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>

			<div class="description"><?php bloginfo('description'); ?> </div>

		</div><!-- sixteen columns -->

		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">

			<input class="ilarge" type="text" value="" name="s" id="s" />

			<input class="submit" type="submit" value="Search" id="searchsubmit" />

		</form>

		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary-menu' ) ); ?>

	</div><!--  #header -->	

</div><!--  #wrapperpub -->			

<div class="clear"></div>

<div id="wrapper" class="container">	

		

<div class="clear"></div>		

	