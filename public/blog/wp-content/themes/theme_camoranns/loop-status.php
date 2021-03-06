<?php
/**
 * camoranns2 template for displaying the Loop for the Status-Post-Format
 *
 * @package WordPress
 * @subpackage camoranns2
 * @since camoranns2 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="post-title">
        <?php the_content(); ?>
    </h1>

    <?php get_template_part( 'template-part', 'byline' ); ?>

</article>