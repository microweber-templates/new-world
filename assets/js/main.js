(function () {
    "use strict"

    var $window = $(window),
        $document = $(document);

    var defaultTheme = {
        isElementInViewport: function (el) {
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.top <= (window.innerHeight || document.documentElement.clientHeight)
            );
        },
        stickyNav: function () {
            $('body.sticky-nav .navigation')
                [$window.scrollTop() ? 'addClass' : 'removeClass']
            ('sticky');
        }
    }

    window.defaultTheme = defaultTheme;

    $window.on('load', function () {
        defaultTheme.stickyNav();

        $window.on('scroll resize', function () {
            defaultTheme.stickyNav();
        });
    });

    $document.ready(function () {
        $(document).ready(function () {
            if ($('.main-content > div:first').find('section').hasClass('js-header-transparent')) {

            } else {
                $('.navigation-holder').addClass('not-transparent');
            }
        })

        if ($(document.body).hasClass('sticky-nav')) {
            var navHeight = $('.navigation').outerHeight();
            defaultTheme.stickyNav();
        }

        $('.js-menu-toggle').on('click', function () {
            $('html').toggleClass('mobile-menu-active');

            $('.js-challanges-menu').hide().removeClass('opened');
            $('.mobile-search-holder').hide().removeClass('mobile-opened');
        });


        $(document.body).on('click', function (e) {
            var curr = $(e.target)
            if (curr.parents('.menu,.toggle').length === 0) {
                $('html').removeClass('mobile-menu-active');
            }

        });

        $(".navigation .menu li").each(function () {
            if ($(this.children).filter('ul').length > 0) {
                $(this).addClass('has-sub-menu')
            }
        });


        $(".has-sub-menu > a").on("click", function (e) {
            var parent = $(this).parent();
            var ul = parent.children('ul');
            console.log(ul)
            if (ul.length === 1 && matchMedia("(max-width: 1450px)").matches) {
                e.preventDefault();
                ul.slideToggle(function () {
                    if (this.style.display == 'none') {
                        this.style.display = '';
                    }
                });
            }
        });

        // $('.dropdown-toggle').dropdown()
    });


    /* ###################### Counter ###################### */
    var numbCount = function (el) {
        var html = el.innerHTML.trim();
        var to = parseInt(html, 10);
        var inc = 120;
        if (to > 20) inc = 60;
        if (to > 60) inc = 40;
        if (to > 120) inc = 10;
        if (to > 320) inc = 5;
        if (to > 1220) inc = 3;
        if (to > 5000) inc = 1;
        if (!isNaN(to)) {
            var time = 10;
            for (var i = 1; i <= to; i++) {
                time += inc;
                (function (time, i, el) {
                    setTimeout(function () {
                        el.innerHTML = i;
                    }, time)
                })(time, i, el)
            }
        }
    }

    $.fn.isOnScreen = function () {
        var win = $window;

        var viewport = {
            top: win.scrollTop(),
            left: win.scrollLeft()
        };
        viewport.right = viewport.left + win.width();
        viewport.bottom = viewport.top + win.height();

        var bounds = this.offset();
        bounds.right = bounds.left + this.outerWidth();
        bounds.bottom = bounds.top + this.outerHeight();

        return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };


    $window.on('load resize scroll', function () {
        setTimeout(function () {
            $('[data-counter]').each(function () {
                if ($(this).isOnScreen()) {
                    $(this).css({'visibility': 'visible'});
                    $(this).removeClass('js-start-from-zero');
                    if (!this.__activated) {

                        this.__activated = true;
                        numbCount(this);
                    }
                }
            });
        }, 10);

        $(".menu").css('maxHeight', ($window.height() - $(".navigation").outerHeight()))
    });


    /* ###################### Tabs ###################### */
    $document.ready(function () {
        var numTabs = $('.tabs .nav-tabs:not(.as-buttons)').find('li').length;
        var tabWidth = 100 / numTabs;
        var tabPercent = tabWidth + "%";
        $('.nav-tabs li').width(tabPercent);
    });
    /* ###################### Tabs ###################### */

    /* ###################### Section 4 and 5 padding ###################### */

    /* ###################### Top Top ###################### */
    $document.ready(function () {
        var ttopButton = $("#to-top");
        ttopButton.hide().on("click", function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        });
        $window.scroll(function () {
            if ($window.scrollTop() === 0) {
                ttopButton.hide();
            } else {
                ttopButton.show();
            }
        });
    });
    /* ###################### To Top ###################### */

    /* ###################### Google Maps ###################### */
    $document.ready(function () {
        if ($('#map').length > 0) {
            var latitude = 42.662104;
            var longtitude = 23.3163666;
            var isDraggable = $document.width() > 991 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

            var locations = [
                ['', latitude, longtitude, 2]
            ];
            var styles = [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "saturation": 36
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ];

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: isDraggable,
                styles: styles,
                center: new google.maps.LatLng(latitude, longtitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: 'assets/img/section-16/marker.png'
                });
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][0]);
                    }
                })(marker, i));
            }
        }
    });
    /* ###################### Google Maps ###################### */


    /* ###################### Tooltip ###################### */
    $document.ready(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    /* ###################### Tooltip ###################### */

    /* ###################### Project Gallery ###################### */
    function loadPortfolioGallerySettings() {

        return false;

        if ($window.width() > 991) {
            var projectGalleryHeight = $('.portfolio-inner-page .project-gallery').height();
            var projectGalleryWidth = $('.portfolio-inner-page .project-gallery').width();
            var projectInfoHeight = $('.portfolio-inner-page .project-info').height();
            $('.portfolio-inner-page .project-info').css({'max-width': projectGalleryWidth + 'px'});
            $('.portfolio-inner-page .js-in-viewport').css({'margin-top': projectInfoHeight + 'px'});
        } else {
            if ($('.portfolio-inner-page .project-gallery').length > 0) {
                $('.portfolio-inner-page .project-gallery').each(function () {
                    var el = $(this);
                    el.slick({
                        centerMode: true,
                        centerPadding: '0px',
                        slidesToShow: 1,
                        arrows: true,
                        dots: false,
                        adaptiveHeight: true
                    });
                });
            }
        }
    }

    $document.ready(function () {
        loadPortfolioGallerySettings();
    });

    $document.on('resize', function () {
        loadPortfolioGallerySettings();
    });


    $window.on('load', function () {
        /* ###################### Project Gallery ###################### */

        var pInfo = $('.project-info');

        pInfo.stickySidebar({
            containerSelector: '.project-holder',
            innerWrapperSelector: '.project-info-content',
            topSpacing: 115,
            bottomSpacing: 115
        });
    })

    $document.ready(function () {
        /* ###################### Magnific Popup with Video ###################### */
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    });
    /* ###################### Magnific Popup with Video ###################### */

    /* ###################### Zoom Container Open Image ###################### */
    // $document.ready(function () {
    //     $('.zoomWindow').on('click', function () {
    //         var img = $(this).css('background-image');
    //         console.log(img);
    //     });
    // });
    /* ###################### Zoom Container Open Image ###################### */

    /* ###################### Video Section ###################### */
    function setHeightOnVideos() {
        var headerheight = $('.navigation-holder').height();
        var windowheight = $(window).height();
        $('.video-section').css('height', windowheight - headerheight + "px");
        $('.video-section .video').css('height', windowheight - headerheight + "px");
        $('.video-section .container-fluid').css('height', windowheight - headerheight + "px");
        $('#main').css('margin-top', headerheight + "px");
    }

    $document.ready(function () {
        setHeightOnVideos();
    });

    $window.on('resize', function () {
        setHeightOnVideos();
    });
    /* ###################### Video Section ###################### */

    /* ###################### Quantity ###################### */

    $document.ready(function () {
        $(".arrow.minus").on("click", function (m) {
            var i = $(this).parent().parent().find('input[name="quantity"], input[name="qty"], .js-qty');
            if (i.val() <= 1) {
                i.val("1").change();
            } else {
                var l = i.val() - 1;
                i.val(l).change();
            }
        });
        $(".arrow.plus").on("click", function (m) {
            var i = $(this).parent().parent().find('input[name="quantity"], input[name="qty"], .js-qty');
            if (i.val() <= 19) {
                var l = +i.val() + +1;
                i.val(l).change();
            }
        });
    });
    /* ###################### Quantity ###################### */
})();

