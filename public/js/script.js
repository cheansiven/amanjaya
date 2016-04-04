function loadCSS(id, url) {
    if (!document.getElementById(id)) {
        var head = document.getElementsByTagName('head')[0];
        var link = document.createElement('link');
        link.id = id;
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = url;
        link.media = 'all';
        head.appendChild(link);
    }
}

function popup() {
    $('.modal-wrapper').toggleClass('open');
    $('.modal-wrapper.open').click(function () {
        $('.modal-wrapper').removeClass('open');
    });
}

$(document).ready(function (e) {
    $('#openhome').click(function (e) {
        $('#opencontact').hide();
        $('.home #wrap-content').show();

    });

    $('#gocontact').click(function (e) {
        $('#opencontact').show();
        $('.home #wrap-content').hide();

    });

    var images = $('div img');
    var winWidth = $(window).width();

    if (winWidth > 1024) {
        $('#wrap-content').delay(1500).slideToggle(2000, "easeOutQuart");
    } else {
        $('#wrap-content').show();
    }


    $('.home #wrap-content').hide();

    if (window.location.hash) {
        $('#opencontact').hide();
        $('.home #wrap-content').css("display", "block");

    }

    //featured menu handler
    $hl_content = $('#hl-menu-content');
    $('#hl-menu li a').each(function () {
        $(this).click(function (e) {
            var winWidth = $(window).width();

            $(this).parents().removeClass('default');
            if ($('.h1-menu-tabs').hasClass('default')) {
                $('#first').show();
                $('#second').hide();
            } else {
                $('#first').hide();
                $('#second').show();
            }

            $('#prev, #next').click(function (e) {
                $('#hl_content').animate({height: '30px'}, 500, function () {
                    $('#hl-menu li a.active').removeClass('active');
                });
            });

            if (winWidth > 1024) {

                $a = $(this);
                e.preventDefault();
                if ($a.is('.active')) {
                    $('#hl_content').animate({height: '30px'}, 500, function () {
                        $('#hl-menu li a.active').removeClass('active');
                    });
                } else {
                    $('#hl-menu li a.active').removeClass('active');
                    $a.addClass('active');

                    $hl_content.find('> div').hide();
                    if (!$hl_content.is('.active')) {
                        $('#hl-menu-content').show();
                        $('#hl_content').animate({height: '210px'}, 500);
                    }
                    $hl_content.find($a.attr('href')).fadeIn(500);
                }
            }
        });
    });
    //trigger the first tab of feature block for all room pages
    //$('#hl-menu li a', $('.room-page')).first().trigger('click');

    var owl = $("#gallery-carousel");

    owl.owlCarousel({
        //items : 6, //10 items above 1000px browser width
        //itemsDesktop : [1250,6], //5 items between 1000px and 901px
        //itemsDesktopSmall : [900,3], // between 900px and 601px
        //itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile: false, // itemsMobile disabled - inherit from itemsTablet option
        lazyLoad: true,
        navigation: false,
        pagination: false
    });

    $.each(images, function () {
        var el = $(this),
            image = el.css('background-image').replace(/"/g, '').replace(/url\(|\)$/ig, '');
        if (image && image !== '' && image !== 'none')
            images = images.add($('<img>').attr('src', image));
        if (el.is('img'))
            images = images.add(el);
    });
    images.imagesLoaded()
        .always(function (instance) { // Loaded
            /*var winWidth = $(window).width();
             if(winWidth > 767) {
             $('#wrap-content').delay(800).slideToggle(2000, "easeOutQuart");
             }*/
        })
        .done(function (instance) { // successfully loaded

            $('#btnSignUp').click(function () {
                $('.signup-popup').show('slide', {direction: 'down', easing: 'easeOutQuart'}, 750);
            });

            $('#btnSignUp_mobile').click(function () {
                $('.signup-popup').show('slide', {direction: 'down', easing: 'easeOutQuart'}, 750);
            });

            /*jQuery Validate Form SignUp*/
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    firstname: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },// end messages

                submitHandler: function (form) { // JQuery's awesome submit handler.
                    var frm = $(form);
                    var msg = $('#ajaxSuccess');
                    var closeItem = $('#contactForm');

                    $.ajax({
                        type: "POST",
                        url: base_url + 'amanjaya/doContactForm',
                        data: frm.serialize(),

                        success: function (response) {
                            msg.append(response);
                            closeItem
                                .slideUp('slow')
                                .delay(4500)
                                .slideDown('slow', function () {
                                        msg.empty();
                                    }
                                );

                        }, //end success
                        error: function (e) {
                            console.log(e);
                        }
                    });
                },
                errorPlacement: function () {
                    return false;
                }
            }); // End mail form contact.


            $('#formSignUp').validate({
                rules: {
                    lname: {
                        required: true,
                    },
                    fname: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },// end messages

                submitHandler: function (form) { // JQuery's awesome submit handler.
                    var frm = $('#formSignUp');
                    var msg = $('#ajaxSuccess');
                    var itemParent = frm.parent();

                    $.ajax({
                        type: "POST",
                        url: base_url + 'amanjaya/mailSignUp',
                        data: $('#formSignUp').serialize(),

                        success: function (response) {
                            frm.slideUp('slow');
                            msg.append(response);
                            itemParent.delay(4000).fadeOut('slow');
                        }, //end success
                        error: function (e) {
                            frm.hide();
                            msg.append('<p style="color: red; font-size: 16px">' + e + '</p>');
                        }
                    });
                },
                errorPlacement: function () {
                    return false;
                }
            });
            /*End jQuery Validate*/


            $('#package_send').validate({

                rules: {

                    email: {
                        required: true,
                        email: true
                    }
                },// end messages

                submitHandler: function (form) { // JQuery's awesome submit handler.
                    var frm = $('#package_send');
                    var msg = $('#honey_success');
                    msg.empty();
                    msg.append('<img src="' + base_url + 'public/images/ajax-loader.gif">');

                    var itemParent = frm.parent();

                    $.ajax({
                        type: "POST",
                        url: base_url + 'amanjaya/honeyPackageSignUp',
                        data: $('#package_send').serialize(),

                        success: function (response) {
                            frm.slideUp('slow');
                            msg.empty();
                            msg.append(response);
                            itemParent.delay(4000).fadeOut('slow');
                        }, //end success
                        error: function (e) {
                            frm.hide();
                            msg.empty();
                            msg.append('<p style="color: red; font-size: 16px">' + e + '</p>');
                        }
                    });
                },
                errorPlacement: function () {
                    return false;
                }
            });
            /*End jQuery Validate*/

            /*jQuery Datepicker*/

            $('#txtArrival').Zebra_DatePicker({
                direction: true,
                pair: $('#txtDeparture')
            });
            $('#txtDeparture').Zebra_DatePicker({
                direction: true
            });

            //gallery script
            //when click on gallery thumbnail, its large version will be the page background
            $('#gallery .gallery-item a').each(function () {

                //preload image
                $("<img />").attr("src", $(this).attr('datasrc'));

                $(this).click(function (e) {
                    e.preventDefault();
                    $this = $(this);
                    //loading image display...
                    var div = $('<div></div>').hide().empty().append($("<img />").attr("src", $(this).attr('datasrc')));

                    div.imagesLoaded(function () {
                        //alert('done');
                        //background of page if the background of div#stretcher
                        $('div#stretcher').animate({'opacity': 0}, 10, function () {
                            $(this).css('background-image', 'url(' + $this.attr('datasrc') + ')')
                                .animate({'opacity': 1}, 300);
                        });

                        //$('div#stretcher').css('background-image', 'url(' + $this.attr('datasrc') + ')');
                    });
                });
            });

            /*Mobile Version*/
            $('div.default').slideDown();
            $('#menu-mobile li a').each(function () {
                $(this).click(function () {
                    var item = $(this);
                    var itemParent = $(this).parent();
                    var allLists = $('#menu-mobile li');
                    var allContentTab = $('div.content-tabs');
                    allLists.removeClass('parent');
                    itemParent.addClass('parent');

                    if (itemParent.hasClass('parent')) {
                        allContentTab.slideUp(500);
                        itemParent.find('div.content-tabs').slideDown(1500);
                    } else {
                        allContentTab.slideUp(500);
                    }
                });
            });

            var winWidth = $(window).width();
            if (winWidth <= 640) {
                $('#overview').appendTo('#menu-overview');
                $('#amenities').appendTo('#menu-amenities');
                $('#gallery').hide();
                $('#pricing').appendTo('#menu-pricing');

                $('#all-about-location').appendTo('#menu-all-about-location');
                $('#ultimate-comfort').appendTo('#menu-ultimate-comfort');
                $('#extra-mile').appendTo('#menu-extra-mile');
                $('#our-corporate-offers').appendTo('#menu-our-corporate-offers');

                $('#romantic-suite-content').appendTo('#romantic-suite');
                $('#honeymoon-in-pp-content').appendTo('#honeymoon-in-pp');
                $('#packages-content').appendTo('#packages');


                $('.all-our-suite-feature').appendTo('#allOurSuiteFeature');
                $('.invery-bathroom').appendTo('#inveryBathRoom');
                $('.and-more').appendTo('#manyMore');


                /*Link to Gallery Page*/
                $('#menu-gallery a').click(function () {
                    $(this).attr('href', 'http://www.google.com');
                });

                $(".wrap-accordion").accordion({
                    collapsible: true,
                    heightStyle: "content"
                });
            }

            $(".cross").hide();
            $(".jquery-sub-dropdown-menu").hide();
            $(".hamburger").click(function () {
                $(".jquery-sub-dropdown-menu").slideToggle("slow", function () {
                    $(".hamburger").hide();
                    $(".cross").show();
                });
            });

            $(".cross").click(function () {
                $(".jquery-sub-dropdown-menu").slideToggle("slow", function () {
                    $(".cross").hide();
                    $(".hamburger").show();
                });
            });


            $('#menu-gallery-junior a').click(function () {
                if (winWidth <= 640) {
                    window.location.href = base_url + 'junior-suite-room-gallery.html';
                }
            });
            $('#menu-gallery-panoramic a').click(function () {
                if (winWidth <= 640) {
                    window.location.href = base_url + 'panoramic-suite-room-gallery.html';
                }
            });
            $('#menu-gallery-executive a').click(function () {
                if (winWidth <= 640) {
                    window.location.href = base_url + 'executive-suite-room-gallery.html';
                }
            });
        })
        .fail(function () {
            console.log('all images loaded, at least one is broken');
        })
        .progress(function (instance, image) { // Laoding
            var result = image.isLoaded ? 'loaded' : 'broken';
            console.log('image is ' + result + ' for ' + image.img.src);
        });
});