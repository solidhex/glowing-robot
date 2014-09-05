<?php
/**
 * Home Page
 */

get_header();

?>

<section class="slider">
	<div>
		<?php echo get_attached_images( array( 'size' => 'full', 'orderby' => 'menu_order', 'order' => 'ASC' ) ); ?>
	</div>
</section>

<?php get_footer(); ?>