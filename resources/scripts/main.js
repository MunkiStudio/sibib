$(document).ready(function(){
	$.slidebars();
    var glide = $('.slider').glide({
      autoplay:5000,
      arrows:false,
      navigation:false
    }).data('api_glide');
    
    $('.slider_left').click(function(){
    	glide.next();
    });
    $('.slider_right').click(function(){
    	glide.prev();
    });
    $('#ebscoSearch').on('submit',function(){
    	ebscoHostSearchGo(this);
    })
});