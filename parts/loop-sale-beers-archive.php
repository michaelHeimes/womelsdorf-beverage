<?php			
$args = array(  
	'post_type' => 'beer',
	'post_status' => 'publish',
	'posts_per_page' => -1,
	'orderby' => 'title',
	'order' => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'status',
			'field'    => 'slug',
			'terms'    => 'sale',
		),
	),
);
$loop = new WP_Query( $args ); 
if ( $loop->have_posts() ) : 
	while ( $loop->have_posts() ) : $loop->the_post();?>
	
	<?php get_template_part( 'parts/loop', 'beer-card' );?>
		
	<?php
	endwhile;
endif;
wp_reset_postdata(); 
?>