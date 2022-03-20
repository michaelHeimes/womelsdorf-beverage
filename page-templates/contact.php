<?php 
/**
 * Template Name: Contact Page
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
					
<section class="entry-content contact-info" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
								<?php gravity_form( 3, false, false, false, '', true );?>
							</div>	
						</div>
					</div>
				</section>
												
			</article> <!-- end article -->
				
												
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>