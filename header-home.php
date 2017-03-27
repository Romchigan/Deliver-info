<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deliver
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="wrap-header wrap-header-home">
	<div class="container pl-0 pr-0">
		<nav class="navbar navbar-toggleable-md navbar-light pl-0 pr-0">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="icon-menu"></i>
			</button>
			<div class="header-info-wrap">
				<div class="d-flex justify-content-between header-info">
					<a class="navbar-brand text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?>
					</a>
					<ul class="social-icons-list pl-0 mb-0">
						<li>
							<a href="<?php echo get_theme_mod( 'social_twitter_setting' ); ?>" class="social-icons d-flex justify-content-center align-items-center">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod( 'social_facebook_setting' ); ?>" class="social-icons d-flex justify-content-center align-items-center">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod( 'rss_setting' ); ?>" class="social-icons d-flex justify-content-center align-items-center">
								<i class="fa fa-rss" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="d-flex justify-content-between flex-wrap wrap-navbar">
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php wp_nav_menu( array(
                  'theme_location' => 'Header-menu',
                  'container'      => '',
                  'menu_class'     => 'navbar-nav',
                  'menu_id'        => '',
                  'walker'  => new BootstrapNavMenuWalker()
              ) );
              ?>
					</div>
					<div class="header-search">
						<form>
							<input type="text" placeholder="Искать здесь...">
							<button type="submit"></button>
						</form>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<div id="home-carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img src="<?php echo get_theme_mod( 'header_banner_first' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
			<div class="carousel-caption">
				<div class="container wrap-heading-site d-flex justify-content-center">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-uppercase home-heading-site text-white p-0 mt-0"><?php echo get_theme_mod( 'header_start_heading' ); ?>
								<a href="<?php get_permalink(); ?>"><?php bloginfo( 'name' ); ?></a>
                  <?php echo get_theme_mod( 'header_end_heading' ); ?>
							</h1>
							<p class="home-sup-heading-site text-white"><?php echo get_theme_mod( 'header_sub_heading' ); ?></p>
							<button type="button" class="btn btn-portfolio text-uppercase text-white">
                  <?php echo get_theme_mod( 'banner_button' ); ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_theme_mod( 'header_banner_first' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
			<div class="carousel-caption">
				<div class="container wrap-heading-site d-flex justify-content-center">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-uppercase home-heading-site text-white p-0 mt-0"><?php echo get_theme_mod( 'header_start_heading' ); ?>
								<a href="<?php get_permalink(); ?>"><?php bloginfo( 'name' ); ?></a>
                  <?php echo get_theme_mod( 'header_end_heading' ); ?>
							</h1>
							<p class="home-sup-heading-site text-white"><?php echo get_theme_mod( 'header_sub_heading' ); ?></p>
							<button type="button" class="btn btn-portfolio text-uppercase text-white">
                  <?php echo get_theme_mod( 'banner_button' ); ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_theme_mod( 'header_banner_first' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
			<div class="carousel-caption">
				<div class="container wrap-heading-site d-flex justify-content-center">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-uppercase home-heading-site text-white p-0 mt-0"><?php echo get_theme_mod( 'header_start_heading' ); ?>
								<a href="<?php get_permalink(); ?>"><?php bloginfo( 'name' ); ?></a>
                  <?php echo get_theme_mod( 'header_end_heading' ); ?>
							</h1>
							<p class="home-sup-heading-site text-white"><?php echo get_theme_mod( 'header_sub_heading' ); ?></p>
							<button type="button" class="btn btn-portfolio text-uppercase text-white">
                  <?php echo get_theme_mod( 'banner_button' ); ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="<?php echo get_theme_mod( 'header_banner_first' ); ?>" alt="banner" class="home-banner-img" width="1970px" height="1300px">
			<div class="carousel-caption">
				<div class="container wrap-heading-site d-flex justify-content-center">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-uppercase home-heading-site text-white p-0 mt-0"><?php echo get_theme_mod( 'header_start_heading' ); ?>
								<a href="<?php get_permalink(); ?>"><?php bloginfo( 'name' ); ?></a>
                  <?php echo get_theme_mod( 'header_end_heading' ); ?>
							</h1>
							<p class="home-sup-heading-site text-white"><?php echo get_theme_mod( 'header_sub_heading' ); ?></p>
							<button type="button" class="btn btn-portfolio text-uppercase text-white">
                  <?php echo get_theme_mod( 'banner_button' ); ?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 home-carousel-indicators">
				<ol class="carousel-indicators">
					<li data-target="#home-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#home-carousel" data-slide-to="1"></li>
					<li data-target="#home-carousel" data-slide-to="2"></li>
					<li data-target="#home-carousel" data-slide-to="3"></li>
				</ol>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
		<span class="fa fa-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
		<span class="fa fa-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
