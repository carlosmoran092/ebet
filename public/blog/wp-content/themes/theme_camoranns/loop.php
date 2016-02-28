<?php
/**
 * camoranns2 template for displaying the standard Loop
 *
 * @package WordPress
 * @subpackage camoranns2
 * @since camoranns2 1.0
 */
?>


<article id="post-<?php the_ID(); ?>" class="post col-md-4 col-sm-6 col-xs-12 cmrs-article">
	<div class="post-inner">
		<figure class="post-thumb">
	
			<?php 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			if ( has_post_thumbnail() ) { 
				echo '<a href="'.esc_url( get_permalink() ).'">';
				//the_post_thumbnail(array(350,260));
				echo '<img class="img-responsive" src="'.$url.'">';
				echo '</a>';
				}else {
					echo '<a href="'.esc_url( get_permalink() ).'">';
		
				echo '<img class="img-responsive" src="';
				echo get_template_directory_uri(); 
				echo '/assets/images/blog/post-2-thumb.jpg" alt="" ';
			
					echo '</a>';
					}?>

		</figure><!--//post-thumb-->
		<div class="content">
			<h3 class="post-title"><?php

				if ( is_singular() ) :
					the_title();
				else : ?>

				<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php
					the_title(); ?>
				</a><?php

				endif; ?></h3>

				<div class="post-entry">

					<?php if ( is_front_page() || is_category() || is_archive() || is_search() ) {
						the_excerpt();
					} else {
						the_content();
					} ?>

					<a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>">Read more <i class="fa fa-long-arrow-right"></i></a>
				</div>
				<div class="meta">
					<ul class="meta-list list-inline">                                       
						<li class="post-time post_date date updated">23rd Sep, 2014</li>
						<li class="post-author"> by <a href="#">James Lee</a></li>
						<li class="post-comments-link">
							<a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>3</a>
						</li>
					</ul><!--//meta-list-->                             
				</div><!--meta-->
			</div><!--//content-->
		</div><!--//post-inner-->
	</article><!--//post-->

