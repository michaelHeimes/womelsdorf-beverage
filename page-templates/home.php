<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
									
				<header class="article-header docs-banner">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="left small-12 medium-6">
								<div class="fh inner grid-x align-middle">
									<div>
										<?php if($banner_heading = get_field('banner_heading')):?>
											<h1 class="page-title"><span><?php echo $banner_heading ?></span></h1>
										<?php else:?>
											<h1 class="page-title"><span><?php the_title(); ?></span></h1>
										<?php endif;?>
										<?php $link = get_field('banner_button_link');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
										<div class="link-wrap">
											<a class="button large beer-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
												<span><?php echo esc_html( $link_title ); ?></span>
												<?php get_template_part( 'parts/svg', 'mug' );?>
											</a>
										</div>
										<?php endif; ?>
									</div>
								</div>
								
							</div>
								
							<div class="right small-12 medium-6">
								<div class="img-wrap down-right-bg">
									<?php 
									$banner_image = get_field('banner_image');?>
									<img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
								</div>
							</div>
						</div>
					</div>
				</header> <!-- end article header -->
								
				<section class="entry-content about" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="left cell small-12 medium-6 tablet-5 tablet-offset-1 large-3 large-offset-1">
								<div class="img-wrap show-for-medium">
									<?php 
									$about_image = get_field('about_image');?>
									<img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt']); ?>" />
								</div>
							</div>
							<div class="right cell small-12 medium-6 tablet-5 large-7">
								<div class="about-copy">
									<?php the_field('about_copy');?>
								</div>
							</div>								
							</div>
						</div>
					</div>
				</section>
								
				<section class="entry-content cards our-brands" itemprop="text">
					<div class="grid-container" data-equalizer="card-content">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Featured Brands</h2>
								<p><?php the_field('fb_copy');?></p>
							</div>
						</div>
						<div class="grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-3 large-up-4 align-center" data-equalizer="card-heading" data-equalize-on="medium">
							<?php get_template_part('parts/loop', 'brand-archive');?>
						</div>
						<div class="grid-x grid-padding-x">
							<div class="cell">
								<div class="link-wrap">
									<a class="button large beer-button" href="/beer-menu/">
										<span>See All Beers</span>
										<?php get_template_part( 'parts/svg', 'mug' );?>
									</a>
								</div>								
							</div>
						</div>
					</div>
				</section>
				

				<section class="entry-content cards featured-beers" itemprop="text">
					<div class="grid-container" data-equalizer="card-content">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Featured Beers</h2>
								<p><?php the_field('fbeers_copy');?></p>
							</div>
						</div>
						<div class="grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-3 large-up-4 align-center" data-equalizer="card-heading" data-equalize-on="medium">

							<?php get_template_part('parts/loop', 'featured-beer-archive');?>
				
						</div>
					</div>
				</section>

				<section class="entry-content cards sale-beers" itemprop="text">
					<div class="grid-container" data-equalizer="card-content">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Beers on Sale</h2>
								<p><?php the_field('sb_copy');?></p>
							</div>
						</div>
						<div class="grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-3 large-up-4 align-center" data-equalizer="card-heading" data-equalize-on="medium">

							<?php get_template_part('parts/loop','sale-beers-archive');?>
				
						</div>
					</div>
				</section>

			</article> <!-- end article -->
			    
			    			    				
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>