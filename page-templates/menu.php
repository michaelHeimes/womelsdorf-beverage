<?php 
/**
 * Template Name: Beer Menu Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content grid-x grid-padding-x">
	
		    <main class="main small-12 cell" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    
			    <div id="menu-container" class="beer-menu"></div>
				<script type="text/javascript">
				  !function getScript(e,t){var a=document.createElement("script"),n=document.getElementsByTagName("script")[0];a.async=1,n.parentNode.insertBefore(a,n),a.onload=a.onreadystatechange=function(e,n){(n||!a.readyState||/loaded|complete/.test(a.readyState))&&(a.onload=a.onreadystatechange=null,a=undefined,n||t&&t())},a.src=e}("https://embed-menu-preloader.untappdapi.com/embed-menu-preloader.min.js",function(){PreloadEmbedMenu("menu-container",25725,98546)});
				</script>
 
			    						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>