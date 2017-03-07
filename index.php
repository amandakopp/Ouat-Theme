<?php 
/**
Template Name: Home
*/		

get_header(); ?>

	<div class="hero-main row">
		<div class="container">
			<div class="col-sm-9">
				<div class="line-colour"></div><h3 class="pad"> An Academy Award® Winning Film Sales<br> and Distribution Company</h3>
			</div>
			<div class="col-sm-3">
				<h1 class="line-gray">Contact</h1><div class="line-dash pad"> </div>
				<p><a href="tel:+14169797380">+1 416 979 7380</a><br>
		  		<a href="mailto:info@ouatmedia.com">info@ouatmedia.com</a></p>
			</div>
		</div>
	</div>

<div class="row container">
        <div class="col-md-9 main">
        <h1 class="line-gray"><a href="/ouat/news/">News</a></h1>
			
			<?php 
			$news_args = array('category_name' => 'news');
			$news_query = new WP_Query($news_args); ?>
			<?php if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
			
			<div class="row line-dash">
				<div class="col-sm-4 main">
					<?php
						if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) ) {
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
							$img = $thumbnail[0];
						}	
					?>
					<div class="image-news" style="background-image: url(<?php echo $img; ?>)"></div>
				</div>
				
				<div class="col-sm-8 main">
					<h1><?php the_title(); ?></a></h1>
					<h2><?php the_content(); ?></h2><br>
					
					<?php $film_link  = get_post_meta(get_the_ID(), 'aboutfilm', true);
					if($film_link != ""){ ?>
					<a class="btn btn-default" href="<?php echo $film_link; ?>">MORE ABOUT THE FILM</a>	
				<?php } ?>
				
				</div> 
				
			</div>
			
			 <?php endwhile; 
			 wp_reset_postdata();wp_reset_query();?>
			 <?php endif; ?>
				<a class="btn btn-default" href="/ouat/news/" style="display: block; width: 100%;">MORE NEWS</a>
		</div>
			 
        <div class="col-md-3">
	        <?php include('sidebar.inc.php'); ?>
        </div>
</div>
	
		<div class="row container">
			<h1 class="line-gray"><a href="/ouat/catalogue/">New Titles</a></h1>
		</div>
		
	<div class="new-titles row container ">
		<div class="line-dash pad"> </div>
		<?php 
		$catalogue_args = array('category_name' => 'catalogue', 'posts_per_page' => 8);
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
			
			<a class="btn btn-default" href="/ouat/catalog/" style="display: block; width: 100%;">VIEW CATALOGUE</a>
			</div>

		</div>
		
	</div>



<?php get_footer(); ?>