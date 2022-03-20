<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
 
				<?php get_template_part('parts/content', 'contact-info');?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							<div class="small-12 medium-shrink">
								<nav>
									<ul class="menu">
										<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
										
										<?php if($footer_logo = get_field('footer_logo', 'option')):?>
											<li class="logo">
												<a href="<?php echo home_url(); ?>">
													<img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" width="180"/>
												</a>
											</li>
										<?php else:?>
											<li><a href="<?php echo home_url(); ?>"><b><?php bloginfo('name'); ?></b></a></li>
										<?php endif;?>
										
									</ul>
								</nav>
							</div>
								
							<div class="small-12 medium-auto cell">
								<nav role="navigation">
	    							<?php joints_footer_links(); ?>
	    						</nav>
	    					</div>
							
							<div class="small-12 medium-12 large-12 cell">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						
						</div> <!-- end #inner-footer -->
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->