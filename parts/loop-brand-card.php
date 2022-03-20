<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell brand-card'); ?> role="article">	
	<?php if ($website_url = get_field('website_url')):?>			
	<a href="<?php echo $website_url; ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" target="_blank">
	<?php endif;?> 
	
		<header class="article-header" data-equalizer-watch="card-heading">
			<h3><?php the_title(); ?></h3>
		</header> <!-- end article header -->
						
		<section class="entry-content" itemprop="text" data-equalizer-watch="card-content">
			<?php 
			$image = get_field('logo');
			if( !empty( $image ) ): ?>
			<div class="logo-wrap grid-x align-middle align-center">
				<img style="max-height: 100px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>
			<?php if($description = get_field('short_description')):?>
				<div class="description">
					<?php echo $description;?>
				</div>
			<?php endif;?>
		</section> <!-- end article section -->
	<?php if ($website_url = get_field('website_url')):?>			
	</a>
	<?php endif;?> 								
</article> <!-- end article -->