<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="entry-content inner-page">

 <div class="main cf">
 <h2><?php the_title(); ?></h2>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
          <div class="about-left-details blog-left cf">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>
           </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<div class="blog-right side-bar-content cf">
<?php get_sidebar( 'main' ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>