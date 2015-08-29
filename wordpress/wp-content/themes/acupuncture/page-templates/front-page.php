<?php
/**

 * Template Name: Front page

*/

get_header(); ?>

<div class="front-page">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
  <?php endwhile; ?>
  <div class="container">
    <div class="main">
      <div class="cont-blog1 cf">
        <?php 
	   $about_acupuncture_title = get_field('about_acupuncture_title');
       $what_we_do_title = get_field('what_we_do_title');
	   $contentleft = '';
	  
	   $shortdescription = get_field('what_we_do_description');
	
						$shortdesc  = (strip_tags($shortdescription));
						if( strlen(strip_tags($shortdescription)) > 580 )
						{
						$string =  wordwrap(strip_tags($shortdescription), 580); 
						$i = strpos($string, " ", 580);
						
						$contentleft = substr($string, 0, $i);
						}
						else{
							$contentleft = $shortdesc;
						}
						
						
	   $what_we_do_link = get_field('what_we_do_link');
	   
	   $what_to_expect_title = get_field('what_to_expect_title');
	  
	   $what_to_expect_link = get_field('what_to_expect_link');
	   $contentright = '';
	                   $shortdescriptionright = get_field('what_to_expect_description');
	
						$shortdescright  = (strip_tags($shortdescriptionright));
						if( strlen(strip_tags($shortdescriptionright)) > 580 )
						{
						$string =  wordwrap(strip_tags($shortdescriptionright), 580); 
						$i = strpos($string, " ", 580);
						
						$contentleft = substr($string, 0, $i);
						}
						else{
							$contentleft = $shortdescright;
						}
       ?>
        <h2><?php echo $about_acupuncture_title; ?></h2>
        <ul class="about-details">
          <li>
            <h3><?php echo $what_we_do_title; ?></h3>
            <p><?php echo $contentleft; ?></p> <a href="<?php echo $what_we_do_link; ?>" title="LEARN MORE" class="learn-more-btn">LEARN MORE</a> </li>
          <li>
            <h3><?php echo $what_to_expect_title; ?></h3>
            <p><?php echo $contentleft; ?></p> <a href="<?php echo $what_to_expect_link; ?>" title="LEARN MORE" class="learn-more-btn">LEARN MORE</a> </li>
        </ul>
      </div>
    </div>
    <div class="cont-blog2 light-pink-bg cf">
      <?php 
      
	   $why_acupuncture_title = get_field('why_acupuncture_title');
	   $why_acupuncture_description = get_field('why_acupuncture_description', false, false); 
	   $back_img_style ='';
	   $background_image = get_field('why_acupuncture_background_image');
                if($background_image)

					{

						$back_img_style = 'background-image:url('.$background_image['url'].');';

					}
       ?>
      <div class="main">
       
         <?php echo '<div class="why-acptr-details" style="'.$back_img_style.'">';?>
          <div class="why-acptr-text">
            <h2><?php echo $why_acupuncture_title; ?></h2>
            <?php echo $why_acupuncture_description; ?> </div>
        </div>
        <?php 
       $step_heading = get_field('step_heading');
	   $steps_to_healing_block = get_field('steps_to_healing_block');
	 
       ?>
        <div class="healing-accordion cf">
          <h3><?php echo $step_heading; ?></h3>
          <?php if($steps_to_healing_block) { ?>
          <ul id="top-accordian" class="accordion">
            <?php 
					   $i = 1;
					  foreach( $steps_to_healing_block as $row ) {?>
            <li  class="title"><a href="#"  class="accordion-title"><em><?php echo '0'.$i; ?></em><?php echo $row['step_heading_title']; ?><span></span></a>
              <div class="accordian-text accordion-content cf"><?php echo $row['step_heading_description']; ?><a href="<?php echo $row['step_heading_link']; ?>" title="LEARN MORE" class="learn-more-btn">LEARN MORE</a></div>
            </li>
            <?php $i++;	  
					  }
	                ?>
          </ul>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="cont-blog3 cf">
        <?php 
		   $what_people_are_saying = get_field('what_people_are_saying'); 
		   echo $what_people_are_saying;
       ?>
        <?php //echo do_shortcode('[sc_Testiminial]'); ?>
      </div>
    </div>
    <div class="cont-blog4 light-pink-bg cf">
     <?php 
	   $acupuncture_practitioner_title = get_field('acupuncture_practitioner_title');
       $profile_image = get_field('acupuncture_practitioner_profile_image');
	   $acupuncture_practitioner_name = get_field('acupuncture_practitioner_name');
	   $acupuncture_practitioner_information = get_field('acupuncture_practitioner_information');
	   
	   $acupuncture_practitioner_description = get_field('acupuncture_practitioner_description');
	   $acupuncture_practitioner_link = get_field('acupuncture_practitioner_link');
	 
       ?>
      <div class="main">
        <h2><?php echo $acupuncture_practitioner_title; ?></h2>
        <div class="practitioner two-column cf">
        <div class="col practitioner-img-wrapper ">
          <div class="practitioner-img">
          <?php if ($profile_image) { ?>
           <img src="<?php echo $profile_image['url'] ?>" alt="<?php echo $profile_image['alt'] ?>" title="<?php echo $profile_image['title'] ?>">
           <?php } ?>
            </div></div>
          <div class="col practitioner-details-wrapper">
          <div class="practitioner-details">
            
           <?php echo $acupuncture_practitioner_description; ?>
             </div></div>
        </div>
      </div>
    </div>
    <div class="main">
     <?php 
       $healing_today = get_field('start_your_healing_today');
	
       ?>
          <div class="cont-blog5">
           <?php echo $healing_today; ?>
           
          </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
