import $ from 'jquery';

// Cache all animated elements
var $animation_elements = $('.animation-element');
// var $animation_elements_quick = $('.animation-element-quick');
var $window = $(window);
var $window_width = $window.width();

// actual function to check if in view
function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    
   
    $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        
        element_top_position = element_top_position + (window_height / 8);
        element_bottom_position = element_bottom_position - (window_height / 8);

        //check to see if this current container is within viewport
        if($window_width > 430) {
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
                // console.log($element);
            } 
        } else {
            $element.addClass('in-view');
        }
    });

    // $.each($animation_elements_quick, function() {
    //     var $element = $(this);
    //     var element_height = $element.outerHeight();
    //     var element_top_position = $element.offset().top;
    //     var element_bottom_position = (element_top_position + element_height);

    //     //check to see if this current container is within viewport
    //     if ((element_bottom_position >= window_top_position) &&
    //         (element_top_position <= window_bottom_position)) {
    //         $element.addClass('in-view');
    //         // console.log($element);
    //     } 
    // });
}

// Grab scroll and resize event with callback to in_view function
if($window.width() > 430) {
    $window.on('scroll resize', check_if_in_view);
    // Initial trigger method to fire a scroll even as soon as the window loads just in case there are things on
    // the first page to animate
    $window.trigger('scroll');
} else {
    check_if_in_view();
};