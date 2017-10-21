<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bourne Osteopath Clinic</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>.preloader__wrap{position:fixed;z-index:10000;overflow:hidden;width:100%;height:100%;background:-webkit-linear-gradient(left,#199ed8,#07638a);background:-webkit-gradient(linear,left top,right top,from(#199ed8),to(#07638a));background:-o-linear-gradient(left,#199ed8,#07638a);background:linear-gradient(90deg,#199ed8,#07638a);-webkit-box-shadow:inset 0 0 90px rgba(0,0,0,.5);box-shadow:inset 0 0 90px rgba(0,0,0,.5)}.preloader{position:absolute;top:0;right:0;bottom:0;left:0;width:8em;height:13em;margin:auto;border-radius:100%}.preloader__circle{position:absolute;width:100%;height:100%}.preloader__circle .inner{width:100%;height:100%;border:.5em solid rgba(0,216,255,.7);border-top:none;border-right:none;border-radius:100%;-webkit-box-shadow:inset 0 0 10px rgba(0,216,255,.15);box-shadow:inset 0 0 10px rgba(0,216,255,.15);background-clip:padding}@-webkit-keyframes spin{from{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-o-keyframes spin{from{-webkit-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin{from{-webkit-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);transform:rotate(360deg)}}.preloader__circle:nth-of-type(0){-webkit-transform:rotate(0);-ms-transform:rotate(0);-o-transform:rotate(0);transform:rotate(0)}.preloader__circle:nth-of-type(0) .inner{-webkit-animation:spin 5s infinite linear;-o-animation:spin 5s infinite linear;animation:spin 5s infinite linear}.preloader__circle:nth-of-type(1){-webkit-transform:rotate(70deg);-ms-transform:rotate(70deg);-o-transform:rotate(70deg);transform:rotate(70deg)}.preloader__circle:nth-of-type(1) .inner{-webkit-animation:spin 5s infinite linear;-o-animation:spin 5s infinite linear;animation:spin 5s infinite linear}.preloader__circle:nth-of-type(2){-webkit-transform:rotate(140deg);-ms-transform:rotate(140deg);-o-transform:rotate(140deg);transform:rotate(140deg)}.preloader,.preloader__circle:nth-of-type(2) .inner{-webkit-animation:spin 5s infinite linear;-o-animation:spin 5s infinite linear;animation:spin 5s infinite linear}</style>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<!--     <script src="<?php bloginfo('template_url') ?>/js/modernizr.custom.js"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans:300,400,600" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"> -->
<!--     <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"> -->
<!--     <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.min.css">
  <script src="<?php bloginfo('template_url') ?>/js/modernizr.custom.js"></script> -->
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="preloader__wrap" id="preloader">
    <div class='preloader'>
      <div class='preloader__circle'>
        <div class='inner'></div>
      </div>
      <div class='preloader__circle'>
        <div class='inner'></div>
      </div>
      <div class='preloader__circle'>
        <div class='inner'></div>
      </div>
      <div class='preloader__circle'>
        <div class='inner'></div>
      </div>
      <div class='preloader__circle'>
        <div class='inner'></div>
      </div>
    </div>
  </div>
  <header class="header">
    <div class="header__nav">
      <div class="mobile-nav__row">
        <div class="mobile-nav__content row">
          <div data-wow-offset="0" data-wow-duration="1s" class="mobile-nav__menu-button wow slideInLeft">
            <div role="button" class="hamburger-button"><span class="hamburger-item"></span><span class="hamburger-item"></span><span class="hamburger-item"></span></div>
          </div><img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="" class="svg--img mobile-nav__logo">
          <div data-wow-duration="1s" class="mobile-nav__contacts-button wow slideInRight">
            <div role="button" class="contacts-button"><span class="contacts-item"></span><span class="contacts-item"></span><span class="contacts-item"></span></div>
          </div>
        </div>
        <nav class="mobile-nav__menu">
          <?php wp_nav_menu( array(
           'theme_location'  => 'pc_menu',
           'menu'            => '',
           ) ); ?>
           <button class="button mobile-menu__button btn-appointment"  data-toggle="modal" data-target="#exampleModal">appointment request</button>
         </nav>
         <div class="mobile-nav__contacts">
          <div class="mobile-contacts__content">
            <div class="mobile-contacts__adress row">
              <div class="col-2"><i aria-hidden="true" class="fa fa-home fa-2x"></i></div>
              <div class="col-10"><span><?php echo get_option('my_address_1'); ?>, </span><span><?php echo get_option('my_address_2'); ?></span> <span><?php echo get_option('my_address_3'); ?></span></div>
            </div>
            <div class="mobile-contacts__hours row">
              <div class="col-2"><i aria-hidden="true" class="fa fa-clock-o fa-2x"></i></div>
              <div class="col-10">
                <div class="row no-gutters">
                  <div class="col-6"><span>Mon-Fri</span><br><span>Saturday</span><br><span>Sunday</span></div>
                  <div class="col-6"><span><?php echo get_option('my_hours_week'); ?></span><br><span><?php echo get_option('my_hours_sat'); ?></span><br><span>Closed</span></div>
                </div>
              </div>
            </div>
            <div class="mobile-contacts__phones row">
              <div class="col-2"><i aria-hidden="true" class="fa fa-phone fa-2x"></i></div>
              <div class="col-10">
                <div class="mobile-phones__item"><a href="tel:<?php echo get_option('my_phone_1'); ?>" class="link"><?php echo get_option('my_phone_1'); ?></a></div>
                <div class="mobile-phones__item"><a href="tel:<?php echo get_option('my_phone_2'); ?>" class="link"><?php echo get_option('my_phone_2'); ?></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="desktop-nav__wrap">
      <div class="desktop-nav__row row align-items-center justify-content-between row-OLD">
       <div class="desktop-nav__menu">
        <div class="row align-items-center ">
          <div class="dropdown menu-item--home dropdown-lnk">
            <a class="drodown-lnk-a" href="<?php echo get_home_url(); ?>">home</a>
          </div>
          <div class="dropdown dropdown-box__about dropdown-lnk">
            <a class="dropdown-toggle drodown-lnk-a" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              about clinic
            </a>
            <?php 
            wp_nav_menu( array(
              'theme_location'  => 'pc_menu',
              'menu'            => '', 
              'container'       => 'div', 
              'container_class' => 'dropdown-menu', 
            ) );
            ?>
          </div>
          <div class="dropdown dropdown-box__info dropdown-lnk">
            <a class="dropdown-toggle drodown-lnk-a" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              useful information
            </a>
            <?php 
            wp_nav_menu( array(
              'theme_location'  => 'pc_menu',
              'menu'            => '', 
              'container'       => 'div', 
              'container_class' => 'dropdown-menu', 
            ) );
            ?>
          </div>

          <div class="pc-nav__menu">
            <?php 
            wp_nav_menu( array(
              'theme_location'  => 'pc_menu',
              'menu'            => '', 
            ) );
            ?>
          </div> 
        </div>
      </div>

      <div class="info-panel__social info-panel__block">
       <div class="btn-group">
         <?php if ( have_posts() ) : query_posts('cat=2');
         while (have_posts()) : the_post(); ?>
         <a href="<?php echo get_post_meta( $post->ID, 'icon_url', true ); ?>" class="top-menu__item link" title="<?php the_title(); ?>">
           <i aria-hidden="true" class="fa top-menu__icon <?php echo get_post_meta( $post->ID, 'font_awesome', true ); ?>"></i>
         </a>
       <?php endwhile; endif; wp_reset_query();?>  
     </div>
   </div> 
   <div class="desktop-nav__button">
    <button  class="button btn-appointment"  data-toggle="modal" data-target="#exampleModal">appointment </button>
  </div>
</div>
</div>
</div>
<div class="header__info-panel">
  <div class="row align-items-center justify-content-between header-info-panel__content">
    <img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="" class="svg--img mobile-nav__logo">
    <div class="info-panel__address info-panel__block">
      <div class="row align-items-center">
        <div class="info-panel__icon ">
          <i class="fa fa-home" aria-hidden="true"></i>
        </div>
        <div class="info-panel__content">
          <span class=" bold"><?php echo get_option('my_address_1'); ?></span> <br>
           <span class=" bold"><?php echo get_option('my_address_2'); ?></span> <br>
            <span><?php echo get_option('my_address_3'); ?></span>
        </div>
      </div>  
    </div>
    <div class="info-panel__hours info-panel__block ">
      <div class="row align-items-center">
        <div class="info-panel__icon">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
        </div>
        <div class="info-panel__content">
         <div class="row">
          <div><span>Mon-Fri</span><br><span>Saturday</span><br><span>Sunday</span></div>
          <div  class="info-panel__hours-days"><span><?php echo get_option('my_hours_week'); ?></span><br><span><?php echo get_option('my_hours_sat'); ?></span><br><span>Closed</span></div>
        </div>
      </div>
    </div> 
  </div>
  <div class="info-panel__phones info-panel__block ">
   <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo get_option('my_phone_1'); ?>" class="link"><?php echo get_option('my_phone_1'); ?></a> <br>
   <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?php echo get_option('my_phone_2'); ?>" class="link"><?php echo get_option('my_phone_2'); ?></a>
 </div>
 <div class="info-panel__social info-panel__block">
   <div class="btn-group">
     <?php if ( have_posts() ) : query_posts('cat=2');
     while (have_posts()) : the_post(); ?>
     <a href="<?php echo get_post_meta( $post->ID, 'icon_url', true ); ?>" class="top-menu__item link" title="<?php the_title(); ?>">
       <i aria-hidden="true" class="fa top-menu__icon <?php echo get_post_meta( $post->ID, 'font_awesome', true ); ?>"></i>
     </a>
   <?php endwhile; endif; wp_reset_query();?>  
 </div>
</div> 
</div>
</div>
<div id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade">
  <div role="document" class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title">Appointment Form</h5>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body"><?php echo do_shortcode( '[ea_bootstrap default_date="+1d" width="800px" scroll_off="true" layout_cols="2"]'); ?></div>
    </div>
  </div>
</div>
<button id="button-top" class="button">
<i class="fa fa-angle-up" aria-hidden="true"></i>
</button>
</header>