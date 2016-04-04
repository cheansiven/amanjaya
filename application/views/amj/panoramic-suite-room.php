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
                "<?php echo base_url('/public/images/panoramic-suite-room/amanjaya-suites-panoramic1.jpg') ?>",
                "<?php echo base_url('/public/images/panoramic-suite-room/amanjaya-suites-panoramic2.jpg') ?>",
                "<?php echo base_url('/public/images/panoramic-suite-room/amanjaya-suites-panoramic4.jpg') ?>",
                "<?php echo base_url('/public/images/panoramic-suite-room/amanjaya-suites-panoramic7.jpg') ?>",
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
<footer id="hl_content" class="above-footer room-footer" role="contentinfo">
    <div class="gallery-default-page">
    	<h1>Panoramic Suite</h1>
         <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-1.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-2.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-3.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-4.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-5.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-6.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-7.jpg') ?>" /></div>
        <div class="swiper-slide"><img src="<?php echo base_url('/public/images/panoramic-suite-room/mobile/panoramic-suites-8.jpg') ?>" /></div>
      </div>
       <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="menu-tabs-rooms">
        <div class="container wrap-hl-menu">
            <ul id="hl-menu" class="room-page wrap-accordion">
                <li id="menu-overview"><a href="#overview">Overview</a></li>
                <li id="menu-amenities"><a href="#amenities">Amenities</a></li>
                <li id="menu-pricing"><a href="#pricing">Pricing</a></li>
            </ul>
        </div>
    </div>
	<div id="hl-menu-content" class="room-page panoramic-page">
		<div id="overview" class="room_content">

            <div class="col-sm-6">
                <div class="box-border">
                    <h3 class="text-panoramic">Let the Mekong river<br /> charm you!</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box-intro">
                    <p>You will surely fall for the unique charm of our three exclusive Panoramic Suites. Perfectly placed at the angle of our hotel, they offer an astonishing wide-angle perspective on both rivers and the adjacent pagoda.</p>
                    <p>With 50 sqm of volume, each suite reveals a spacious living quarter with a lounge area, a king size bed and a working desk. The Panoramic suites are delicately embraced by sunlight through our wall-to-wall windows and fitted with Cambodian raw silk and rosewood Flooring and furniture.</p>
                </div>
            </div>
            <div class="clearfix"></div>

		</div>
        <div id="amenities" class="room_content">
            <div class="col-sm-4">
                <p><b class="text-panoramic">Private balcony</b> overlooking the river and/or the pagoda</p>
                <p>Comfortable <b class="text-panoramic">Lounge area</b> and large working desk</p>
                <p>Fully equipped <b class="text-panoramic">mini bar</b></p>
              
                <p>In-room <b class="text-panoramic">Tea and Coffee</b> facilities</p>
                <!-- <p>Large <b class="text-panoramic">wardrobe</b> and full size mirror</p> -->
            </div>
            <div class="col-sm-4">
                <p>Electronic <b class="text-panoramic">safe</b>, IDD phone</p>
                <p>Individual A/c with manual temperature control</p>
                <p>Separate bathtub and shower room</p>
                <p>Hair dryer; Make-up/magnifying mirror</p>
                <p>Amanjaya signature bathroom amenities, <b class="text-panoramic">Bathrobe</b> and slippers</p>
                <p><b class="text-panoramic">Fresh fruit</b> basket on arrival</p>
            </div>
            <div class="col-sm-4">
                <p>Complimentary high bandwidth <b class="text-panoramic">WIFI</b></p>
                <p>Complimentary <b class="text-panoramic">drinking water</b> refilled daily</p>
                <!-- <p>Daily <b class="text-panoramic">local newspaper</b> in English language – Other newspapers available at a charge</p> -->
                <p>Available at the Front Desk: DVD Player, Ironing board and iron</p>
                  <p><b class="text-panoramic">26” Flat Screen TV</b> with more than 60 international cable channels</p>
                <!-- <p><b class="text-panoramic">Daily laundry</b> service and dry cleaning at a charge</p> -->
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="pricing">

            <div class="col-sm-6">
                <div class="box-price">
                    <p class="text-panoramic">high season<br /> US$165.00</p>
                    <p class="note">from October to March</p>
                </div>
                <div class="box-price">
                    <p class="text-panoramic">low season<br /> US$155.00</p>
                    <p class="note">from April to September</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box-intro">
                    <h4>Terms and Conditions</h4>
                    <p>For all cancellation arriving 5 days or less before booking date, the first night will be charged.<br />
                    For all no show on the booking date, 100% of the booked stay will be charged.<br />
                    Children under 12 years of age can stay free of charge in parent's room using existing accommodation. Extra beds are available at an extra charge of $45, may you wish so.<br />
                    Breakfast is free of charge for children below 5 years old. Up from 5 years old, breakfast is charged at 7.00USD.<br />
                    Late check out</p>
                    <p class="pricing-note text-panoramic">All rates quoted are in US Dollars and are inclusive of A la carte Breakfast and Taxes (10% VAT & 2% Accommodation Tax). Please note that Rates are subject to change according to possible amendment of Government Policies.</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</footer>

<footer class="footer on-ipad" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="on-ipad book-right-now">
                <div><a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25" target="_blank">Book right here</a></div>
            </div>

            <ul class="menu-footer">
                <li class="<?php if($page_name == 'junior-suite') echo 'active'; ?>">
                    <a href="<?php echo base_url('junior-suite-room.html') ?>">Junior Suite</a>
                </li>
                <li class="<?php if($page_name == 'panoramic-suite') echo 'active'; ?>">
                    <a href="<?php echo base_url('panoramic-suite-room.html') ?>">Panoramic Suite</a>
                </li>
                <li class="<?php if($page_name == 'executive-suite') echo 'active'; ?>">
                    <a href="<?php echo base_url('executive-suite-room.html') ?>">Executive Suite</a>
                </li>

                <li class="<?php if($page_name == "contact") echo "active"; ?> pull-right">
                    <a href="<?php echo base_url('/contact.html') ?>">Contact & Find Us</a>
                </li>
                <?php if($page_name != "home") { ?>
                    <li class="pull-right">
                        <a href="<?php echo base_url() ?>">Home</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</footer>

<footer class="room-menu-footer panoramic-page">
    <a href="<?php echo base_url() ?>" class="btn-home">home</a>
    <div class="container">
        <ul class="nav nav-pills">
            <li role="presentation"><a href="<?php echo base_url('junior-suite-room.html') ?>">Junior Suite</a></li>
            <li role="presentation" class="active"><a href="#">Panoramic Suite</a></li>
            <li role="presentation"><a href="<?php echo base_url('executive-suite-room.html') ?>">Executive Suite</a></li>
        </ul>
    </div>
    <a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25" target="_blank" class="btn-check">check availability</a>
</footer>

<div class="mobile_next" >
    <div class="white_space"></div>
    <div class="next_page" ><a href="<?php echo base_url('executive-suite-room.html') ?>">Executive Suite</a></div>
  </div>
</div>
<?php $this->load->view('amj/slider') ?>
</body>
</html>