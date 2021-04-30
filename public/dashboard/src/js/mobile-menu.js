import Velocity from 'velocity-animate'

(function($) { 
    "use strict";
        
    // Mobile Menu
    $('#mobile-menus-toggler').on('click', function() {
        if ($('.mobile-menus').find('ul').first()[0].offsetParent !== null) {
            Velocity($('.mobile-menus').find('ul').first(), "slideUp")
        } else {
            Velocity($('.mobile-menus').find('ul').first(), "slideDown")
        }
    })

    $('.mobile-menus').find('.menus').on('click', function() {
        if ($(this).parent().find('ul').length) {
            if ($(this).parent().find('ul').first()[0].offsetParent !== null) {
                $(this).find('.menu__sub-icon').removeClass('transform rotate-180')
                Velocity(
                    $(this).parent().find('ul').first(), 
                    "slideUp", 
                    {
                        duration: 300,
                        complete: function(el) {
                            $(this).removeClass('menu__sub-open')
                        }
                    }
                )
            } else {
                $(this).find('.menu__sub-icon').addClass('transform rotate-180')
                Velocity(
                    $(this).parent().find('ul').first(), 
                    "slideDown", 
                    {
                        duration: 300,
                        complete: function(el) {
                            $(this).addClass('menu__sub-open')
                        }
                    }
                )
            }
        }
    })
})($)