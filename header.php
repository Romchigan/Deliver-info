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
<header class="wrap-header wrap-header-page">
	<div class="container pl-0 pr-0">
		<nav class="navbar navbar-toggleable-md navbar-light pl-0 pr-0">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="icon-menu"></i>
			</button>
			<div class="header-info-wrap">
				<div class="d-flex justify-content-between header-info">
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
				<div class="d-flex justify-content-between wrap-navbar">
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
	<div class="title-page">
		<div class="container">
			<div class="row">
				<h2 class="title-page-heading text-uppercase"><?php wp_title(''); ?></h2>
			</div>
		</div>
	</div>
</header>
