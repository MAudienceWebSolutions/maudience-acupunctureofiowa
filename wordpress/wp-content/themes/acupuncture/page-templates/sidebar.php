<?php
/**
 * Template Name: sidebar Template
 */
get_header(); ?>
<div id="primary" class="content-area">
 
   <div class="entry-content inner-page">
      <div class="main cf">
		<?php while ( have_posts() ) : the_post(); ?>  
        <h2><?php the_title(); ?></h2>
       <div class="inner-content cf">
       <div class="about-left-details cf">
			<?php the_content(); ?>
            </div>
            <div class="side-bar-content cf">
            <?php get_sidebar(); ?>
            </div>
        </div>
        <?php endwhile; ?> 
    </div>
   
  <!-- #post --> 
 </div>
 <!-- #content --> 
</div>




<?php get_footer(); ?>
