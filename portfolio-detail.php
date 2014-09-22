<?php

/**
 * Template Name: Portfolio Detail
 */

get_header();

?>

<section class="slider">
	<div>
		<?php echo get_attached_images( array( 'size' => 'medium' ) ); ?>
	</div>
</section>

<aside>
	<!-- <a href="#" class="back">Back to Portfolio</a> -->
	<h3><?php echo get_the_title( $post->ID ); ?></h3>
</aside>

<?php get_footer(); ?>