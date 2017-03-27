<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Deliver
 */

?>

<article class="wrap-blog">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 pl-0">
				<div class="info-blog">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php
					the_title( '<h2 class="blog-heading text-uppercase"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					?>
					<ul class="info-blog-list pl-0 d-flex justify-content-start">
						<li class="info-blog-item-data"><?php the_time('F j, Y'); ?></li>
						<li class="info-blog-item-author"><?php the_author(); ?></li>
						<li class="info-blog-item-category"><?php the_category(); ?></li>
						<li class="info-blog-item-comments"><?php comments_number(); ?></li>
					</ul>
					<div class="blog-content">
              <?php the_content(); ?>
					</div>
				</div>
			</div>


			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</article>