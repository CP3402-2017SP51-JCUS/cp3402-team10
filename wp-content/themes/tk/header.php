<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

	<div class="menu" id="menu">
  <!-- Menu -->
    <ul>
      <a href="#" class="nav"><li>Home</li></a>
      <a href="skills.html" class="nav"><li>About Me</li></a>
      <a href="projects.html" class="nav"><li>Projects</li></a>
    </ul>
  </div>

<header id="masthead" class="site-header" role="banner">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

		<div class="row" id="topbar">
			<div class="site-header-inner col-sm-12">

				<?php $header_image = get_header_image();
				if ( ! empty( $header_image ) ) { ?>
					<style type="text/css">
						#masthead{
							background: url( <?php echo esc_url( $header_image ); ?>);
							background-repeat: no-repeat;
							background-size: cover;
							width: 100%;
							min-height: 100%;
						}

					</style>
				<?php } ?>

					<div class="site-branding">
						<h1 class="site-title alignleft"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<div class="alignright menu-title" id="nav-toggle">Menu<span class="glyphicon glyphicon-menu-hamburger" id="menu-icon"></span></div>
					</div>


			</div>
		</div>
		<div class="row">
			<h2 class="sans"><?php echo bloginfo( 'name' ); ?></h2>
      <h3 class="sans"><?php echo bloginfo( 'description' ); ?></h3>
			<div class="header-btn">
				<ul>
					<li><a class="jumbobutton" href="#">Video</a></li>
					<li><a class="jumbobutton" href="#">See Our Work</a></li>
		</div>

</header><!-- #masthead -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">
