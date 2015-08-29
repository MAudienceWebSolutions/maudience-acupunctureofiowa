// JavaScript Document
var $ = jQuery.noConflict();
jQuery(document).ready(function() {
	
	/*----------------accordian----------------*/
	$('ul#top-accordian a.accordion-title').click(function(e){
			e.preventDefault();
			if(!$(this).next().is(':visible')){
			$('ul#top-accordian a.accordion-title').removeClass('active');// close all
			$('ul#top-accordian .accordion-content').slideUp();// close all
			$(this).next().slideDown();//open`
			$(this).addClass('active');
			
			}/*else{
				$(this).next().slideUp();//current close // only one
				
			}*/
		});
		$('ul#top-accordian li').eq(0).find('.accordion-title').addClass('active');
		$('ul#top-accordian .accordion-content').eq(0).show();
		
		
	/*----------------tabs----------------*/
	
        $('.tabs-section').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view,
			removeHashfrmUrl:false,
			css3animation:'fadeIn',
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
		
/*----------------menu----------------*/
$('.enumenu_ul').responsiveMenu({
        'menuIcon_text': '<span>Menu</span>'
        /* menuslide_push : true,
         menuslide_direction: 'left'*/
     });
	 
	/*----------------equalHeight----------------*/ 
	 equalHeight();
 $(window).resize(function () {
  equalHeight();
 });
/*----------------slider----------------*/ 
 
	
});

function equalHeight(){
 if($(window).width() > 767){
  $('.col').removeAttr('style');
  $('.two-column').each(function(){
   var highestBox = 0;
   $('.col', this).each(function(){
     if($(this).height() > highestBox)
     highestBox = $(this).height();
   });
   $('.col',this).height(highestBox);
  });
 }else{
  $('.col').removeAttr('style');
 }
}




/*$(window).load(function(){
$('.loader').fadeOut();
});*/
