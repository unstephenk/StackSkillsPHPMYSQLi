/**
 * Created by Stephen on 2/6/2016.
 */

$(document).ready(function(){

   /* $('.myLink').on('mouseenter', function(){
        $('h1').addClass('red');
    });

    $('.myLink').on('mouseleave', function(){
        $('h1').removeClass('red');
    });*/

    /*$('.myLink').click(function(){
        $('h1').replaceWith('<h3>Hello World</h3>');
;    })*/

    /*$('.myLink').click(function(){
        $('h1').css('font-size','40px');
    });*/

    // Set Options
    var speed = 500;			// Fade speed
    var autoswitch = true;		// Auto slider options
    var autoswitch_speed = 4000	// Auto slider speed

    // Add initial active class
    $('.slide').first().addClass('active');

    // Hide all slides
    $('.slide').hide();

    // Show first slide
    $('.active').show();

    // Next Handler
    $('#next').on('click', nextSlide);

    // Prev Handler
    $('#prev').on('click', prevSlide);

    // Auto Slider Handler
    if(autoswitch == true){
        setInterval(nextSlide,autoswitch_speed);
    }

    // Switch to next slide
    function nextSlide(){
        $('.active').removeClass('active').addClass('oldActive');
        if($('.oldActive').is(':last-child')){
            $('.slide').first().addClass('active');
        } else {
            $('.oldActive').next().addClass('active');
        }
        $('.oldActive').removeClass('oldActive');
        $('.slide').fadeOut(speed);
        $('.active').fadeIn(speed);
    }

    // Switch to prev slide
    function prevSlide(){
        $('.active').removeClass('active').addClass('oldActive');
        if($('.oldActive').is(':first-child')){
            $('.slide').last().addClass('active');
        } else {
            $('.oldActive').prev().addClass('active');
        }
        $('.oldActive').removeClass('oldActive');
        $('.slide').fadeOut(speed);
        $('.active').fadeIn(speed);
    }
});
