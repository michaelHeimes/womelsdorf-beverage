<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="cell">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="cell shrink">
					<nav>
						<ul class="menu">
							<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
							
							<?php if($header_logo = get_field('header_logo', 'option')):?>
								<li class="logo">
									<a href="<?php echo home_url(); ?>">
										<img src="<?php echo esc_url($header_logo['url']); ?>" alt="<?php echo esc_attr($header_logo['alt']); ?>" width="180"/>
									</a>
								</li>
							<?php else:?>
								<li><a href="<?php echo home_url(); ?>"><b><?php bloginfo('name'); ?></b></a></li>
							<?php endif;?>
							
						</ul>
					</nav>
				</div>
				<div class="top-bar-right show-for-medium">
					<?php joints_top_nav(); ?>	
				</div>
				<div class="cell auto show-for-small-only">
					<ul class="menu">
						<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
						<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>