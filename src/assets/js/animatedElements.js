import $ from "jquery";

// animated text counter
function animateValue(id, start, end, duration) {
  // assumes integer values for start and end

  var obj = document.getElementById(id);
  var range = end - start;
  // no timer shorter than 50ms (not really visible any way)
  var minTimer = 50;
  // calc step time to show all interediate values
  var stepTime = Math.abs(Math.floor(duration / range));

  // never go below minTimer
  stepTime = Math.max(stepTime, minTimer);

  // get current time and calculate desired end time
  var startTime = new Date().getTime();
  var endTime = startTime + duration;
  var timer;

  function run() {
    var now = new Date().getTime();
    var remaining = Math.max((endTime - now) / duration, 0);
    var value = Math.round(end - remaining * range);
    obj.innerHTML = value;
    if (value == end) {
      clearInterval(timer);
    }
  }

  timer = setInterval(run, stepTime);
  run();
}
// to keep track of the times the element fires off. will need a better solution for multiple items
let counter = 0;

// Cache all animated elements
var $animation_elements = $(".animation-element");
// var $animation_elements_quick = $('.animation-element-quick');
var $window = $(window);
var $window_width = $window.width();

// actual function to check if in view
function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = window_top_position + window_height;

  $.each($animation_elements, function () {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = element_top_position + element_height;

    element_top_position = element_top_position + window_height / 8;
    element_bottom_position = element_bottom_position - window_height / 8;

    //check to see if this current container is within viewport
    if ($window_width > 430) {
      if (
        element_bottom_position >= window_top_position &&
        element_top_position <= window_bottom_position
      ) {
        $element.addClass("in-view");
        // console.log($element);
        if (counter === 0) {
          animateValue("law-num", 0, 150, 2000);
        }
        counter++;
      }
    } else {
      $element.addClass("in-view");
    }
  });
}

// Grab scroll and resize event with callback to in_view function
if ($window.width() > 430) {
  $window.on("scroll resize", check_if_in_view);
  // Initial trigger method to fire a scroll even as soon as the window loads just in case there are things on
  // the first page to animate
  $window.trigger("scroll");
} else {
  check_if_in_view();
}
