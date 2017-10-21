<?php get_header(); ?>
<main class="main-page">
  <div data-stellar-background-ratio="0.3" class="slide">
    <div class="slide__wrap">
      <div class="slide__border-box draw">
        <div class="slide__content">
          <h1 class="slide__title"><?php bloginfo('name'); wp_title(); ?></h1>
          <?php $the_query = new WP_Query('p=83'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
            <?php the_content(); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
          <button class="btn-learn-more slide__btn-learn-more button">Learn More</button>
        </div>
      </div>
    </div>
  </div>
  <section class="about-us wow fadeIn"  data-wow-duration="1.5s" >
    <div class="wrapper-fluid">
      <h2><?php echo get_cat_name(9);?></h2>
      <div class="row js-class row-md">
        <div class="about-us__clinic col-12 col-lg-6">              
          <?php $the_query = new WP_Query('p=85'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
            <?php the_content(); ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?></div>
          <div class="about-us__doctor col-12 col-lg-6">
            <div class="row align-items-center">
              <?php $the_query = new WP_Query('p=87'); ?>
              <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-6 doctor__photo"><?php the_post_thumbnail(); ?></div>
                <div class="col-6">
                  <a href="#" class="doctor__name marked-text"><?php the_title(); ?></a><br>
                  <span class="doctor__title"><?php echo get_post_meta( $post->ID, 'doctor_degree', true ); ?></span>
                  <div class="doctor__phones">
                    <i aria-hidden="true" class="fa fa-phone"></i><a href="tel:<?php echo get_option('my_phone_1'); ?>"><?php echo get_option('my_phone_1'); ?> </a><br>
                    <i aria-hidden="true" class="fa fa-mobile"></i><a href="tel:<?php echo get_option('my_phone_2'); ?>"><?php echo get_option('my_phone_2'); ?> </a>
                  </div>
                  <div class="doctor__text-block--PC">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
              <div class="row doctor__text-wrap">
                <div class="col-12">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
        </div>
      </div>
    </section>
    <section class="benefits">
      <div class="wrapper-fluid">
        <h2><?php echo get_cat_name(10);?></h2>
      </div>
      <div class="wrap">
        <div class="benefits__content-1 row no-gutters justify-content-between">
          <?php $the_query = new WP_Query('p=90'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div data-wow-duration="1.5s" class="benefits__item col-12 col-md-6 wow fadeIn">
              <div class="benefits__header row align-items-center">
                <div class="benefits__icon benefits__icon-1"></div>
                <div class="benefits__title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
              <div class="benefits__text">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>

          <?php $the_query = new WP_Query('p=92'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div data-wow-duration="1.5s" class="benefits__item col-12 col-md-6 wow fadeIn">
              <div class="benefits__header row align-items-center">
                <div class="benefits__icon benefits__icon-2"></div>
                <div class="benefits__title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
              <div class="benefits__text">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
        </div>
        <div class="benefits__content-2 row no-gutters justify-content-between">
          <?php $the_query = new WP_Query('p=94'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div data-wow-duration="1.5s" class="benefits__item col-12 col-md-6 wow fadeIn">
              <div class="benefits__header row align-items-center">
                <div class="benefits__icon benefits__icon-3"></div>
                <div class="benefits__title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
              <div class="benefits__text">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
          <?php $the_query = new WP_Query('p=96'); ?>
          <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div data-wow-duration="1.5s" class="benefits__item col-12 col-md-6 wow fadeIn">
              <div class="benefits__header row align-items-center">
                <div class="benefits__icon benefits__icon-4"></div>
                <div class="benefits__title">
                  <h3><?php the_title(); ?></h3>
                </div>
              </div>
              <div class="benefits__text">
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata();?>
        </div>
      </div>
    </section>
    <section class="services">
      <div class="wrapper-fluid">
        <h2><?php echo get_cat_name(11);?></h2>
      </div>
      <div class="services__bg">
        <div data-stellar-background-ratio="0.6" class="wrap services__img">
          <div class="services__content">
            <div class="services__text">
              <?php $the_query = new WP_Query('p=98'); ?>
              <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
              <?php wp_reset_postdata();?>
              <button class="button btn-learn-more btn-learn-more--grey services__btn-learn-more"><a class="link" href=" <?php echo get_page_link( 17 ); ?>"> learn more</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--   <section class="gallery">
  <div class="wrapper-fluid">
    <h2>Latest photos</h2>

<?php $the_query = new WP_Query('p=420'); ?>
<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>  
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata();?>

    <div class="wrapper-fluid">
<div class="row blog__button justify-content-center">
  <button class="btn-learn-more slide__btn-learn-more button">See More</button>
</div>
    </div>
</section> -->
    <section class="testimonials">
      <div class="wrapper-fluid">
        <h2><?php echo get_cat_name(12);?></h2>
      </div>
      <div class="testimonials__bg"></div>
      <div data-stellar-background-ratio="0.6" class="testimonials__bg--PC"></div>
      <div class="testimonials__row wrapper-fluid">
        <div class="testimonials__wrap">
          <div id="arrow_left" class="testimonials__arrow"><i aria-hidden="true" class="fa fa-chevron-circle-left"></i></div>
          <?php if ( have_posts() ) : query_posts('cat=12&nopaging=1');
          while (have_posts()) : the_post(); ?>
          <div class="testimonials__item">
           <div class="testimonials__text"><?php the_content(); ?></div>
           <p class="testimonials__patient"><?php the_title(); ?></p>
         </div>
       <?php endwhile; endif; wp_reset_query();?>  

       <div id="arrow_right" class="testimonials__arrow"><i aria-hidden="true" class="fa fa-chevron-circle-right"></i></div>
     </div>
   </div>
 </section>
 <section class="blog" >
  <div class="wrapper-fluid">
    <h2>latest posts</h2>
    <div class="row blog__row">
      <?php if ( have_posts() ) : query_posts(array('cat' => 13, 'showposts' => 3));
      while (have_posts()) : the_post(); ?>
      <a href="">
        <div class="col-md-4 blog__item wow fadeIn"  data-wow-duration="1.5s">
         <?php the_post_thumbnail('custom-size'); ?>
         <div class="blog-item__info"> 
          <?php the_time('d.m.Y'); ?>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt('new_excerpt_length', 30); ?>
      </a>
    </div>
  <?php endwhile; endif; wp_reset_query();?>  
</div>
<div class="row blog__button justify-content-center">
  <button class="btn-learn-more slide__btn-learn-more button development">Read More</button>
</div>
</div>
</section>
 <section class="video" >
  <div class="wrapper-fluid">
    <h2>latest videos</h2>
    </div>
    <?php echo do_shortcode("[huge_it_video_player id='2']"); ?>
  </section>
<section class="banner">
  <div class="wrapper-fluid">
  <?php $the_query = new WP_Query('p=167'); ?>
    <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
     <div  class="banner__title"> 
      <h3><?php the_title(); ?></h3>
    </div>  
    <div class="banner__text">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata();?>
  <button data-wow-duration="1.5s" data-wow-delay="0.5s" class="button btn-learn-more btn-learn-more--grey wow fadeInUp" data-toggle="modal" data-target="#exampleModal">book an appointment</button>
</div>
</section>
      <!-- <section class="slide container-fluid">
        <div class="slide__content">
          <h1 class="slide__title">Bourne Osteopath Clinic</h1>
          <div class="slide__motto">Qualitive healthcare without the wait!</div>
          <div class="slide__subtitle"> Musculoskeletal disorders treatment without the use of drugs or surgery.</div>
          <h3 class="slide__subtitle--TAB">Diagnosis, management, treatment and prevention of musculoskeletal and other related disorders without the use of drugs or surgery.</h3>
          <p class="slide__text">In Bourne, all treatments are in a medical centre, providing the perfect safe, caring environment, giving necessary peace of mind to you, the patient.</p>
          <button class="btn-learn-more slide__btn-learn-more button development">Learn More</button>
        </div>
      </section>
      <section class="about-us">
        <div class="container">
          <h2>about us</h2>
        </div>
        <div data-wow-duration="2s" class="about-us__content container-fluid wow fadeInUp">
          <div class="row">
            <div class="about-us__clinic col-12 col-md-6"><span>All consultations at The Bourne Osteopath Clinic focus on the diagnosis, management, treatment and prevention of musculoskeletal and other related disorders </span><span class="marked-text">without the use of drugs or surgery.</span><br><span>In Bourne, all treatments are in a medical centre, providing </span><span class="marked-text">the perfect safe, caring environment, </span><span>giving necessary peace of mind to you, the patient. Treatments are available Monday to Saturday with free parking. </span><br><span>The clinic is open to everyone.</span>
            </div>
            <div class="about-us__doctor col-12 col-md-6">
              <div class="row align-items-center">
                <div class="col-6 doctor__photo"><img src="<?php bloginfo('template_url') ?>/img/jo.jpg"></div>
                <div class="col-6"><a href="#" class="doctor__name marked-text">Mr Jo Sunner</a><br><span class="doctor__title">BSc(ost.) DO. MMSM. Registered Osteopath</span>
                  <div class="doctor__phones"><i aria-hidden="true" class="fa fa-phone"></i><a href="tel:01778-426000">01778 426000 </a><br><i aria-hidden="true" class="fa fa-mobile"></i><a href="tel:01778-426000">01778 426000 </a></div>
                  <div class="doctor__text-block--PC">
                    <p class="doctor__text">Mr. Jo Sunner is the principle at Bourne Osteopath Clinic. He also consults at the Fitzwilliam Hospital in Peterborough, working with orthopedic consultants, pain management consultants and consultant rheumatologists. </p>
                  </div>
                </div>
              </div>
              <div class="row doctor__text-wrap">
                <div class="col-12">
                  <p class="doctor__text">Mr. Jo Sunner is the principle at Bourne Osteopath Clinic. He also consults at the Fitzwilliam Hospital in Peterborough, working with orthopedic consultants, pain management consultants and consultant rheumatologists. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits">
        <div class="container">
          <h2>our benefits</h2>
        </div>
        <div class="bene">
          <div class="benefits__wrap">
            <div class="benefits__content-1 row no-gutters justify-content-between">
              <div data-wow-duration="1.5s" class="benefits__item col-12 col-md-6 wow fadeIn">
                <div class="benefits__header row align-items-center">
                  <div class="benefits__icon benefits__icon-1"></div>
                  <div class="benefits__title">
                    <h3>Since 1993</h3>
                  </div>
                </div>
                <div class="benefits__text">
                  <p>Bourne Osteopath Clinic is the longest established clinic in the area</p>
                </div>
              </div>
              <div data-wow-duration="1.5s" data-wow-delay="1s" class="benefits__item col-12 col-md-6 wow fadeIn">
                <div class="benefits__header row align-items-center">
                  <div class="benefits__icon benefits__icon-2"></div>
                  <div class="benefits__title">
                    <h3>Expert Advice</h3>
                  </div>
                </div>
                <div class="benefits__text">
                  <p>Our Osteopaths are experts in their field and they provide effective approaches to a wide range of musculoskeletal conditions </p>
                </div>
              </div>
            </div>
            <div class="benefits__content-2 row no-gutters justify-content-between">
              <div data-wow-duration="1.5s" data-wow-delay="2s" class="benefits__item col-12 col-md-6 wow fadeIn">
                <div class="benefits__header row align-items-center">
                  <div class="benefits__icon benefits__icon-3"></div>
                  <div class="benefits__title">
                    <h3>Award Winning</h3>
                  </div>
                </div>
                <div class="benefits__text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta repellat libero, excepturi at eveniet praesentium.</p>
                </div>
              </div>
              <div data-wow-duration="1.5s" data-wow-delay="3s" class="benefits__item col-12 col-md-6 wow fadeIn">
                <div class="benefits__header row align-items-center">
                  <div class="benefits__icon benefits__icon-4"></div>
                  <div class="benefits__title">
                    <h3>5-star service</h3>
                  </div>
                </div>
                <div class="benefits__text">
                  <p>Bourne Osteopath Clinic was rated 5 stars by our patience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="services__main-page">
        <div class="container">
          <h2>our services</h2>
        </div>
        <h4 class="bh">Musculoskeletal disorders that may cause:</h4>
        <div class="row no-gutters services-row__services__main-page">
          <div class="services-block__services__main-page">
            <div class="services-list__services__main-page">
              <ul>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Migraine Headache Treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>injury rehabilitation</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>pain relief therapy</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>shoulder pain treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>sciatica treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>trapped nerves treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>arthritic pain treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>muscle pain treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>repetitive strain injury treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>joint pain treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Foot Pain</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>back treatment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Pins & Needles in Fingers & Legs</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Stiff Neck & Shoulders</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Muscle Spasms</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Pain Managment</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Painfull knee</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Pain on coughing or sneezing</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Painful Coccyx (Tail bone)</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Arthritic Pain</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>Pain when sitting or standing</span></li>
                <li class="services-item"><i aria-hidden="true" class="fa fa-check"> </i><span>sports injury clinics</span></li>
                <button class="button btn-learn-more btn-learn-more--grey services__btn-learn-more">learn more</button>
              </ul>
            </div>
          </div>
          <div class="image__services__main-page align-self-center"></div>
        </div>
      </section>
      <section class="news__main-page">
        <div class="container">
          <h2>news and events</h2>
        </div>
        <div class="news__wrap">
          <div class="news__row row">
            <div class="news__item col-12 col-md-4">
              <div class="news__date">
                <p>March 17, 2017</p>
              </div>
              <div class="news__header">
                <h4> Lorem ipsum dolor sit amet</h4>
              </div>
              <div class="news__photo"><img src="<?php bloginfo('template_url') ?>/../img/post1.jpg"></div>
              <div class="news__short-text">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorem, placeat sunt, similique iure perspiciatis iste rem nihil impedit eveniet libero nobis fuga nisi animi!  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque sint eveniet fuga esse dolorum ab.</p>
              </div>
              <div class="news__button">
                <button class="button btn-learn-more">learn more</button>
              </div>
            </div>
            <div class="news__item col-12 col-md-4">
              <div class="news__date">
                <p>March 17, 2017</p>
              </div>
              <div class="news__header">
                <h4> Lorem ipsum dolor sit amet  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, sequi.  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, temporibus.</h4>
              </div>
              <div class="news__photo"><img src="<?php bloginfo('template_url') ?>/../img/jo.jpg"></div>
              <div class="news__short-text">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorem, placeat sunt, similique iure perspiciatis iste rem nihil impedit eveniet libero nobis fuga nisi animi!</p>
              </div>
              <div class="news__button">
                <button class="button btn-learn-more">learn more</button>
              </div>
            </div>
            <div class="news__item col-12 col-md-4">
              <div class="news__date">
                <p>March 17, 2017</p>
              </div>
              <div class="news__header">
                <h4> Lorem ipsum dolor sit amet</h4>
              </div>
              <div class="news__photo"><img src="<?php bloginfo('template_url') ?>/../img/doctor-points-to-model-spine.jpg"></div>
              <div class="news__short-text">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolorem, placeat sunt, similique iure perspiciatis iste rem nihil impedit eveniet libero nobis fuga nisi animi!</p>
              </div>
              <div class="news__button">
                <button class="button btn-learn-more">learn more</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonialas">
        <div class="row no-gutters">
          <div data-wow-duration="2s" class="ko wow fadeInUp">
            <div class="text">
              <h2>patients say</h2><i aria-hidden="true" class="fa fa-quote-left  fa-pull-left"> </i>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga odit, voluptatum est pariatur ab iure laborum nisi. Similique pariatur, illum unde ipsum sunt fugiat repudiandae.</p><i aria-hidden="true" class="fa fa-quote-right fa-pull-right"> </i>
              <p class="pt">R Blake, patient</p>
            </div>
          </div>
        </div>
      </section>
      <section class="banner">
        <p data-wow-duration="2s" class="banner-title wow fadeIn">Do you want to Get a free consultation?</p>
        <p class="text-banner">We are always ready to welcome you in our clinic!</p>
        <button data-wow-duration="1.5s" data-wow-delay="1s" class="banner-button development wow fadeInUp"> Book an appointment</button>
      </section> -->
    </main>
    <?php get_footer(); ?>