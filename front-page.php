<?php
/**
 * Home Page
 */

get_header();

?>

<section class="slider">
	<div>
		<?php echo get_attached_images( array( 'size' => 'full' ) ); ?>
	</div>
</section>

<?php get_footer(); ?>