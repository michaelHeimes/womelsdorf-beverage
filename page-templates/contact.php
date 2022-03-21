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
									
				<?php get_template_part('parts/content', 'banner');?>
					
<section class="entry-content contact-info" itemprop="text">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">
								<div class="form-wrap">
									<?php gravity_form( 3, false, false, false, '', true );?>
								</div>
							</div>	
						</div>
					</div>
				</section>
												
			</article> <!-- end article -->
				
												
			</main> <!-- end #main -->
			
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>