<?php

/**
 *Template Name: Full Width
 *
 * @package coletivo
 */

get_header(); ?>

		<?php if( has_post_thumbnail() && $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true ) ) : ?>
			<div class="image-fullheader">
				<img src="<?php echo esc_url( $img[0] ); ?>" alt="<?php the_title(); ?>">
			</div><!-- image-fullheader -->
		<?php endif; ?>
	<div id="content" class="container">
		<?php the_title( '<h2 class="fullheader-title">', '</h2>' ); ?>
			<div id="fullwidth" class="content-area">
					
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>

					<?php endwhile; // End of the loop. ?>

			</div><!-- #fullwidth -->
	</div><!-- #content -->

<?php get_footer(); ?>