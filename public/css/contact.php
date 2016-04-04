<?php $this->load->view('amj/header') ?>

<style>
    #stretcher {
        background: url("<?php echo base_url("/public/images/business/amanjaya-means-business-3.jpg"); ?>") no-repeat fixed center;
        background-size: cover;
    }
</style>

<!-- Footer -->
<div id="wrap-content" class="on-web">
    <footer id="hl_content" class="above-footer" role="contentinfo">
        <div class="menu-tabs-rooms">
            <div class="container wrap-hl-menu">
                <ul id="hl-menu">
                    <li class="h1-menu-tabs-two"><a href="#suites">Contact us</a></li>
                    <li class="h1-menu-tabs-two"><a href="#central">Find us</a></li>
                </ul>
            </div>
        </div>

        <!--Button Popup-->
        <a id="btn-popup" href="#" data-reveal-id="popupSuccess"></a>

        <div id="hl-menu-content" class="wrap-map">
            <div id="suites">
                <div id="quick-form-booking">

                    <form id="contactForm" class="form" method="post"
                          action="<?php echo base_url('/amanjaya/contactForm') ?>">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="name">Name*</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="name" required/>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <div class="col-sm-4"><label for="email">Email*</label></div>
                            <div class="col-sm-4"><input type="email" name="email" id="email" required/></div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <div class="col-sm-4"><label for="phone">phone number</label></div>
                            <div class="col-sm-4"><input type="text" name="phone" id="phone"/></div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <input type="submit" id="submit" value="SEND"/>
                        </div>
                    </form>
                    <div id="ajaxSuccess"></div>
                </div>
                <div id="contactText" class="contect-text">
                    <p>#1 Street 154<br/>[ corner with Sisovath Quay ]<br/>
                        Phnom Penh Kingdom of Cambodia</p><br>

                    <p>T +855 (0) 23 21 47 47<br/>
                        F +855 (0) 23 21 95 45</p>
                </div>

                <div id="hoteline" class="hoteline">
                    <p class="text">HOTLINE</p>
                    <p class="phone">+855(0) 15 41 47 47</p>
                    <hr>
                    <div class="hour">24/7</div>
                    <hr>
                </div>


            </div>
            <div id="central" class="map-full-width" style="display:block">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.7611264437137!2d104.9301673!3d11.568974599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951491fada741%3A0x9f0162265b7a4bc6!2sAmanjaya+Pancam!5e0!3m2!1sen!2skh!4v1439288375753"
                    width="100%" height="146" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </footer>

    <?php if ($this->session->userdata('message')) { ?>
        <script>
            $(document).ready(function () {
                $("#btn-popup").trigger("click");
                setTimeout(function () {
                    $('a.close-reveal-modal').trigger('click');
                }, 5000);
            });
        </script>
    <?php }
    $this->session->sess_destroy(); ?>

    <footer class="footer on-ipad" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="on-ipad book-right-now">
                    <div>
                        <a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25" target="_blank">Book right here</a></div>
                </div>

                <ul class="menu-footer">
                    <li role="presentation" class="<?php if ($page_name == "room") echo "active"; ?>">
                        <a href="<?php echo base_url('/junior-suite-room.html') ?>">Rooms & Suites</a>
                    </li>
                    <li role="presentation" class="<?php if ($page_name == "business") echo "active"; ?>">
                        <a href="<?php echo base_url('/large-suites-for-frequent-travelers.html') ?>">Business
                            Travelers</a>
                    </li>
                    <li role="presentation" class="<?php if ($page_name == "honeyMoon") echo "active"; ?>">
                        <a href="<?php echo base_url('/suite-for-honeymoon-with-heart.html') ?>">Honey Mooners</a>
                    </li>
                    <li role="presentation" class="<?php if ($page_name == "drinkDinner") echo "active"; ?>">
                        <a href="<?php echo base_url('/kwest-restaurant-and-lounge.html') ?>">DRINKING & DINING</a>
                    </li>
                    <li role="presentation" class="<?php if ($page_name == "contact") echo "active"; ?>">
                        <a href="<?php echo base_url('/contact.html') ?>">Contact & Find Us</a>
                    </li>
                    <?php if ($page_name != "home") { ?>
                        <li role="presentation" class="pull-right">
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </footer>

    <script src="<?php echo base_url('/public/js/photoswipe.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/photoswipe-ui-default.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/public/js/photoswipe-custom.js') ?>" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#hl-menu li a:eq(1)')
                .trigger("click")
                .parent()
                .addClass('default');
            /*Pheakdey Custom*/
            $(this).parents().removeClass('default');

        });
    </script>

    <?php $this->load->view('amj/footer') ?>
