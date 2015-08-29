<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
</div>
<!-- #main -->

<footer>
  <div class="footer">
    <div class="top-footer">
      <div class="main">
        <div class="footer-cotnt">
         <?php dynamic_sidebar( 'sidebar-3' ); ?>
                        
         <!-- <h4>Contact Us!</h4>
          <span>P: <a href="tel:319.341.0031" title="Call-Us">319.341.0031</a></span>
          <p><span>Acupuncture of Iowa</span> 2412 Towncrest Dr. Iowa City, IA 52240</p>-->
        </div>
        <div class="footer-cotnt">
         <?php dynamic_sidebar( 'sidebar-4' ); ?>
         <!-- <h3 class="widget-title">Follow Us!</h3>-->
          <?php //echo do_shortcode('[sc_social]'); ?>   
          <?php /*?><h4>Follow Us!</h4>
          <ul>
            <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/face-book.png" alt="facebook" title="facebook"></a> </li>
            <li> <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt="twitter" title="twitter"></a> </li>
          </ul><?php */?>
        </div>
      </div>
    </div>
    <div class="btm-footer">
     <?php $copyright = get_field('copyright', 'option');?>
      <p><?php echo $copyright; ?></p>
    </div>
  </div>
  <!-- .site-info --> 
</footer>
<!-- #colophon -->
</div>
<!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/easyResponsiveTabs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/general.js"></script>
<script>
$(document).ready(function() {
	$('.bxslider').bxSlider({
		mode: 'fade',
		pager:false,
		auto: true,		
		
	    speed: 1000
		
	});	
});
</script>


</body></html>