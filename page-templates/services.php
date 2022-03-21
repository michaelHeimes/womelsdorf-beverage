<?php 
/**
 * Template Name: Services Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
			<main class="main" role="main">
				
				<?php get_template_part('parts/content', 'banner');?>
					
				<section id="trailer-rental" class="entry-content trailer-rental rental-row" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Beer Trailer Rental</h2>
							</div>
						</div>
						<div class="grid-x grid-padding-x row-content">
							<div class="left cell small-12 medium-6 tablet-5 tablet-offset-1 large-4 large-offset-1">
								<div class="img-wrap">
									<?php 
									$trailer_image = get_field('trailer_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-6">
								<div class="inner">
									<div class="trailer-copy row-copy">
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
				
				<?php echo do_shortcode( "[booking type=1 nummonths=2 form_type='standard']" );?>
				
				<section id="tap-rental" class="entry-content tap-rental rental-row" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">Tap Rental</h2>
							</div>
						</div>
						<div class="grid-x grid-padding-x row-content">
							<div class="left cell small-12 medium-6 tablet-5 tablet-offset-1 large-4 large-offset-1">
								<div class="img-wrap">
									<?php 
									$tap_image = get_field('tap_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-6">
								<div class="inner">
									<div class="tap-copy row-copy">
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
				
				<section id="co2-refills" class="entry-content co2-refills rental-row" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2 cards-heading text-center">
								<h2 class="h1">CO2 Refills</h2>
							</div>
						</div>						
						<div class="grid-x grid-padding-x row-content">
							<div class="left cell small-12 medium-6 tablet-5 tablet-offset-1 large-4 large-offset-1">
								<div class="img-wrap">
									<?php 
									$co2_image = get_field('co2_image');?>
									<img src="<?php echo esc_url($trailer_image['url']); ?>" alt="<?php echo esc_attr($trailer_image['alt']); ?>" />
								</div>
							</div>
							<div class="right small-12 medium-6 tablet-5 large-6">
								<div class="inner">
									<div class="co2-copy row-copy">
										<?php the_field('co2_copy');?>
									</div>
								</div>
							</div>								
							</div>
						</div>
					</div>
				</section>

				<section class="entry-content beer-menu-cta" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-center">
							<div class="link-wrap cell shrink">
								<a class="button large beer-button" href="/beer-menu/">
									<span>Explore Our Beer Menu</span>
									<?php get_template_part( 'parts/svg', 'mug' );?>
								</a>
							</div>
						</div>
					</div>
				</section>				
								
			</article> <!-- end article -->
				
												
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>