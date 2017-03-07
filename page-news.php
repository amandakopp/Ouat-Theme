<?php 
/**
Template Name: News
*/		
get_header(); ?>


<div class="page row container">
        <div class="col-sm-9 col-md-9 main">
        <div class="line-colour"></div><h1><a href="/ouat/news/">News</a></h1>
			
			<?php 
			$news_args = array('category_name' => 'news');
			$news_query = new WP_Query($news_args); ?>
			<?php if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
			
			<div class="row line-dash">
				<div class="col-md-4 main">
					<?php
						if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) ) {
							$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
							$img = $thumbnail[0];
						}	
					?>
					<a href="<?php the_permalink() ?>"><div class="image-news" style="background-image: url(<?php echo $img; ?>)"></div></a>
					<?php  //the_post_thumbnail('thumbnail'); ?>
				</div>
				
				<div class="col-md-8 main">
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
		</div>
			 
        <div class="archives col-md-3">
	        <div id="container">
	<div id="content" role="main">

		<?php the_post(); ?>
		
		<h1 class="line-gray">Archives</h1><div class="line-dash pad"> </div>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=30'); ?>
		</ul>

	</div><!-- #content -->
</div><!-- #container -->
	        <?php //include('sidebar.inc.php'); ?>
        </div>
</div>



<?php get_footer(); ?>