<?php
/*
	Try to make naming convention of function and shortcode like
	function = fn_Abc_Xyz()
	Shortcode = sc_Abc_Xyz()
*/

/*------shortcode description ------*/
function fn_Button($option, $content)
{
	ob_start();
	global $post;
	$html = '';
	$html .= '<a href="'.$option['href'].'" class="appointment-btn" title="'.$content.'">'.$content.'</a>';
	echo $html;
	return ob_get_clean(); 
}
add_shortcode('sc_Button','fn_Button');


/* ----- Helpfullink shortcode ---- */

function fn_Banner()
{ 
	global $current_page;
	$page_id = get_the_ID();
	if( $current_page != '')
	{
		$page_id = $current_page;
	}
	$html = '';
	$html .= '<div class="home-page-slider">';
	$html .= '<ul id="slider" class="bxslider">';
			  
		$home_slider = get_field('home_slider', $page_id);
		$banner_description = get_field('banner_description', $page_id);
		
		
		$image_id = get_field('banner_image','option');
        $size = "full";
        $banner_image_url1 = wp_get_attachment_image_src( $image_id, $size );
		$back_img_style1 = 'background-image:url('.$banner_image_url1[0].');';
		
	if($home_slider){
		foreach($home_slider as $row){
		$back_img_style ='';
	
		$banner_image_url = $row['banner_image'];	
        //print_r($banner_image_url);
		
		
                   if($banner_image_url)

					{

						$back_img_style = 'background-image:url('.$banner_image_url['url'].');';

					}
					else
					{
						//$back_img_style = 'background-image:url('.$banner_image_url1[0].');';
					}
					
	
			
			
			$html .= '<li class="banner-image" style="'.$back_img_style.'">
			 
            </li>'; }}
		if(!get_field('home_slider')){	
			$html .= '<li class="banner-image" style="'.$back_img_style1.'">
			 
            </li>';
		}
	 $html .= '</ul>';			 
     $html .= '<div class="banner-caption"><div class="main">
						<div class="banner-text cf">
						'.$banner_description.'
					     </div>
					</div>';
	$html .= '</div></div>';
	return $html; 
}
add_shortcode('sc_Banner','fn_Banner');

/* ----- social link shortcode ---- */

function fn_social() {	
 
  $html = '';
    $html .= '<div class="facelinkin"><ul>';

    $rows = get_field('social_media', 'option');
	
    $i = 1;
	
    $row_count = count($rows);
	if($rows){
    foreach ($rows as $value) {
		 $logo ='';
         $brand_logo = $value['social_image'];
		 if($brand_logo){
			$logo ='<a class="sociallink" href="' . $value['social_link'] . '" target="_blank" title="'.$brand_logo['title'].'"><img src="' . $brand_logo['url'] . '" alt=""/></a>';
			}
        $html .='<li>
			 '.$logo.'</li>
			';
        $i++;
    }}

    $html .= '</ul></div>';
    return $html;
}
add_shortcode('sc_social', 'fn_social');

/* ----- Testiminial shortcode ---- */

function fn_Testiminial() {

    global $wp_query;

    $args = array('post_type' => 'testimonial', 'posts_per_page' => -1);

    $query = query_posts($args);
	
		$html = '';
		$html .= '
		
		 <div class="tabs-section">
		
		<div class="resp-tabs-container">';
		$i = 1;  
		 foreach ($query as $row) {
			 $designation = get_field('designation', $row->ID);
             if ( has_post_thumbnail($row->ID)) {
					
				 $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($row->ID),'testimonialimg');	
				 
			} 
			else
			{
				$image_url[0] = get_template_directory_uri().'/images/no_thumb.jpg';
			}
		
			 $html .='<div class="tab-content cf">
									
								 <div class="testimonials">
									<p>'.$row->post_content.'</p>
									<span>'.$designation.'</span>
								  </div>
								<div class="testimonials-img">
								  <img src="' . $image_url[0] . '" alt="'.$row->post_title.'" title="'.$row->post_title.'">
								</div>
													
							   
						</div>';
	
	$i++;  }
	$html .= "</div>";
	$html .= '
	<ul class="resp-tabs-list">';
	
		  
		$i = 1;  
		foreach( $query as $row ) {
			
		
			 $html .='<li class="tab-0'.$i.'">
			              0'.$i.'
                        	
					 </li>';
	
	$i++;  }
	$html .= "</ul>";
	$html .= "</div>";

        wp_reset_query();
    
    return $html;
}

add_shortcode('sc_Testimonial', 'fn_Testiminial');
?>