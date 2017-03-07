<?php 
	
get_header(); ?>

	<div class="single row container">
		<?php if (have_posts()) while (have_posts()) : the_post();?>
		<div class="col-sm-9 col-md-9 main">
			<div class="line-colour"></div><h1><?php 
			$cat = get_the_category(); 
			$cat = $cat[0]; 
			echo $cat->cat_name; 
			?></h1>
	<div class="line-dash pad"> </div>
			<div class="row">
				<div class="col-md-4">
					<?php
						if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) ) {
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
							$img = $thumbnail[0];
						}	
					?>	
					<div class="image" style="background-image: url(<?php echo $img;?>);"></div>
				</div>
				<div class="col-md-8 container">
					<h1 style="margin-top:0;"><?php echo the_title(); ?></h1>
					<h2 class="pad"><?php the_field('subheading'); ?></h2>
					<?php the_content(); ?>
					<?php $itunes_link  = get_field( "itunes");
					if($itunes_link != ""){ ?>
					
					<a href="<?php echo $itunes_link;?>" style="margin-top:10px;display:inline-block;overflow:hidden;background:url(http://linkmaker.itunes.apple.com/images/badges/en-us/badge_itunes-lrg.svg) no-repeat;width:165px;height:40px;"></a> <?php }?>
				</div>
			</div>
			<?php $trailer_link  = get_field( "trailer");
				if($trailer_link != ""){ ?>
			<div class="trailer row">
				<h1 class="line-gray">Trailer</h1>
				<div class="line-dash pad"></div>
				<div class="videoWrapper"><iframe src="<?php the_field('trailer'); ?>" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
			</div>
			<?php } ?>
		</div>
		<div class="col-sm-3">
				<h2 class="line-gray">Contact</h2>
				<p><a href="tel:+14169797380">+1 416 979 7380</a><br>
		  		<a href="mailto:info@ouatmedia.com">info@ouatmedia.com</a></p>

	  		<?php //include('sidebar.inc.php'); ?>

		</div>

		<?php endwhile; ?>
	</div>



<?php get_footer(); ?>