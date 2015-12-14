<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="entry-content inner-page">
 <div class="main cf">
 <header class="archive-header">
				<h2><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h2>

				<?php if ( category_description() ) : // Show an optional category description ?>
				<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
			</header><!-- .archive-header -->
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
       <div class="about-left-details blog-left cf">
		<?php if ( have_posts() ) : ?>
			
     
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
          </div>
		</div><!-- #content -->
	</div><!-- #primary -->

<div class="blog-right side-bar-content cf">
<?php get_sidebar( 'main' ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>
