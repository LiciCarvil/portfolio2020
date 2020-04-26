$ = jQuery;

$(document).ready(function() {
  //initialize swiper when document ready

  // var swiper = new Swiper(".swiper-container", {
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev"
  //   }
  // });




  
  // TO CHANGE COLOR BACKGROUND WHILE SCROLLING
  $(window).scroll(function() {
  
    // selectors
    var $window = $(window),
        $body = $('body'),
        $panel = $('.panel');
    
    // Change 33% earlier than scroll position so colour is there when you arrive.
    var scroll = $window.scrollTop() + ($window.height() / 3);
   
    $panel.each(function () {
      var $this = $(this);
      
      // if position is within range of this panel.
      // So position of (position of top of div <= scroll position) && (position of bottom of div > scroll position).
      // Remember we set the scroll to 33% earlier in scroll var.
      if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            
        // Remove all classes on body with color-
        $body.removeClass(function (index, css) {
          return (css.match (/(^|\s)color-\S+/g) || []).join(' ');
        });
         
        // Add class of currently active div
        $body.addClass('color-' + $(this).data('color'));
      }
    });    
    
  }).scroll();

  // ----------- ScrollMagic -----------

  // Init ScrollMagic
  var controller = new ScrollMagic.Controller(); 

  //Loop 
  $('.scrollmagic-block').each(function() {
    // Build a scene
    var ourScene = new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.9,
      reverse: false,
    })

    .setClassToggle(this, 'fade-in') // add class to experience-block
    .addIndicators({
      name: 'fade scene',
      colorStart: 'red',
      colorEnd: 'violet'
    })
    .addTo(controller);

  })
});
