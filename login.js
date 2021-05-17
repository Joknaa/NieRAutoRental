(function($) {

    // Ripple-effect animation
    $(".ripple-effect").click(function(e) {
        var rippler = $(this);

        rippler.append("<span class='ink'></span>");

        var ink = rippler.find(".ink:last-child");
        // prevent quick double clicks
        ink.removeClass("animate");

        // set .ink diametr
        if (!ink.height() && !ink.width()) {
            var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
            ink.css({
                height: d,
                width: d
            });
        }

        // get click coordinates
        var x = e.pageX - rippler.offset().left - ink.width() / 2;
        var y = e.pageY - rippler.offset().top - ink.height() / 2;

        // set .ink position and add class .animate
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass("animate");

        // remove ink after 1second from parent container
        setTimeout(function() {
            ink.remove();
        }, 1000)
    })



    // Ripple-effect-All animation
    function fullRipper(color, time) {
        setTimeout(function() {
            var rippler = $(".ripple-effect-All");
            if (rippler.find(".ink-All").length == 0) {
                rippler.append("<span class='ink-All'></span>");


                var ink = rippler.find(".ink-All");
                // prevent quick double clicks
                //ink.removeClass("animate");

                // set .ink diametr
                if (!ink.height() && !ink.width()) {
                    var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                    ink.css({
                        height: d,
                        width: d
                    });
                }

                // get click coordinates
                var x = 0;
                var y = rippler.offset().top - ink.height() / 1.5;

                // set .ink position and add class .animate
                ink.css({
                    top: y + 'px',
                    left: x + 'px',
                    background: color
                }).addClass("animate");

                rippler.css('z-index', 2);

                setTimeout(function() {
                    ink.css({
                        '-webkit-transform': 'scale(2.5)',
                        '-moz-transform': 'scale(2.5)',
                        '-ms-transform': 'scale(2.5)',
                        '-o-transform': 'scale(2.5)',
                        'transform': 'scale(2.5)'
                    })
                    rippler.css('z-index', 0);
                }, 1500);
            }
        }, time)

    }

    // Form control border-bottom line
    $('.blmd-line .form-control').bind('focus', function() {
        $(this).parent('.blmd-line').addClass('blmd-toggled').removeClass("hf");
    }).bind('blur', function() {
        var val = $(this).val();
        if (val) {
            $(this).parent('.blmd-line').addClass("hf");
        } else {
            $(this).parent('.blmd-line').removeClass('blmd-toggled');
        }
    })

    // Change forms
    $(".blmd-switch-button").click(function() {
        var _this = $(this);
        if (_this.hasClass('active')) {
            setTimeout(function() {
                _this.removeClass('active');
                $(".ripple-effect-All").find(".ink-All").remove();
                $(".ripple-effect-All").css('z-index', 0);
            }, 1300);
            $(".ripple-effect-All").find(".ink-All").css({
                '-webkit-transform': 'scale(0)',
                '-moz-transform': 'scale(0)',
                '-ms-transform': 'scale(0)',
                '-o-transform': 'scale(0)',
                'transform': 'scale(0)',
                'transition': 'all 1.5s'
            })
            $(".ripple-effect-All").css('z-index', 2);
            $('#Register-form').addClass('form-hidden')
                .removeClass('animate');
            $('#login-form').removeClass('form-hidden');
        } else {
            fullRipper("#26a69a", 750);
            _this.addClass('active');
            setTimeout(function() {
                $('#Register-form').removeClass('form-hidden')
                    .addClass('animate');
                $('#login-form').addClass('form-hidden');
            }, 2000)

        }
    })
})(jQuery);