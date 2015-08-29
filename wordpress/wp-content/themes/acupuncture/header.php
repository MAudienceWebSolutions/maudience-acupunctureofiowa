<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
     <?php $favicon_icon = get_field('favicon_icon', 'option'); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_icon['url']; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
     <link href='<?php echo get_template_directory_uri(); ?>/css/responsive.css' rel='stylesheet' type='text/css'>
     <link href='<?php echo get_template_directory_uri(); ?>/css/easy-responsive-tabs.css' rel='stylesheet' type='text/css'>
     <link href='<?php echo get_template_directory_uri(); ?>/css/jquery.bxslider.css' rel='stylesheet' type='text/css'>
   
   
   
</head>

<body <?php body_class(); ?>>
<!--<div class="loader">

</div>-->
	<div id="page" class="hfeed site">
		<header id="masthead">
       <!-- #headersection --> 
       <div class="main cf">
          <div class="top-header cf">
            
                   <div class="logo">
                    <?php $logo = get_field('logo', 'option'); ?>
                     <?php if($logo){?>
                        <a  href="<?php echo esc_url(home_url('/')); ?>" title="Acupuncture">
                         <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="Acupuncture"/>
                        </a>
						<?php } ?>
                    </div>
               
               <div class="contact-us">
					 <?php $phone_number = get_field('phone_number', 'option');
                           $appointment_link = get_field('request_an_appointment_link', 'option');
                     ?>
                     <div class="contact-num">
                      <label>P:</label> <a href="tel:(555)555555" title="Call-Us"><?php echo $phone_number; ?></a>
                      </div>
                      <a href="<?php echo $appointment_link; ?>" title="REQUEST AN APPOINTMENT">REQUEST AN APPOINTMENT</a>
                      
                </div>
            
         </div>
         </div>
          <!-- #Menusection -->
			<div id="navbar" class="navbar cf">
            <div class="main">
				<nav id="site-navigation" class="navigation main-navigation">
					<!--<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>-->
					<!--<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>-->
					<div class="menu-block">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu enumenu_ul', 'menu_id' => 'primary-menu' ) ); ?>
                    </div>
					<?php //get_search_form(); ?>
				</nav><!-- #site-navigation -->
                </div>
			</div><!-- #navbar -->
		</header><!-- #masthead -->
         <?php if(is_front_page()) { ?>
                <?php echo do_shortcode('[sc_Banner]'); ?>
                <?php } else { ?>
                 
					  <?php  if(has_post_thumbnail()){ 
                                $banner_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');
                              }
                       
                        else
                        {    $image_id = get_field('banner_image','option');
                             $size = "full";
                             $banner_image_url = wp_get_attachment_image_src( $image_id, $size );
                            
                        }?>
                         <div class="inner_banner" style="background-image:url('<?php echo $banner_image_url[0]; ?>');">
                         </div>
                <?php } ?>
        
       

		<div id="main" class="site-main">
