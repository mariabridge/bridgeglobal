/**
 * @file
 * Initiate Owl Carousel.
 */

(function($) {
  Drupal.behaviors.owlcarousel = {
    attach: function(context, settings) {
    
      for (var carousel in settings.owlcarousel) {
        // Carousel instance.
        var owl = $('#' + carousel);
        //console.log(settings.owlcarousel[carousel].settings.lazyLoad);
        // lazyLoad support.
        if (settings.owlcarousel[carousel].settings.lazyLoad) {
          var images = owl.children('img');

          $.each(images, function(i, image) {
            $(image).attr('data-src', $(image).attr('src'));
          });

          images.addClass('lazyOwl');
        }

        // Attach instance settings.
       
        $("#owl-carousel-block7 > div").each(function(){
          var thisIndex=($(this).index());
          $(this).attr("id",thisIndex);
        });
        //console.log(settings.owlcarousel[carousel].settings);
        owl.owlCarousel(settings.owlcarousel[carousel].settings);
        

    // console.log(hash);
//Public methods
if(owl.selector=="#owl-carousel-block7"){
   var url=window.location.hash;
    hash = url.split('#')[1];
  owl.trigger('owl.jumpTo', hash)
}
 

        // Set an inline height if custom AJAX pagination is enabled;
        // otherwise replacement of carousel element causes scrolling effect.
        if (settings.owlcarousel[carousel].views.ajax_pagination) {
          owl.parent().css('height', owl.height());

          var view = owl.parent().parent();
          var next = $(view).find('.pager-next a');
          var prev = $(view).find('.pager-previous a');

          // Attach Owl Carousel behaviors to pager elements.
          $(next, context).click(function() {
            owl.trigger('owl.next');
          })
          $(prev, context).click(function() {
            owl.trigger('owl.prev');
          })
        }
      }
    }
  };

}(jQuery));
