<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Business Card WP Theme">
    <meta name="author" content="Fan Huang">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container-fluid" id="headerSection">
      <div class="row" id="businessCard">
        <div class="col-xs-12 col-md-6" id="cardDescription">
          <div id="site_logo">

            <?php if ( get_theme_mod( 'site_logo' ) ) : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php echo wp_get_attachment_image( get_theme_mod( 'site_logo'), 'full' ); ?></a>
              <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
            <?php else : ?>
              <hgroup>
                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
              </hgroup>
            <?php endif; ?>

            <hr>
          </div>
          <div class="cardInfo" id="phone">
            <?php if( get_theme_mod( 'phone_display', 'show' ) == 'show' ) : ?>
              <i class="fas fa-phone"></i>

                <p><?php echo show_phone() ?></p>

            <?php endif; ?>
          </div>
          <div class="cardInfo" id="email">

            <?php if( get_theme_mod( 'email_display', 'show' ) == 'show' ) : ?>
              <i class="fas fa-envelope"></i>
              <p><a href="mailto:<?php echo sanitize_email(get_theme_mod('email')) ?>  "> <?php echo sanitize_email(get_theme_mod('email')) ?> </a></p>
            <?php endif; ?>

          </div>
          <div class="cardInfo" id="socialBar">
            <a href='<?php echo get_theme_mod('facebook') ?>' target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href='<?php echo get_theme_mod('twitter') ?>' target="_blank"><i class="fab fa-twitter-square"></i></a>
            <a href='<?php echo get_theme_mod('instagram') ?>' target="_blank"><i class="fab fa-instagram"></i></a>
            <a href='<?php echo get_theme_mod('linkedin') ?>' target="_blank"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
        <div class="col-xs-12 col-md-6">

          <?php if ( get_theme_mod( 'profile_image' ) ) : ?>
            <img class="img-fluid" id="profile_image" src='<?php echo esc_url( get_theme_mod( 'profile_image' ) ); ?>' alt='profile'>
          <?php endif; ?>

          

        </div>
      </div>
    </div>
