<header class="article-header docs-banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 medium-6">
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
				
			<div class="right cell small-12 medium-6">
				<div class="img-wrap down-right-bg">
					<?php 
					$banner_image = get_field('banner_image');?>
					<img src="<?php echo esc_url($banner_image['url']); ?>" alt="<?php echo esc_attr($banner_image['alt']); ?>" />
				</div>
			</div>
		</div>
	</div>
</header> <!-- end article header -->