$(document).ready(function () {
    $('#mw-template-beauty').removeClass('module');
})

$(document).ready(function () {
    $('.navigation .menu .list.menu_1').collapseNav({
        responsive: 1,
        mobile_break: 992,
        li_class: 'has-sub-menu dropdown'
    });

    if ($(window).width() <= 991) {
        $('.navigation .menu .list.menu_1 .has-sub-menu a.dropdown-toggle').attr('href', 'javascript:;');
        $('.navigation .menu .list.menu_1 .has-sub-menu').on('click', function (e) {
            // e.preventDefault();
        })
    }

})

/* Ajax Loading */
$(window).on('load', function () {
    setTimeout(function () {
        $('body').addClass('page-loaded');
    }, 900);
})

$(document).ready(function () {
    $('.member-nav .search input').on('keyup', function () {
        if ($(this).val() != '') {
            $(this).parent().parent().addClass('focused');
        } else {
            $(this).parent().parent().removeClass('focused');
        }
    });

    if ($('.member-nav .search input').val() != '') {
        $(this).parent().parent().addClass('focused');
    } else {
        $(this).parent().parent().removeClass('focused');
    }
})

$(document).ready(function () {
    $('.js-show-challenges').on('click', function () {
        if ($(window).width() >= 992) {
            if ($('.js-challanges-menu').hasClass('opened')) {
                $('.js-challanges-menu').slideUp('slow');
                $('.js-challanges-menu').removeClass('opened');
            } else {
                $('.js-challanges-menu').slideDown('slow');
                $('.js-challanges-menu').addClass('opened');
            }
        } else {
            if ($('.js-challanges-menu').hasClass('opened')) {
                $('.js-challanges-menu').hide("slide", {direction: "right"}, 500);
                $('.js-challanges-menu').removeClass('opened');
            } else {
                $('.js-challanges-menu').show("slide", {direction: "right"}, 500);
                $('.js-challanges-menu').addClass('opened');
            }
        }
    });

    $('.js-show-mobile-search').on('click', function () {
        if ($('.mobile-search-holder').hasClass('mobile-opened')) {
            $('.mobile-search-holder').slideUp('slow');
            $('.mobile-search-holder').removeClass('mobile-opened');
        } else {
            $('.mobile-search-holder').slideDown('slow');
            $('.mobile-search-holder').addClass('mobile-opened');
        }
    });
})


