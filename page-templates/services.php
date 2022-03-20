<?php 
/**
 * Template Name: Services Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main small-12 cell" role="main">
				
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
										<?php 
										$link = get_field('banner_button_link');
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
								<div class="img-wrap">
									<?php 
									$banner_image = get_field('banner_image');?>
									<img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
								</div>
							</div>
						</div>
					</div>
				</header> <!-- end article header -->
					
				<section id="trailer-rental" class="entry-content trailer-rental" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Beer Trailer Rental</h2>
							</div>
						</div>
						<div class="grid-x grid-padding-x">
							<div class="left small-12 medium-6 tablet-5 tablet-offset-1 large-3 large-offset-1">
								<div class="img-wrap">
									<?php 
									$trailer_image = get_field('trailer_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-7">
								<div class="trailer-copy">
									<?php the_field('trailer_copy');?>
								</div>
								<div class="link-wrap">
									<button class="button large beer-button" data-open="trailer-rental-form">
										<span>Reserve Now</span>
										<?php get_template_part( 'parts/svg', 'mug' );?>
									</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="reveal" id="trailer-rental-form" data-reveal>
						<div class="grid-x grid-padding-x">
							<div class="cell text-right">
								<button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="cell">
								<div class="form-wrap">
									<?php gravity_form( 1, false, false, false, '', true );?>
								</div>
							</div>
						</div>
					</div>
					
				</section>
				
				<section id="tap-rental" class="entry-content tap-rental" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Tap Rental</h2>
							</div>
						</div>
						<div class="grid-x grid-padding-x">
							<div class="left small-12 medium-6 tablet-5 tablet-offset-1 large-3 large-offset-1">
								<div class="img-wrap">
									<?php 
									$tap_image = get_field('tap_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-7">
								<div class="tap-copy">
									<?php the_field('tap_copy');?>
								</div>
								<div class="link-wrap">
									<button class="button large beer-button" data-open="tap-rental-form">
										<span>Reserve Now</span>
										<?php get_template_part( 'parts/svg', 'mug' );?>
									</button>
								</div>
							</div>								
							</div>
						</div>
					</div>
					
					<div class="reveal" id="tap-rental-form" data-reveal>
						<div class="grid-x grid-padding-x">
							<div class="cell text-right">
								<button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="cell">
								<div class="form-wrap">
									<?php gravity_form( 1, false, false, false, '', true );?>
								</div>
							</div>
						</div>
					</div>
					
				</section>
				
				<section id="co2-refills" class="entry-content co2-refills" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">CO2 Refills</h2>
							</div>
						</div>						
						<div class="grid-x grid-padding-x">
							<div class="left small-12 medium-6 tablet-5 tablet-offset-1 large-3 large-offset-1">
								<div class="img-wrap">
									<?php 
									$co2_image = get_field('co2_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-7">
								<div class="co2-copy">
									<?php the_field('co2_copy');?>
								</div>
							</div>								
							</div>
						</div>
					</div>
				</section>

				<section class="entry-content beer-menu-cta" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-center">
							<a class="button large-beer-button" href="/beer-list">
								<span>Check Out Our Beer Menu</span>
								<?php get_template_part( 'parts/svg', 'mug' );?>								
							</a>
						</div>
					</div>
				</section>				
									
				<footer class="article-footer">
					 <?php wp_link_pages(); ?>
				</footer> <!-- end article footer -->
										
				<?php comments_template(); ?>
								
			</article> <!-- end article -->
				
												
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>