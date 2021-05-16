$(document).ready(function () {
    // auto close menu after item click
    $('.navbar-nav>li>a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    // scroll to top js
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#hms-top').fadeIn();
        } else {
            $('#hms-top').fadeOut();
        }
    });

    // scroll to top
    $(document).on('click', '#hms-top', function () {
        $('html, body').animate({ scrollTop: 0 }, 1000);
    });

    let maxWidth = $(window).width();
    let topOffset = 0;
    if (maxWidth <= 991) {
        topOffset = 200;
    }
    
    $(document).
        on('click', '#ancDepartments,#ancTestimonials,#ancHmsFeatures',
            function (e) {
                e.preventDefault();

                $('html, body').animate(
                    {
                        scrollTop: $($(this).attr('href')).offset().top -
                            topOffset,
                    },
                    500,
                    'linear',
                );
            });

    // Add smooth scrolling to all links
    $(document).on('change', '.linkItem', function (event) {
        if (this.hash !== '') {
            event.preventDefault();
            let hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top,
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    new WOW().init();

    $('.lightgallery').lightGallery({
        mode: 'lg-slide-circular',
        counter: false,
    });
});

$(window).on('load', function () {
    $('.owl-carousel').owlCarousel({
        margin: 10,
        autoplay: true,
        loop: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsiveClass: false,
        responsive: {
            0: {
                items: 1,
            },
            320: {
                items: 1,
                margin: 20,
            },
            540: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 3,
            },
            1024: {
                items: 3,
            },
            2256: {
                items: 3,
            },
        },
    });
});
/*
// Initialize and add the map
function initMap() {
    // The location from latLong
    let latLong = {lat: 21.235260, lng: 72.874690};
    // The map, centered
    let map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: latLong});
    // The marker, positioned
    let marker = new google.maps.Marker({position: latLong, map: map});
}
 */
