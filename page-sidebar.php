<?php 
/**
Template Name: Standard Page with Sidebar
*/		
get_header(); ?>

	<div class="hero-main row container">
		<?php if (have_posts()) while (have_posts()) : the_post();?>
		<div class="col-sm-9 main">
				<h3 class="pad"><div class="line-colour"></div><?php the_field('subheading'); ?></h3>
		</div>
		<div class="col-sm-3">
				<h1 class="line-gray">Contact</h1>
				<p><a href="tel:+14169797380">+1 416 979 7380</a><br>
		  		<a href="mailto:info@ouatmedia.com">info@ouatmedia.com</a></p>
		</div>
		</div>
		<?php endwhile; ?>
		
	</div>

	<div class="page row container">
		<?php if (have_posts()) while (have_posts()) : the_post();?>
		<div class="col-sm-9 col-md-9 main">
				<h1 class="line-gray"><?php echo get_the_title(); ?></h1><div class="line-dash pad"> </div>
				<?php the_content(); ?>	
		</div>
		<div class="col-xs-6 col-sm-3">
	  		<?php include('sidebar.inc.php'); ?>
		</div>

		<?php endwhile; ?>
	</div>

	
	

<?php get_footer(); ?>