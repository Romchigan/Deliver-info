	<?php get_header('home'); ?>
  <?php the_content(); ?>
	<?php
	$args = array(
			'post_type' => 'service'
	);
	$the_query = new WP_Query ($args);

	if ($the_query->have_posts()) {
		echo '<ul>';
		while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<li><a href="' . get_permalink() . '">'. get_the_title() .'</a></li>';
		}
		echo '</ul>';
		wp_reset_postdata();
	}
	?>
	<section class="home-intro-section margin-home-sections mb-0">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-xs-12 text-center">
					<h2 class="site-heading text-uppercase">
              <?php echo get_theme_mod( 'home_intro_heading_settings' ); ?>
					</h2>
					<p class="site-info-heading mb-0">
              <?php echo get_theme_mod( 'home_intro_info_settings' ); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="home-service-section">
		<div class="container">
			<div class="row">
				<ul class="home-service-list pl-0 mb-0 d-flex justify-content-between">
					<li class="text-center">
						<img src="<?php echo get_template_directory_uri() ?> ./img/1.png" alt="service" width="85" height="85">
						<h3 class="home-service-heading text-uppercase">Service 1</h3>
						<p class="home-service-info">
							Lorem ipsum dolor sit amet, consectetur praseinti adipiscing elit. Praesent lato justo ligula, interdu ut lobortis quis dolor amet.
						</p>
						<a href="#" class="home-service-link-more">Find Out More</a>
					</li>
					<li class="text-center">
						<img src="<?php echo get_template_directory_uri() ?> ./img/1.png" alt="service" width="85" height="85">
						<h3 class="home-service-heading text-uppercase">Service 1</h3>
						<p class="home-service-info">
							Lorem ipsum dolor sit amet, consectetur praseinti adipiscing elit. Praesent lato justo ligula, interdu ut lobortis quis dolor amet.
						</p>
						<a href="#" class="home-service-link-more">Find Out More</a>
					</li>
					<li class="text-center">
						<img src="<?php echo get_template_directory_uri() ?> ./img/1.png" alt="service" width="85" height="85">
						<h3 class="home-service-heading text-uppercase">Service 1</h3>
						<p class="home-service-info">
							Lorem ipsum dolor sit amet, consectetur praseinti adipiscing elit. Praesent lato justo ligula, interdu ut lobortis quis dolor amet.
						</p>
						<a href="#" class="home-service-link-more">Find Out More</a>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="home-portfolio-section">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-xs-12 text-center">
					<h2 class="site-heading text-uppercase">
              <?php echo get_theme_mod( 'home_portfolio_heading_settings' ); ?>
					</h2>
					<p class="site-info-heading mb-0">
              <?php echo get_theme_mod( 'home_portfolio_info_settings' ); ?>
					</p>
				</div>
			</div>
			<div class="row">
				<ul class="home-portfolio-list pl-0 mb-0  d-flex flex-wrap justify-content-between">
					<li>
						<img src="<?php echo get_theme_mod( 'home_portfolio_image_pc_settings' ); ?>" alt="portfolio" width="350" height="200">
						<img src="<?php echo get_theme_mod( 'home_portfolio_item_first_settings' ); ?>" alt="screen" class="home-portfolio-img-screen" width="260" height="150">
					</li>
					<li>
						<img src="<?php echo get_theme_mod( 'home_portfolio_image_pc_settings' ); ?>" alt="portfolio" width="350" height="200">
						<img src="<?php echo get_theme_mod( 'home_portfolio_item_second_settings' ); ?>" alt="screen" class="home-portfolio-img-screen" width="260" height="150">
					</li>
					<li>
						<img src="<?php echo get_theme_mod( 'home_portfolio_image_pc_settings' ); ?>" alt="portfolio" width="350" height="200">
						<img src="<?php echo get_theme_mod( 'home_portfolio_item_third_settings' ); ?>" alt="screen" class="home-portfolio-img-screen" width="260" height="150">
					</li>
				</ul>
			</div>
		</div>
	</section>


	<section class="home-purchase-section">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-xs-12 text-center">
					<h2 class="site-heading text-uppercase">
              <?php echo get_theme_mod( 'home_purchase_heading_settings' ); ?>
					</h2>
					<p class="site-info-heading mb-0">
              <?php echo get_theme_mod( 'home_purchase_info_settings' ); ?>
					</p>
					<button type="button" class="text-uppercase btn btn-purchase btn-purchase-margin">
							<?php echo get_theme_mod( 'home_purchase_button_text' ); ?>
					</button>
				</div>
			</div>
		</div>
	</section>


	<?php get_footer(); ?>