function percent(num_amount, num_total) {
    if (num_amount == 0 || num_total == 0) {
        return 0;
    }
    var count1 = num_amount / num_total;
    var count2 = count1 * 100;

    count = count2;

    return count;
}


function setPaddingToSections() {
    if ($(window).width() > 991) {
        var headerWidth = $('.navigation-holder').width();
        var headerContainerWidth = $('.navigation-holder .navigation .container').width();
        var headerContainerFluidWidth = $('.container-fluid').width();

        var oneFluidColumn = headerContainerFluidWidth / 12;
        if ($(window).width() > 1199) {
            // oneFluidColumn = headerContainerFluidWidth / 12;
        }

        var oneColumn = 0;
        if ($(window).width() > 1199) {
            oneColumn = headerContainerWidth / 12;
        }

        $('.section-16').each(function () {
            var leftSide = $(this).find('.left-side');
            leftSide.css({'padding-left': ((headerWidth - headerContainerWidth ) / 2) + 10 + oneColumn + 'px'});
            leftSide.find('.info-holder').css({'margin-right': '-' + oneFluidColumn + 'px'});
        })

        $('.section-17').each(function () {
            var rightSide = $(this).find('.right-side');
            rightSide.css({'padding-right': ((headerWidth - headerContainerWidth ) / 2) + 10 + oneColumn + 'px'});
            rightSide.find('.info-holder').css({'margin-left': '-' + oneFluidColumn + 'px'});
        })

        $('.home-slider .container.info-holder').css({'padding-left': oneColumn + 'px', 'padding-right': oneColumn + 'px'});
        $('.home-slider .bx-controls-direction').css({'width': headerContainerWidth + 'px'});

    } else {
        $('.section-16').each(function () {
            var leftSide = $(this).find('.left-side');
            leftSide.css({'padding-left': ''});
            leftSide.find('.info-holder').css({'margin-right': ''});
        })
        $('.section-17').each(function () {
            var rightSide = $(this).find('.right-side');
            rightSide.css({'padding-right': ''});
            rightSide.find('.info-holder').css({'margin-left': ''});
        })

        $('.home-slider .container.info-holder').css({'padding-left': '40px', 'padding-right': '40px'});
        $('.home-slider .bx-controls-direction').css({'width': headerContainerWidth + 'px'});

    }
}

