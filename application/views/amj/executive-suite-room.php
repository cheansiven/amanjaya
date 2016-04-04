<?php $this->load->view('amj/header') ?>

<div class="wrap-navigation-bgstratcher">
  <div class="bgstratcher-next"> <a href="javascript:;" id="next" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/next.png') ?>"></a> </div>
  <div class="bgstratcher-prev"> <a href="javascript:;" id="prev" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/prev.png') ?>"></a> </div>
</div>
<script>
$(document).ready(function() {
    var winWidth = $(window).width();
    if(winWidth > 1024) {
        $('body').bgStretcher({
            images: [
                "<?php echo base_url('/public/images/executive-suite-room/amanjaya-suites-executive1.jpg') ?>",
                "<?php echo base_url('/public/images/executive-suite-room/amanjaya-suites-executive2.jpg') ?>",
                "<?php echo base_url('/public/images/executive-suite-room/amanjaya-suites-executive3.jpg') ?>",
                "<?php echo base_url('/public/images/executive-suite-room/amanjaya-suites-executive4.jpg') ?>",
                "<?php echo base_url('/public/images/executive-suite-room/amanjaya-suites-executive5.jpg') ?>",
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
      <h1>Executive Suite</h1>
      <div class="swiper-container">
        <div class="swiper-wrapper">
         <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-1.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-2.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-3.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-4.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-5.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-6.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-7.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-8.jpg') ?>" /></div>
          <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-9.jpg') ?>" /></div>
           <div class="swiper-slide"><img src="<?php echo base_url('/public/images/executive-suite-room/mobile/executive-suites-10.jpg') ?>" /></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="menu-tabs-rooms">
      <div class="menu-tabs-rooms">
        <div class="container wrap-hl-menu">
          <ul id="hl-menu" class="room-page wrap-accordion">
            <li id="menu-overview"><a href="#overview">Overview</a></li>
            <li id="menu-amenities"><a href="#amenities">Amenities</a></li>
            <li id="menu-pricing"><a href="#pricing">Pricing</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div id="hl-menu-content" class="room-page">
      <div id="overview" class="room_content">
        <div class="col-sm-6">
          <div class="box-border">
            <h3 class="text-executive">A memorable experience<br />
              of luxury stay<br />
              in Phnom Penh</h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="box-intro">
            <p>Gratify yourself with one of our 3 Executive suites, stretched over 90 sqm! More than a guest room, these exclusive suites feature genuine living area, a spacious lounge corner with a sofa and 3 armchairs and a comfortable working desk. They are all harmoniously decorated with Cambodian raw silk, handmade artefacts replicas, over a well-polished local cherrywood Flooring. All the furniture was also made to-order in the same wood. </p>
            <p>For business or leisure, this room is your ultimate base in the capital.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div id="amenities" class="room_content">
        <div class="col-sm-4">
          <p><b class="text-executive">Private balcony</b> overlooking the river and/or the pagoda</p>
          <p>Comfortable <b class="text-executive">Lounge area</b> and large working desk</p>
          <p>Fully equipped <b class="text-executive">mini bar</b></p>
          <p>In-room <b class="text-executive">Tea and Coffee</b> facilities</p>
          <!-- <p>Large <b class="text-executive">wardrobe</b> and full size mirror</p> --> 
        </div>
        <div class="col-sm-4">
          <p>Electronic <b class="text-executive">safe</b>, IDD phone</p>
          <p>Individual A/c with manual temperature control</p>
          <p>Separate bathtub and shower room</p>
          <p>Hair dryer; Make-up/magnifying mirror</p>
          <p>Amanjaya signature bathroom amenities, <b class="text-executive">Bathrobe</b> and slippers</p>
          <p><b class="text-executive">Fresh fruit</b> basket on arrival</p>
        </div>
        <div class="col-sm-4">
          <p>Complimentary high bandwidth <b class="text-executive">WIFI</b></p>
          <p>Complimentary <b class="text-executive">drinking water</b> refilled daily</p>
          <!-- <p>Daily <b class="text-executive">local newspaper</b> in English language – Other newspapers available at a charge</p> -->
          <p>Available at the Front Desk: DVD Player, Ironing board and iron</p>
          <p><b class="text-executive">26” Flat Screen TV</b> with more than 60 international cable channels</p>
          <!-- <p><b class="text-executive">Daily laundry</b> service and dry cleaning at a charge</p> --> 
        </div>
        <div class="clearfix"></div>
      </div>
      <div id="pricing">
        <div class="col-sm-6">
          <div class="box-price">
            <p class="text-executive">high season<br />
              US$190.00</p>
            <p class="note">from October to March</p>
          </div>
          <div class="box-price">
            <p class="text-executive">low season<br />
              US$180.00</p>
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
            <p class="pricing-note text-executive">All rates quoted are in US Dollars and are inclusive of A la carte Breakfast and Taxes (10% VAT & 2% Accommodation Tax). Please note that Rates are subject to change according to possible amendment of Government Policies.</p>
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
          <li class="<?php if($page_name == 'junior-suite') echo 'active'; ?>"> <a href="<?php echo base_url('junior-suite-room.html') ?>">Junior Suite</a> </li>
          <li class="<?php if($page_name == 'panoramic-suite') echo 'active'; ?>"> <a href="<?php echo base_url('panoramic-suite-room.html') ?>">Panoramic Suite</a> </li>
          <li class="<?php if($page_name == 'executive-suite') echo 'active'; ?>"> <a href="<?php echo base_url('executive-suite-room.html') ?>">Executive Suite</a> </li>
          <li class="<?php if($page_name == "contact") echo "active"; ?> pull-right"> <a href="<?php echo base_url('/contact.html') ?>">Contact & Find Us</a> </li>
          <?php if($page_name != "home") { ?>
          <li class="pull-right"> <a href="<?php echo base_url() ?>">Home</a> </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </footer>
  <footer class="room-menu-footer executive-page"> <a href="<?php echo base_url() ?>" class="btn-home">home</a>
    <div class="container">
      <ul class="nav nav-pills">
        <li role="presentation"><a href="<?php echo base_url('junior-suite-room.html') ?>">Junior Suite</a></li>
        <li role="presentation"><a href="<?php echo base_url('panoramic-suite-room.html') ?>">Panoramic Suite</a></li>
        <li role="presentation" class="active"><a href="#">Executive Suite</a></li>
      </ul>
    </div>
    <a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25" target="_blank" class="btn-check">check availability</a> </footer>
  <div class="mobile_next" >
    <div class="white_space"></div>
    <div class="next_page" ><a href="<?php echo base_url('junior-suite-room.html') ?>">Junior Suite</a></div>
  </div>
</div>
<?php $this->load->view('amj/slider') ?>
</body></html>