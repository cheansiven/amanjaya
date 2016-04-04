<?php $this->load->view('amj/header') ?>


<div class="wrap-navigation-bgstratcher">
    <div class="bgstratcher-next">
        <a href="javascript:;" id="next" style="position: relative; z-index: 4;"><img
                src="<?php echo base_url('public/images/next.png') ?>"></a>
    </div>
    <div class="bgstratcher-prev">
        <a href="javascript:;" id="prev" style="position: relative; z-index: 4;"><img
                src="<?php echo base_url('public/images/prev.png') ?>"></a>
    </div>
</div>

<script>
    $(document).ready(function () {
        var winWidth = $(window).width();
        if (winWidth > 1024) {
            $('body').bgStretcher({
                images: [
                    "<?php echo base_url('/public/images/business/amanjaya-means-business-1.jpg') ?>",
                    "<?php echo base_url('/public/images/business/amanjaya-means-business-2.jpg') ?>",
                    "<?php echo base_url('/public/images/business/amanjaya-means-business-4.jpg') ?>",
                    "<?php echo base_url('/public/images/business/amanjaya-means-business-5.jpg') ?>",
                ],

                imageWidth: 1920,
                imageHeight: 1080,
                slideDirection: 'W',
                slideShowSpeed: 1400,
                nextSlideDelay: 5000,
                transitionEffect: 'superSlide',
                sequenceMode: 'normal',
                slideShow: false,
                buttonPrev: '#prev',
                buttonNext: '#next',
                pagination: '#nav',
                anchoring: 'left center',
                anchoringImg: 'left center',
                callbackfunction: function () {
                    var i = $('#bgstretcher .bgs-current').index('#bgstretcher li') + 1;
                    $('.slider > div.active').removeClass('active').stop().animate({
                        marginTop: -$(this).height(),
                        opacity: 0
                    }, 1500, function () {
                        $(this).hide().css("margin-top", "0px");
                        $('#slide' + i).addClass('active').show().animate({opacity: 1}, 700, 'easeInExpo');
                    });
                }
            });
        }
    });
</script>

<div id="wrap-content" class="on-web">

    <div id="popup-background">&nbsp;</div>

    <div id="custom_your_stay_popup" class="popup-wrapper">

        <div class="popup-container">

            <div class="popup-header">
                <p class="btn-close">close X</p>
            </div>

            <div class="popup-body">
                <div class="popup-sidebar">
                    <ul>
                        <li>
                            <a href="#" data-target="#honey-moon">Honey Moon</a>
                        </li>
                        <li>
                            <a href="#" data-target="#cambodian-experience">
                                Cambodian Experience
                            </a>
                        </li>
                        <li>
                            <a href="#" data-target="#visiting-phnompehn">
                                Visiting Phnom Penh
                            </a>
                        </li>
                        <li>
                            <a href="#" data-target="#massage">
                                Massage
                            </a>
                        </li>
                        <li>
                            <a href="#" data-target="#mekong-cruise">
                                Mekong Cruise
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="popup-content">
                    <div id="honey-moon" class="popup-content-section">
                        <p>
                            <img src="<?php echo base_url('/public/images/customize-your-stay/aph.jpg') ?>" alt="honey moon" style="width: 100%">
                        </p>
                        <p>
                            We will first treat you with a suite nicely decorated with roses and a pair of Cambodia scarves. And to truly enjoy the comfort of our spacious suite, let enjoy a delicious cocktail on the balcony overlooking the Tonlé Sap river, relax with a hot bath in our roomy bathtub, or savor a delicate dinner in the cosy atmosphere of the lounge area. To make your stay a really romantic experience, let us take care of your honeymoon trip. Our friendly staff can arrange for you:
                        </p>
                        <ul class="arrangement_list">
                            <li>A <span class="text-red">sunset cruise</span> on the river</li>
                            <li>A <span class="text-red">romantic dinner</span> in the restaurant of your choice</li>
                            <li>A city tour to <span class="text-red">discover the charms</span> of Phnom Penh</li>
                            <li>A shooting of your <span class="text-red">best moments</span> in Phnom Penh with a professional photographer</li>
                            <li>A <span class="text-red">massage for two</span> at the most valued Spa just 2 minutes walk from our hotel or best, in your room.</li>
                        </ul>
                    </div>
                    <div id="cambodian-experience" class="popup-content-section">
                        <p>
                            Stay at Phnom Penh's ultimate place for business, just 40mn drive from the airport and centrally located. Our property is the best starting point of your busy day, few minutes away from:
                        </p>
                        <ul class="no_style_list">
                            <li>The bank headquarters area</li>
                            <li>Most of ministries and governmental bodles</li>
                            <li>Conference halls</li>
                            <li>Shopping and entertainment centres</li>
                        </ul>
                        <p>
                            Our Suites offer you a superb array of amenities ensure comfort and your successful trip to Phnom Penh.
                        </p>
                        <ul class="no_style_list">
                            <li>High speed WIFI connection</li>
                            <li>Roomy working desk and comfy lounge area</li>
                            <li>Large TV screen with more than 60 international channels</li>
                            <li>Furnished balcony with view on the river</li>
                        </ul>
                    </div>
                    <div id="visiting-phnompehn" class="popup-content-section">
                        <h2>Coming soon...</h2>
                    </div>
                    <div id="massage" class="popup-content-section">
                        <h2>Coming soon...</h2>
                    </div>
                    <div id="mekong-cruise" class="popup-content-section">
                        <h2>Coming soon...</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="<?php echo base_url('/public/malihu-scrollbar/jquery.mCustomScrollbar.js') ?>"></script>

    <script>
        $(function(){
            $(window).load(function(){
                $(".popup-content").mCustomScrollbar();
            });
        });
        // This is a functions that scrolls to #{blah}link
        function gotToPopUpContent(selector) {
            $('#custom_your_stay_popup .popup-content').animate({
                scrollTop: $(selector).offset().top
            }, 'slow');
        }

        $(document).ready(function () {
            $('.all-menu-footer').addClass('under-popup');

            $('#custom_your_stay').parent().addClass('active');

            //auto show honey moon
            $('.popup-sidebar li:first-child a').trigger('click');
        });

        $(function () {
            $('.popup-sidebar>ul>li>a').click(function (e) {
                e.preventDefault();

                $(this).closest('.popup-sidebar').find('li').removeClass('active');
                $(this).parent().addClass('active');

                //gotToPopUpContent($(this).attr('data-target'));
                $('.popup-content-section').hide();
                $($(this).attr('data-target')).show("slide", {direction: "up"}, 600);
            });
        });

        $(function () {
            $('#custom_your_stay').click(function () {
                $('#footer-menu>li').removeClass('active');
                $(this).parent().addClass('active');

                $('#custom_your_stay_popup').show();
                $('#popup-background').show();

                $('#custom_your_stay_popup').find('.popup-body').trigger('resize');
                $('#custom_your_stay_popup').find('.popup-container').show("slide", {direction: "down"}, 600);

                $('.popup-sidebar li:first-child a').trigger('click');
                $('.all-menu-footer').addClass('under-popup');
            });

            $('.btn-close').click(function () {
                $(this).closest('.popup-container').hide("slide", {direction: "down"}, 600);

                setTimeout(function () {
                    $('#custom_your_stay_popup').hide();
                    $('#popup-background').hide();
                    $('.all-menu-footer').removeClass('under-popup');
                }, 600);
            });
        });
    </script>

<?php $this->load->view('amj/footer') ?>