<?php $this->load->view('amj/header') ?>

<div class="wrap-navigation-bgstratcher">
    <div class="bgstratcher-next">
        <a href="javascript:;" id="next" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/next.png') ?>" alt="suites hotel phnom penh" ></a>
    </div>
    <div class="bgstratcher-prev">
        <a href="javascript:;" id="prev" style="position: relative; z-index: 4;"><img src="<?php echo base_url('public/images/prev.png') ?>" alt="suites hotel phnom penh" ></a>
    </div>
</div>

<script>
$(document).ready(function() {
    var winWidth = $(window).width();
    if(winWidth > 1024) {
        $('#stretcher').bgStretcher({
            images: [
                "<?php echo base_url('/public/images/home/amanjaya-suites-cambodia-home.jpg') ?>",          
                "<?php echo base_url('/public/images/home/amanjaya-suites-cambodia-home-2.jpg') ?>",          
                "<?php echo base_url('/public/images/home/amanjaya-suites-cambodia-home-3.jpg') ?>",          
                "<?php echo base_url('/public/images/home/amanjaya-suites-cambodia-home-4.jpg') ?>"         
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
				if(i != 1){
					$('.slider > div.active').removeClass('active').hide(100, function(){
							
							$('#slide'+i).addClass('active').fadeIn(2000);
					});
				}
				else {
					$('.slider > div.active').removeClass('active').hide(100, function(){
							
							$('#slide'+i).addClass('active').hide();
					});
				}
            }
        });
    }
});
</script>

 
<!-- Footer --> 
<div id="wrap-content" class="on-web">
<div class="slider">
            	<div id="slide1" style="display:none;">
                   
                </div>
                <div id="slide2" class="active">
                    <p class="heading">Sophisticated and Central<br>the best suites in town</p>
                   
                </div>
               
                <div id="slide3">
                    <p class="heading">Somptuous Suites<br>overlooking the Mekong River</p>
                   
                </div>
                
                 <div id="slide4">
                    <p class="heading">Balance & harmony,<br>to suggest superiority</p>
                   
                </div>
            </div>
         
    <footer id="hl_content" class="above-footer" role="contentinfo">
    <div class="gallery-default-page">
   	
        <img src="<?php echo base_url("/public/images/home/amanjaya-suites-cambodia-home.jpg"); ?>" alt="Amanjaya Suites Phom Penh" />
    </div>
     <div class="on-mobile">
      <ul class="menu-mobile">
                <li><a href="<?php echo base_url('/executive-suite-room.html'); ?>">ROOMS & SUITES</a></li>
                <li><a href="<?php echo base_url('/large-suites-for-frequent-travelers.html'); ?>">BUSINESS TRAVELERS</a></li>
                <li><a href="<?php echo base_url('/suite-for-honeymoon-with-heart.html'); ?>">HONEYMOONERS</a></li>
                <li><a href="<?php echo base_url('/kwest-restaurant-and-lounge.html'); ?>">DRINKING & DINING</a></li>
                <li><a href="<?php echo base_url('/gallery.html'); ?>">GALLERY</a></li>
                
                <!--<li><a href="#">ABOUT US</a></li>-->
            </ul>
             <div class="menu-contact" style="margin-bottom:0;">
                <ul style="margin-left:20px;">
                 <li>
                   
                       
                         <a href="#" id="gocontact">
                                       
                                        <div class=" lists icon"><img src="<?php echo base_url('public/images/arrow-circle-white3.svg'); ?>" width="35" alt="suites hotel phnom penh" /></div><div class="text">CONTACT US</div>
                       </a>
                    </li>
                </ul>
                </div>
            </div>
        <div class="menu-tabs-rooms hidden-from-mobile">
            <div class="container wrap-hl-menu">
                <ul id="hl-menu" class="all-page">
                    <li class="h1-menu-tabs-two"><a href="#hotel-overview">Hotel Overview</a></li>
                    <!-- <li><a href="#suites">Large suites with View</a></li> -->
                    <li class="h1-menu-tabs-two"><a href="#central">Central for Business</a></li>
                </ul>
            </div>
        </div>
        <div id="hl-menu-content">
            <div id="hotel-overview">
                <div id="features" class="text-left">

                    <div class="col-sm-6">
                        <div class="box-border">
                            <div class="hotel-overview">
                                Enjoy a truly <b>Cambodian experience</b> with all the western comfort you need at
                                <h1>AMANJAYA Pancam Suites Hotel</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box-intro">
                            <p>Built on Phnom Penh’s riverside in 2002, the **AMANJAYA Pancam Suites Hotel** was the first property to offer high-grade quality service in the Capital.</p>
                            <p>Erected in the French Colonial style, the hotel features <strong>21 generous suites</strong>, elegantly decorated with local materials: from rosewood to Cambodian raw silk. Every room bears a stunning <strong>riverscape</strong> on the Tonle Sap river and the vibrant life of the Cambodian’s capital city.</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <div id="central" class="hidden-from-mobile">
                <div class="video">
                    <video autoplay loop >
                        <source src="<?php echo base_url('public/videos/aph-front-business5.mp4') ?>" type="video/mp4">
                        <source src="<?php echo base_url('public/videos/aph-front-business5.webm') ?>" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div id="features">
                    <p><b>AMANJAYA Pancam Suites Hotel</b> is one very central property, a hop away from many key points in the city: ministries and official bodies, banking and business areas, shopping centres and entertainment attractions.</p>
                    <p>Check out our <a href="<?php echo base_url('/large-suites-for-frequent-travelers.html'); ?>">Business Travelers</a> page to discover our targeted services and special offers.</p>
                </div>
            </div>
        </div>
        
    </footer>
    
<?php $this->load->view('amj/footer') ?>