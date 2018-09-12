(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtMainSlideshowBlock = {
    attach: function (context, settings) {

      $(context).find('.main-slideshow-block .slider-revolution').once('mtMainSlideshowBlockInit').each(function() {
        $(this).revolution({
          sliderType:"standard",
          sliderLayout: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-layout'),
          gridwidth: [1170,970,750,450],
          gridheight: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-initial-height'),
          autoHeight: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-autoheight'),
          fullScreenOffsetContainer: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-ignore-header'),
          delay: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-effect-duration'),
          disableProgressBar:'off',
          responsiveLevels:[1199,991,767,480],
          navigation: {
            onHoverStop:"off",
            arrows:{
              enable:true,
              tmp: "",
              left:{
                h_align:"left",
                v_align:"top",
                h_offset:50,
                v_offset:40
              },
              right:{
                h_align:"left",
                v_align:"top",
                h_offset:120,
                v_offset:40
              }
            },
            tabs: {
              style:"",
              enable: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-tabs-enable'),
              width:410,
              height:95,
              min_width:240,
              wrapper_padding: 0,
              wrapper_opacity:"1",
              tmp:'<div class="tp-tab-content"><span class="tp-tab-title">{{title}}</span></div>',
              visibleAmount: 6,
              hide_onmobile: false,
              hide_onleave: false,
              direction:"horizontal",
              span: true,
              position:"outer-bottom",
              space:0,
              h_align:"left",
              v_align:"bottom",
              h_offset:0,
              v_offset:0
            },
            thumbnails: {
              style:"",
              enable:$(this).closest(".main-slideshow-block").attr('data-attribute-mt-thumbs-enable'),
              width:370,
              height:95,
              min_width:240,
              tmp:'<div class="tp-thumb-content"><span class="tp-thumb-title">{{title}}</span></div><div class="tp-thumb-image"><span class="tp-thumb-img-wrap">  <span class="tp-thumb-image"></span></span></div>',
              visibleAmount:5,
              wrapper_padding:70,
              wrapper_color:"transparent",
              hide_onmobile:true,
              hide_onleave:false,
              direction:"vertical",
              span:true,
              position:"inner-right",
              space:20,
              h_align:"right",
              v_align:"top",
              h_offset:0,
              v_offset:0
            },
            bullets:{
              style:"",
              enable: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-bullets-enable'),
              direction:"horizontal",
              space: 5,
              h_align: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-bullets-position'),
              v_align:"bottom",
              h_offset: 0,
              v_offset: 20,
              tmp:"",
            },
            touch:{
              touchenabled: $(this).closest(".main-slideshow-block").attr('data-attribute-mt-touch-swipe-nav'),
              swipe_treshold:75,
              swipe_min_touches:1,
              drag_block_vertical:false,
              swipe_direction:"horizontal"
            }
          }
        });

        $(this).bind("revolution.slide.onloaded",function (e) {
          $(".slider-revolution-wrapper:not(.one-slide) .tparrows").fadeIn("slow");
        });

        $(this).find(".tp-caption--transparent-background").each(function() {
          var captionOpacity = $(this).attr('data-attribute-mt-caption-opacity'),
           captionBackgroundColor = $(this).css("background-color").replace(")", "," + captionOpacity + ")").replace("rgb", "rgba");
           $(this).css("background-color", captionBackgroundColor);
        });

        $(this).find(".transparent-background").css("backgroundColor", "rgba(0,0,0," + $(this).closest(".main-slideshow-block").attr('data-attribute-mt-background-opacity') + ")");
      });

    }
  };
})(jQuery, Drupal, drupalSettings);
