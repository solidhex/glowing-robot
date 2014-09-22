<?php

/**
 * Template Name: Press
 */

get_header();

?>

<?php
	
	$args = array(
		'child_of' => $post->ID,
		'parent' => $post->ID 
	);
		
	$pages = get_pages( $args );
	
	foreach ( $pages as $page ) :
?>

<section class="press-<?php echo $page->post_name; ?>">
	<h2><?php echo $page->post_title; ?></h2>
	<?php
		$items = get_pages( array( 'child_of' => $page->ID ) );
		var_dump( $items );
	?>
	
</section>

<?php endforeach; ?>


<?php get_footer(); ?>