<?php
/**
 * camoranns2 template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage camoranns2
 * @since camoranns2 1.0
 */

get_header(); ?>

<header>
	<?php

	$defaults = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		);

	wp_nav_menu( $defaults );

	?>
</header>

<section class="page-content primary" role="main">

	<?php
	if ( have_posts() ) : the_post();

	get_template_part( 'loop', get_post_format() ); ?>

	<aside class="post-aside">

		<div class="post-links">
			<?php previous_post_link( '%link', __( '&laquo; Previous post', 'theme_camoranns' ) ) ?>
			<?php next_post_link( '%link', __( 'Next post &raquo;', 'theme_camoranns' ) ); ?>
		</div>

		<?php
		if ( comments_open() || get_comments_number() > 0 ) :
			comments_template( '', true );
		endif;
		?>

	</aside><?php

	else :

		get_template_part( 'loop', 'empty' );

	endif;
	?>

</section>

<?php get_footer(); ?>