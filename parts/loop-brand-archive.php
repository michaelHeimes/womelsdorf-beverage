<?php			
$args = array(  
	'post_type' => 'brand',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC'
);
$loop = new WP_Query( $args ); 
if ( $loop->have_posts() ) : 
	while ( $loop->have_posts() ) : $loop->the_post();?>
	
	<?php get_template_part( 'parts/loop', 'brand-card' );?>
		
	<?php
	endwhile;
endif;
wp_reset_postdata(); 
?>