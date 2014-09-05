<?php

/**
 * Template Name: Portfolio
 */

get_header();

?>

<section class="grid">
	<?php
		// $images = get_attached_images( array( 'echo' => false ) );
		// echo "<pre>";
		// var_dump( $images );
		// echo "</pre>";
	?>
	
	<?php 
	
		$pages = get_pages( array( 'child_of' => $post->ID ) );
		
		if ( $pages ):
	
	?>
		<ul>
		
		<?php foreach ( $pages as $page ) : ?>
			
			<li id="item-<?php echo $page->ID; ?>" class="press-item">
				<a href="<?php echo get_page_link( $page->ID ); ?>">
					<figure>
						<?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
						<figcaption>
							<section>
								<div>
									<h2><?php echo $page->post_title; ?></h2>
									<p class="type"><?php echo get_post_meta( $page->ID, 'event_type', TRUE ); ?></p>
								</div>
							</section>
						</figcaption>
					</figure>
				</a>
			</li>
			
		<?php endforeach; ?>
		
		</ul>
		
	<?php endif; ?>

</section>

<?php get_footer(); ?>