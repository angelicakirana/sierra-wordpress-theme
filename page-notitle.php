<?php 
	
	/*
		Template Name: No Title
	*/
	
	get_header(); ?>
	
	<div class="row">
<div class="col-xs-12 col-sm-8">

<?php if( have_posts() ):
	
	while( have_posts() ): the_post(); ?>
	<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	<p><?php the_content(); ?></p>
<?php endwhile;
endif;
	?>
	
	</div>
<div class="col-xs-12 col-sm-4">
	<?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>