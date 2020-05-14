import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

// ++++++++++++++++++
// FUNCTIONS
// ++++++++++++++++++

function headerMobileSwitch() {
    //initial load change class
    if($(window).width() <= 640) {
        $(".site-header").addClass("mobile");
    }

    //if resizing to mobile size
    $(window).on("resize", function() {
        if($(window).width() <= 640) {
            $(".site-header").addClass("mobile");
        } else if ($(window).width() > 640) {
            $(".site-header").removeClass("mobile");
        };
    });
};

function moveFigcaptionIntoAnchor(container, wrapper, insert) {
    $(container).each(function() {
        let anchor = $(this).find(wrapper);
        let figcaption = $(this).find(insert);
        $(anchor).append(figcaption);
    });
}

function insertDivider(container, selector) {
    // <div class="divider"><div class="dividermask"></div><span><i>&#10038;</i></span></div>
    // console.log(container);
    // console.log($(container).find(selector));
    // console.log($(container).find(selector).first());
    $(container).find(selector).first().after("<div class='divider'><div class='dividermask'></div><span><i>&#10038;</i></span></div>");
}

$(document).foundation();

$(document).ready(function() {
    headerMobileSwitch();

    // stupid scroll arrow functionality...took way to long.
    let arrowStart = false;
    let scrollArrowFn = function() {
        if (!arrowStart) {
            $(".read-more-arrow").css("display", "none");
        } else {
            $(".read-more-arrow").css("opacity", "0.7");
            $(".read-more-arrow").css("animation", "none");
            $(".read-more-arrow").animate({opacity: 0}, 1000, function() {
                $(".read-more-arrow").css("display", "none");
            });
        };
    };

    $(".read-more-arrow").on('animationstart webkitAnimationStart', function() { 
        arrowStart = true;
    });

    $(window).scroll(function() {
        scrollArrowFn();
        $(window).off('scroll', scrollArrowFn);
    });

    

    // moves figcaptions into anchor tags if they exist
    moveFigcaptionIntoAnchor(".blocks-gallery-item", "a", "figcaption"); 

    insertDivider(".grid-container", "h1");
    
    // add tabindex to element so that it can receive focus actions for mobile menu
    $(".is-accordion-submenu-parent").attr("tabindex", "0");

    // make page visible once all is loaded
    $("html").css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500);
});