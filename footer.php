<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Deliver
 */

?>

	<footer class="footer-section pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-xl-4 col-sm-12 col-md-12 pl-0 pr-0">
					<div class=" d-flex justify-content-between">
						<?php if ( is_front_page() ) : ?>
							<h1 class="site-title footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else: ?>
            	<h1 class="site-title footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php endif; ?>
						<div class="wrap-soical-footer">
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
					</div>
					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description footer-info"><?php echo $description; ?></p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-xl-3 col-sm-12 col-md-12">
					<div class="footer-contact">
						<h3 class="footer-heading text-uppercase">
								<?php echo get_theme_mod( 'footer_contact_settings' ); ?>
						</h3>
						<ul class="footer-contact-list pl-0 mb-0">
							<li class="footer-contact-address">
                  <?php echo get_theme_mod( 'footer_contact_address' ); ?>
							</li>
							<li>
                  <?php echo get_theme_mod( 'footer_contact_mail' ); ?>
							</li>
							<li class="footer-contact-coordinates">
                  <?php echo get_theme_mod( 'footer_contact_coordinates' ); ?>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-xl-2 col-sm-12 col-md-12">
					<div class="footer-links">
						<h3 class="footer-heading text-uppercase">
                <?php echo get_theme_mod( 'footer_links_settings' ); ?>
						</h3>
              <?php wp_nav_menu( array(
                  'theme_location' => 'Footer-links',
                  'container'      => '',
                  'menu_class'     => 'footer-links-list',
                  'menu_id'        => '',
              ) );
              ?>
					</div>
				</div>
				<div class="col-lg-3 col-xl-3 col-sm-12 col-md-12 d-flex justify-content-end pr-0">
					<div class="footer-newsletter">
						<h3 class="footer-heading text-uppercase">
                <?php echo get_theme_mod( 'footer_newsletter_settings' ); ?>
						</h3>
						<p class="footer-newsletter-info mb-0">
                <?php echo get_theme_mod( 'footer_newsletter_info' ); ?>
						</p>
						<form action="">
							<label for="footer-mail">
								<input type="email" id="footer-mail" placeholder="<?php echo get_theme_mod( 'footer_newsletter_email' ); ?>" class="footer-input-mail">
							</label>
							<button type="submit" class="text-uppercase btn btn-footer-mail"><?php echo get_theme_mod( 'footer_newsletter_button_text' ); ?></button>
						</form>
					</div>
				</div>
			</div>
			<div class="row sub-footer d-flex justify-content-between">
				<p class="sub-footer-copyright text-uppercase mb-0">Copyright
					<?php echo date( 'Y' ); ?>
					 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="pl-1 pr-1"><?php bloginfo( 'name' ); ?></a>
					 <?php echo get_theme_mod( 'sub_footer_settings' ); ?>
				</p>
          <?php wp_nav_menu( array(
              'theme_location' => 'Footer-menu',
              'container'      => '',
              'menu_class'     => 'sub-footer-menu',
              'menu_id'        => '',
							'after'					 => ' /',
          ) );
          ?>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
