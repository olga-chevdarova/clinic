<?php /* Template Name: Testimonials */ ?>
<?php get_header(); ?>
<div data-stellar-background-ratio="0.3" class="page__bg page-services__bg"></div>
<!--       <div class="wrap">
      	      <div class="celeb">
      	<div class="row no-gutters">
      		      		<div class="col-6 hjkjkjh">
      			<p class="fhgfhg">Celebrity patients</p>
      		</div>
      		<div class="col-6">
      			
      		</div>

      	</div>
      </div>
  	<img src="<?php bloginfo('template_url') ?>/img/gallery25.jpg" alt="">

  </div> -->
  <div class="row">
  	<div class="col-xl-8">
  		<?php echo do_shortcode('[testimonial_view id=1]'); ?>
  	</div>
  	<div class="col-xl-4 testimonials__form">
  		<p class="testimonials-form__header">Do you want to provide a testimonial?</p>
  		<?php echo do_shortcode('[testimonial_view id=2]'); ?>
  	</div>
  </div>
  <?php get_footer(); ?>