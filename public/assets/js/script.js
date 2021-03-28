$(document).ready(function() {
    //fixed navbar
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    //Smooth Scrolling
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    /*Scroll to top*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });

    $('.product_description').height($('.simple-gallery').outerHeight());
    $('.product_description-sm').height($('.simple-gallery-sm').outerHeight());


    $('.product_1').hide();
    $('.product_2').hide();
    $('.product_3').hide();
    $('.product_4').hide();
    $('.product_5').hide();
    $('.product_6').hide();
    $('.product_toggle1').click(function (){

        $('.product_1').show('slow');
        $('.product_2').hide();
        $('.product_3').hide();
        $('.product_4').hide();
        $('.product_5').hide();
        $('.product_6').hide();

    })
    var selector = '.grid .single_product';

    $(selector).on('click', function(){
        $(selector).removeClass('active_zoe');
        $(this).toggleClass('active_zoe');
    });
    $('.product_toggle2').click(function (){
        $('.product_2').show('slow');
        $('.product_1').hide();
        $('.product_3').hide();
        $('.product_4').hide();
        $('.product_5').hide();
        $('.product_6').hide();

    })
    $('.product_toggle3').click(function (){
        $('.product_3').show('slow');
        $('.product_2').hide();
        $('.product_1').hide();
        $('.product_4').hide();
        $('.product_5').hide();
        $('.product_6').hide();

    })
    $('.product_toggle4').click(function (){
        $('.product_4').show('slow');
        $('.product_2').hide();
        $('.product_1').hide();
        $('.product_3').hide();
        $('.product_5').hide();
        $('.product_6').hide();

    })
    $('.product_toggle5').click(function (){
        $('.product_5').show('slow');
        $('.product_2').hide();
        $('.product_1').hide();
        $('.product_3').hide();
        $('.product_4').hide();
        $('.product_6').hide();

    })
    $('.product_toggle6').click(function (){
        $('.product_6').show('slow');
        $('.product_2').hide();
        $('.product_1').hide();
        $('.product_3').hide();
        $('.product_4').hide();
        $('.product_5').hide();

    })
    $('.close_product_desc').click(function (){
        $('.product_6').hide('slow');
        $('.product_2').hide('slow');
        $('.product_1').hide('slow');
        $('.product_3').hide('slow');
        $('.product_4').hide('slow');
        $('.product_5').hide('slow');
        $(selector).removeClass('active_zoe');

    })

    $(".mini img").click(function(){
        $(this).parent().parent().parent().children().children(".maxi").attr("src",$(this).attr("src").replace("100x100","400x400"));
    });
    function mountZoomImage(image, width, height, target) {
        target.prepend('<div class="zoom"><div class="zoom__image"></div></div>');
        $('div.zoom__image').css({
            'width': width,
            'height': height,
            'background-image': 'url(' + image + ')'
        });
    }

    function unmountZoomImage() {
        $('div.zoom').remove();
    }

    function zoomImage(zoom) {
        $('div.zoom__image').css({
            'transform': 'scale(' + zoom + ')',
            'margin-top': '50px'
        });
    }

    function panZoomImage(x, y, target) {
        var transformX = (x / (target.width() - 100) * 100) + '%';
        var transformY = (y / (target.height() - 50) * 100) +'%';

        target.css({'transform-origin': transformX + ' ' + transformY});
    }

    $('.standard').mousemove(function(event) {
        var $zoomTarget = $('div.zoom__image');
        var x = event.pageX - $(this).offset().left;
        var y = event.pageY - $(this).offset().top;
        panZoomImage(x, y, $zoomTarget);
    });

    $('.standard').mouseover(function() {
        var $zoomParent = $('div.copy');
        var image = $(this).find('img').attr('src');
        var imageWidth = $(this).find('img').width();
        var imageHeight = $(this).find('img').height();
        var zoomAmount = $(this).attr('data-zoom');

        $(this).css({'cursor': 'zoom-in'});
        mountZoomImage(image, imageWidth, imageHeight, $zoomParent);
        zoomImage(zoomAmount);
    });

    $('div.standard').mouseout(function() {
        unmountZoomImage();
    });

})
