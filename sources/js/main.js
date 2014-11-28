/* jshint undef: false */
'use strict';
(function($,window,ebscoHostSearchGo,undefined){

  var tabs = function(){
     $('.tabs').each(function(){
        // For each set of tabs, we want to keep track of
        // which tab is active and it's associated content
        var $active, $content, $links = $(this).find('a');

        // If the location.hash matches one of the links, use that as the active tab.
        // If no match is found, use the first link as the initial active tab.
        $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
        $active.addClass('section-selected');

        $content = $($active[0].hash);

        // Hide the remaining content
        $links.not($active).each(function () {
          $(this.hash).hide();
        });

        // Bind the click event handler
        $(this).on('click', 'a', function(e){
          // Make the old tab inactive.
          $active.removeClass('section-selected');
          $content.hide();

          // Update the variables with the new link and content
          $active = $(this);
          $content = $(this.hash);

          // Make the tab active.
          $active.addClass('section-selected');
          $content.show();

          // Prevent the anchor's default click action
          e.preventDefault();
        });
      });
};

var slides = function(element){
  $element = $(element);
  var slides = $element.find('.slider-box').find('.slider-element');
  var len = slides.length;
  var index = 0;
  var leftBtn = $element.next().find('.slider_left');
  var rightBtn = $element.next().find('.slider_right');

  leftBtn.click(function(e){
    if( (index-1) >= 0){
      $(slides[index]).css("transform","translateX(+1000px)");
      index--;
      $(slides[index]).css("transform","translateX(0px)");
    }
  });

  rightBtn.click(function(e){
    if( (index+1) < len ){
      $(slides[index]).css("transform","translateX(-1000px)");
      index++;
      $(slides[index]).css("transform","translateX(-1000px)");
    }
  });
};

  $(document).ready(function(){
	  $.slidebars();
    
    slides('#slider-news');

    $('#ebscoSearch').on('submit',function(e){
    	ebscoHostSearchGo(this);
      e.preventDefault();
    });

    var header = $('header.fixed');
    $(window).scroll(function(){
      if( $(window).scrollTop() > 0){
        header.addClass('onTop');
      }else{
        header.removeClass('onTop');
      }
      
    });

    tabs();
    
    var hash = window.location.hash.replace('#','');
    if(hash === 'organigrama' || hash === 'mision'){
      $('.tabs a').removeClass('section-selected');
      $('.tabs a[href="'+hash+'"]').click();
    }

  });
}($,window,ebscoHostSearchGo));