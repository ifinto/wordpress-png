<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php bloginfo('name'); wp_title();?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />

<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

<link rel="shortcut icon" href="/favicon.ico" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php 
//wp_head() 
?>

<script>
	// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	// })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	// ga('create', 'UA-83966738-2', 'auto');
	// ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<?php if (!is_home()) { ?>
<?php } ?>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="collapsed navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?= home_url( '/' ); ?>" class="navbar-brand"><img src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt=""></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
			<form class="navbar-form navbar-left" role="search" method="get" action="<?= home_url( '/' ); ?>">
				<div class="form-group">
					<div class="input-group navbar-search">
						<input type="text" class="form-control" placeholder="Search" name="s">
						<button class="navbar-search-submit" id="navbar-search-submit" type="submit">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</div>
				</div>
			</form>
			<?php wp_nav_menu( array( 'menu_class' => 'nav navbar-nav top-menu', 'theme_location' => 'primary-menu' ) ); ?>
		</div>
	</div>
</nav>

<div class="page-wrap">	

	