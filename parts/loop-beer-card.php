<?php
/**
 * Template part for BEER CARDS
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell brand-card'); ?> role="article">	
	<?php if ($website_url = get_field('website_url')):?>			
	<a href="<?php echo $website_url; ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" target="_blank">
	<?php endif;?> 
	
		<header class="article-header grid-x align-middle" data-equalizer-watch="card-heading">
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
			<div class="classifications">
				<span><b>
					<?php 
					$terms = get_the_terms( $post->ID , 'classification' );
					$list = [];
					foreach ( $terms as $term ) {
						$term_link = $term->name;
						if ( ! is_wp_error( $term_link ) )
							$list[] = $term_link;
					}
					echo implode( ' / ', $list );
					?>
				</b></span>
			</div>
			<div class="stats grid-x grid-padding-x">
				<?php if($abv = get_field('abv')):?>
				<div class="cell shrink">
					<span><b>ABV:</b> <?php echo $abv;?>%</span>
				</div>
				<?php endif;?>
				<?php if($ibu = get_field('ibu')):?>
				<div class="cell shrink">
					<span><b>IBU:</b> <?php echo $ibu;?></span>
				</div>
				<?php endif;?>
			</div>
			<?php if($description = get_field('short_description')):?>
				<div class="description-copy">
					<?php echo $description;?>
				</div>
			<?php endif;?>
		</section> <!-- end article section -->
	<?php if ($website_url = get_field('website_url')):?>			
	</a>
	<?php endif;?> 								
</article> <!-- end article -->