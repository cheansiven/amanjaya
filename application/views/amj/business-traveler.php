<?php $this->load->view('amj/header') ?>

<div class="wrap-navigation-bgstratcher">
    <div class="bgstratcher-next">
        <a href="javascript:;" id="next" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/next.png') ?>"></a>
    </div>
    <div class="bgstratcher-prev">
        <a href="javascript:;" id="prev" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/prev.png') ?>"></a>
    </div>
</div>

<script>
$(document).ready(function() {
    var winWidth = $(window).width();
    if(winWidth > 1024) {
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
            callbackfunction: function() {
                var i = $('#bgstretcher .bgs-current').index('#bgstretcher li') + 1;
                $('.slider > div.active').removeClass('active').stop().animate({
                    marginTop: -$(this).height(), 
                    opacity: 0}, 1500, function(){
                        $(this).hide().css("margin-top", "0px");
                        $('#slide'+i).addClass('active').show().animate({opacity: 1}, 700, 'easeInExpo');
                });
            }
        });
    }
});
</script>

<!-- Footer -->
<div id="wrap-content" class="on-web">
    <footer id="hl_content" class="above-footer" role="contentinfo">
        <div class="gallery-default-page">
        <h1>Business travellers</h1>
            <img src="<?php echo base_url("/public/images/business/business-1.jpg"); ?>" alt="" />
        </div>
        <div class="menu-tabs-rooms">
        <div class="container wrap-hl-menu">
            <ul id="hl-menu" class="wrap-accordion">
                <li id="menu-ultimate-comfort" class="h1-menu-tabs-two"><a href="#ultimate-comfort">LOCATION AND COMFORT</a></li>
                <li id="menu-our-corporate-offers" class="h1-menu-tabs-two"><a href="#our-corporate-offers">OUR CORPORATE OFFERS</a></li>
            </ul>
        </div>
        </div>
        <div id="hl-menu-content">
            <div id="ultimate-comfort">
                <div id="features" class="text-left">
                    <div class="col-sm-4">
                        <h4 class="tab-title">The only risk by staying at AMANJAYA Pancam Suites hotel once, is to want to come again!</h4>
                    </div>
                    <div class="col-sm-4">
                        <p>Stay at Phnom Penh's ultimate place for business, just 40mn drive from the airport and centrally located. Our property is the best starting point of your busy day, few minutes away from:</p>
                        <ul class="style-disc">
                            <li>The bank headquarters area</li>
                            <li>Most of ministries and governmental bodies</li>
                            <li>Conference halls</li>
                            <li>Shopping and entertainment centres </li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="description">
                            <p>Our Suites offer you a superb array of amenities to ensure comfort and your successful trip to Phnom Penh:</p>
                            <ul class="style-disc">
                                <li>High speed WIFI connection</li>
                                <li>Roomy working desk and comfy lounge area</li>
                                <li>Large TV screen with more than 60 international channels</li>
                                <li>Furnished balcony with view on the river</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="our-corporate-offers">
                <div id="features" class="text-left">
                    <div class="col-sm-4">
                        <p class="text-justify">While our Business centre is accessible 24/7, our diligent Front Desk team will process your check-in in just a couple of minutes, scan, print, fax any document you need, make international or local calls for you. We can book taxis, organise airport pick up or tour arrangement, recommend and book restaurants, set massage appointment in your room, for you without any extra commission.</p>
                    </div>
                    <div class="col-sm-4">
                        <p>May you plan to visit Phnom Penh on a regular basis, we will offer you our Corporate Rates on request. Enjoy special rates the all year long, without concern for high or low season, and benefit from:</p>
                        <ul class="style-disc">
                            <li><span class="text-red">Free</span> laundry services</li>
                            <li><span class="text-red">Free</span> Cocktail on our rooftop bar LE MOON</li>
                            <li><span class="text-red">Free</span> local number</li>
                            <li><span class="text-red">Free</span> late check-out</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="sign-up">
                            <h4 class="border-left-right">JOIN OUR CORPORATE PROGRAM</h4>
                            <span>ENJOY YEAR-ROUND DISCOUNTS FOR YOU<br /> AND YOUR COMPANY</span>
                            <button type="submit" id="btnSignUp" class="btn-signup">JOIN NOW</button>
                        </div>
                    </div>


                    <div class="signup-popup">
                        <form method="post" id="formSignUp" class="form" role="form">
                            <div class="form-radio">
                                <p><input type="radio" value="Mr" name="gender"  checked> Mr</p>
                                <p><input type="radio" value="Mrs" name="gender"> Mrs</p>
                                <p><input type="radio" value="Ms" name="gender"> Ms</p>
                            </div>
                            <div class="form-group">
                                <label for="fname">First name <span class="text-darkred">*</span></label>
                                <input type="text" name="fname" id="fname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lname">Last name <span class="text-darkred">*</span></label>
                                <input type="text" name="lname" id="lname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-darkred">*</span></label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="company">Company name</label>
                                <input type="text" name="company" id="company" class="form-control">
                            </div>


                            <div class="form-group">
                                <button type="submit" id="btnSignUpSubmit" class="btn-signup"><span class="pic-badge"></span> best rates</button>
                            </div>
                        </form>
                        <div id="ajaxSuccess" class="text-center"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    $(document).ready(function() {
        $('#hl-menu li a:eq(0)')
            .trigger("click")
            .removeClass()
            .parent()
            .addClass('default');
        /*Pheakdey Custom*/
        $(this).parents().removeClass('default');
        if($('.h1-menu-tabs-two').hasClass('default'))
        {
            $('#first').show();
            $('#second').hide();
        }/*End Custom*/
    });
    </script>
<?php $this->load->view('amj/footer') ?>