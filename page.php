<?php 
/**
Template Name: Standard Page
*/		
get_header(); ?>

	<div class="page row container">
		<?php if (have_posts()) while (have_posts()) : the_post();?>
		<div class="col-md-9 main">
			<div class="row">
				<h1 class="pad"><div class="line-colour"></div><?php echo get_the_title(); ?></h1><div class="line-dash pad"> </div>
				<h3><?php the_field('subheading'); ?></h3>
				<?php the_content(); ?>	
			</div>
		</div>
		<div class="col-sm-3">
				<h2 class="line-gray">Contact</h2>
				<p><a href="tel:+14169797380">+1 416 979 7380</a><br>
		  		<a href="mailto:info@ouatmedia.com">info@ouatmedia.com</a></p>

		</div>

		<?php endwhile; ?>
	</div>

<?php get_footer(); ?>