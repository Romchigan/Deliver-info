	<?php get_header(); ?>
  <?php the_content(); ?>


	<section class="about-intro-section">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-xs-12 text-center">
					<h2 class="site-heading text-uppercase">
              <?php echo get_theme_mod( 'about_intro_heading_settings' ); ?>
					</h2>
					<p class="site-info-heading mb-0">
              <?php echo get_theme_mod( 'about_intro_info_settings' ); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us-section">
		<div class="container">
			<div class="row">
				<ul class="about-us-list pl-0 mb-0 d-flex justify-content-between flex-wrap">
					<li>
						<h3 class="about-us-list-heading text-uppercase">
                <?php echo get_theme_mod( 'about_heading_first_item_settings' ); ?>
						</h3>
						<p class="about-us-list-info">
                <?php echo get_theme_mod( 'about_info_first_item_settings' ); ?>
						</p>
					</li>
					<li>
						<h3 class="about-us-list-heading text-uppercase">
                <?php echo get_theme_mod( 'about_heading_second_item_settings' ); ?>
						</h3>
						<p class="about-us-list-info">
                <?php echo get_theme_mod( 'about_info_second_item_settings' ); ?>
						</p>
					</li>
					<li>
						<h3 class="about-us-list-heading text-uppercase">
                <?php echo get_theme_mod( 'about_heading_third_item_settings' ); ?>
						</h3>
						<p class="about-us-list-info">
                <?php echo get_theme_mod( 'about_info_third_item_settings' ); ?>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="our-team-section">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-xs-12 text-center">
					<h2 class="site-heading text-uppercase">
              <?php echo get_theme_mod( 'our_team_heading_settings' ); ?>
					</h2>
					<p class="site-info-heading mb-0">
              <?php echo get_theme_mod( 'our_team_info_settings' ); ?>
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<ul class="our-team-list pl-0 mb-0 d-flex justify-content-between flex-wrap">
					<?php $loop = new WP_Query( array( 'post_type' => 'Team', 'posts_per_page' => -1 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<li>
							<?php	the_post_thumbnail(array(265, 200)); ?>
							<h3 class="worker-name text-uppercase"><?php the_title(); ?></h3>
							<p class="worker-position"><?php the_field('team_position'); ?></p>
							<p class="our-team-content"><?php the_content(); ?></p>
						</li>
					<?php endwhile; wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</section>


	<?php get_footer(); ?>