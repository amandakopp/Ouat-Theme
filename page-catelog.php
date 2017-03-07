<?php 
/**
Template Name: Catalogue
*/		
get_header(); ?>
	
		<div class="row container">
			<div class="line-colour"></div><h1><a href="/ouat/catalogue/">New Titles</a></h1>
		</div>
		
	<div class="new-titles row container ">
		<div class="line-dash pad"> </div>
		<?php 
		$catalogue_args = array('category_name' => 'catalogue', 'posts_per_page' => 16);
		$catalogue_query = new WP_Query($catalogue_args);
		$catalogue_list = $catalogue_query->get_posts();
		$cat_name = get_category(get_query_var('cat'))->name;
		?>
		
		<?php for($i=0; $i<sizeof($catalogue_list); $i++): ?>
			<?php $post = $catalogue_list[$i]; ?>
			<?php if($i % 4 == 0): ?>
				<div class="row">
			<?php endif;?>
			
			<div class="col-xs-12 col-sm-6 col-md-3 main">
				<div class="post">
					<?php
						if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) ) {
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
							$img = $thumbnail[0];
						}	
					?>	
					<a href="<?php the_permalink() ?>"><div class="image" style="background-image: url(<?php echo $img;?>);"></div></a>
					
				
					<h2 class="line-dash film-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
				</div> 
			</div>
			<?php if($i % 4 == 3 || ($i +1) == sizeof($catalogue_list)): ?>
				</div>
			<?php endif;?>
			
			<?php endfor; 
			wp_reset_postdata();wp_reset_query();?>

	</div>

	</div>
		
</div>
	



<?php get_footer(); ?>