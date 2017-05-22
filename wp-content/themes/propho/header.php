<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package propho
 */
header("Access-Control-Allow-Origin: *");
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

	<div class="menu" id="menu">
  <!-- Menu -->
	<?php
		// In your template files like footer.php
		// The items_wrap value ('%3$s') removes the wrapping <ul>, while the custom walker (Nav_Footer_Walker) removes the <li>'s.
		wp_nav_menu(array(
			'items_wrap'=> '<ul>%3$s</ul>',
			'walker' => new Nav_Footer_Walker(),
			'container'=> 'ul',
			'menu_class' => '',
			'theme_location'=>'propho-menu',
			'fallback_cb'=>false ));
	?>

  </div>

	<div id="topbar">
		<?php if(has_site_icon()) { ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="site-icon alignleft" src="<?php site_icon_url()?>"></a>
		<?php } else{ ?>
			<h1 class="site-title alignleft"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php } ?>
			<div class="alignright menu-title" id="nav-toggle">Menu<span class="glyphicon glyphicon-menu-hamburger" id="menu-icon"></span></div>
	</div>

		<?php $header_image = get_header_image();
			if(is_front_page()){
				if ( ! empty( $header_image ) ) { ?>
					<style type="text/css">
						#masthead{
							background: url( <?php echo esc_url( $header_image ); ?>);
							background-repeat: no-repeat;
							background-size: cover;
							width: 100%;
							margin:0;
							padding:0;
							object-fit: cover;
						}
					</style>
				<?php } ?>
				<header id="masthead" class="site-header" role="banner">
					<div class="row">
						<h2 class="sans"><?php echo bloginfo( 'name' ); ?></h2>
			      <h3 class="sans"><?php echo bloginfo( 'description' ); ?></h3>
					</div>
				</header>
			<?php }?>

<!-- #masthead -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">
