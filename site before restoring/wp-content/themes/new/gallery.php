<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>
	<div data-stellar-background-ratio="0.3" class="page__bg page-services__bg"></div>
    <div class="wrapper-fluid">
      <h2>Gallery</h2>
    
<?php $the_query = new WP_Query('p=316'); ?>
<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata();?>
      </div>	
      <?php get_footer(); ?>