$(document).ready(function () {
    setPaddingToSections();
});

$(window).on('resize', function () {
    setPaddingToSections();
});


/* ###################### Masonry Gallery with Magnific Popup ###################### */
function istotopeFilter() {
    var filterValue = '.masonry-holder';

    $('.masonry-team .js-masonry-grid-works-filter .list-masonry-grid-works-filter__item a.list-masonry-grid-works-filter__link_active').each(function (index) {
        filterValue = filterValue + ', ' + $(this).attr('data-filter');
    });

    if (filterValue == '.masonry-holder') {
        $('.js-masonry-grid-works-filter li:first-of-type a').addClass('btn-primary list-masonry-grid-works-filter__link_active');
        $('.js-masonry-grid-works-filter li:first-of-type a').removeClass('btn-outline-primary shadow-md');
        filterValue = '*';
    }

    masonryGrid.isotope({
        filter: filterValue
    });

    // console.log(filterValue);
}


var masonryGrid = $('.masonry-team .js-masonry-grid-works');


$(window).on('load', function () {
    // masonry grid
    setTimeout(function () {
        masonryGrid.masonry({
            itemSelector: '.js-masonry-grid-works__item',
            columnWidth: '.js-masonry-grid-works__sizer',
            percentPosition: true
        }).isotope();
    }, 10);
});


$(document).ready(function () {
    // isotope filtering panel
    $('.masonry-team .js-masonry-grid-works-filter').on('click', 'a:not(.all)', function (e) {
        e.preventDefault();

        $('body').find('a.all').removeClass('btn-primary list-masonry-grid-works-filter__link_active');
        $('body').find('a.all').addClass('btn-outline-primary shadow-md');

        $(this).addClass('btn-primary list-masonry-grid-works-filter__link_active');
        $(this).removeClass('btn-outline-primary shadow-md');

        istotopeFilter();
    });

    $('.masonry-team .js-masonry-grid-works-filter').on('click', 'a.list-masonry-grid-works-filter__link_active', function (e) {
        e.preventDefault();

        $(this).removeClass('btn-primary list-masonry-grid-works-filter__link_active');
        $(this).addClass('btn-outline-primary shadow-md');

        istotopeFilter();
    });


    $('.masonry-team .js-masonry-grid-works-filter').on('click', 'a.all', function (e) {
        e.preventDefault();

        $('.masonry-team .js-masonry-grid-works-filter .list-masonry-grid-works-filter__item a.list-masonry-grid-works-filter__link_active').each(function (index) {
            $(this).removeClass('btn-primary list-masonry-grid-works-filter__link_active');
            $(this).addClass('btn-outline-primary shadow-md');
        });

        $(this).removeClass('btn-outline-primary shadow-md');
        $(this).addClass('btn-primary list-masonry-grid-works-filter__link_active');

        istotopeFilter();
    });
});
/* ###################### Masonry Gallery with Magnific Popup ###################### */


$(document).ready(function () {
    if (!$('body').hasClass('mw-live-edit')) {
        // AOS.init();
    }
})



/* ###################### Elevate Zoom ###################### */
$(document).ready(function () {

    var elevateZoomTurnOn = $(document).width() > 991 ? true : false;

    if (elevateZoomTurnOn) {
        $("#elevatezoom").elevateZoom({
            gallery: 'elevatezoom-gallery',
            cursor: "crosshair",
            galleryActiveClass: 'active',
            imageCrossfade: true,
            zoomType: "inner"
        });


        //pass the images to Fancybox
        $("#elevatezoom").bind("click", function (e) {
            var ez = $('#elevatezoom').data('elevateZoom');

            var res = [];
            $.each(ez.getGalleryList(), function () {
                res.push({src: this.href})
            });

            $.magnificPopup.open({
                items: res,
                gallery: {
                    enabled: true
                },
                type: 'image'
            });

            return false;
        });
    }

    var eGallery = $('#elevatezoom-gallery');
    if (eGallery.length > 0) {
        eGallery.each(function () {
            var el = $(this);
            el.slick({
                centerMode: true,
                centerPadding: '0',
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: true,
                autoplay: false,
                autoplaySpeed: 2000,
                dots: false,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    }
});
/* ###################### Elevate Zoom ###################### */
