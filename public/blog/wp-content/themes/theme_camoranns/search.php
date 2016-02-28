<?php
/**
 * camoranns2 template for displaying Search-Results-Pages
 *
 * @package WordPress
 * @subpackage camoranns2
 * @since camoranns2 1.0
 */

get_header(); ?>

	<section class="page-content primary" role="main"><?php

		if ( have_posts() ) : ?>

			<div class="search-title">
				<h1 ><?php printf( __( 'Search Results for: %s', 'theme_camoranns' ), get_search_query() ); ?></h1>

				<div class="second-search">
					<p>
						<?php _e( 'Not what you searched for? Try again with some different keywords.', 'theme_camoranns' ); ?>
					</p>

					<?php get_search_form(); ?>
				</div>
			</div><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'loop', get_post_format() );

				wp_link_pages(
					array(
						'before'           => '<div class="linked-page-nav"><p>' . sprintf( __( '<em>%s</em> is separated in multiple parts:', 'theme_camoranns' ), get_the_title() ) . '<br />',
						'after'            => '</p></div>',
						'next_or_number'   => 'number',
						'separator'        => ' ',
						'pagelink'         => __( '&raquo; Part %', 'theme_camoranns' ),
					)
				);

			endwhile;

		else :

			get_template_part( 'loop', 'empty' );

		endif; ?>

		<div class="pagination">

			<?php get_template_part( 'template-part', 'pagination' ); ?>

		</div>
	</section>

<?php get_footer(); ?>