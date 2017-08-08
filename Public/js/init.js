(function($){
  $(function(){

    $('.button-collapse').sideNav();
    // if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios|iPad)/i)))
    // {    //跳到手机端
    //   alert("手机");
    //
    //
    // }else {
    //   alert("电脑");
    // }
    $('.tap-target').tapTarget('open');
    $('.tap-target').tapTarget('close');
    $('.carousel.carousel-slider').carousel({fullWidth: true});

    $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: false, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'right', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false // Stops event propagation
        }
    );
  }); // end of document ready
})(jQuery); // end of jQuery name space