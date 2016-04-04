<?php $this->load->view('amj/header') ?>
<style>
    #stretcher{
        background:url('<?php echo base_url("/public/images/honeymoon/amanjaya-honeymoon-2.jpg"); ?>') no-repeat fixed;
        background-position: center;
        background-size: cover;
    }
</style>
    <!-- Footer -->
<div id="wrap-content" class="on-web">
    <footer id="hl_content" class="above-footer" role="contentinfo">
        <div class="gallery-default-page">
        <h1>honey mooners</h1>
            <img src="<?php echo base_url("/public/images/honeymoon/amanjaya-honeymoon-2-thumb.jpg"); ?>" alt="" />
        </div>
        <div class="container">
            <ul id="hl-menu" class="wrap-accordion">
                <li id="honeymoon-in-pp" class="honeymoon-tabs h1-menu-tabs-two"><a href="#honeymoon-in-pp-content">UNFORGETABLE HONEYMOON</a></li>
                <li id="packages" class="honeymoon-tabs h1-menu-tabs-two"><a href="#packages-content">PACKAGES</a></li>
            </ul>
        </div>
        <div id="hl-menu-content">
            <div id="honeymoon-in-pp-content">
                <div id="features" class="text-left">
                    <div class="col-sm-6">
                        <p>We will first treat you with a suite nicely decorated with roses and a pair of Cambodia scarves. And to truly enjoy the comfort of our spacious suite, let enjoy a delicious cocktail on the balcony overlooking the Tonlé Sap river, relax with a hot bath in our roomy bathtub, or savor a delicate dinner in the cosy atmosphere of the lounge area.
                        To make your stay a really romantic experience, let us take care of your honeymoon trip. 
                        Our friendly staff can arrange for you:</p>
                    </div>
                    <div class="packages-text-center col-sm-6 text-center text-uppercase">
                        <p>A <span class="text-red">sunset cruise</span> on the river</p>
                        <p>A <span class="text-red">romantic dinner</span> in the restaurant of your choice</p>
                        <p>A city tour to <span class="text-red">discover the charms</span> of Phnom Penh</p>
                        <p>A shooting of your <span class="text-red">best moments</span> in Phnom Penh with a professional photographer</p>
                        <p>A <span class="text-red">massage for two</span> at the most valued Spa just 2 minutes walk from our hotel or best, in your room.</p>
                    </div>
                </div>
            </div>
            <div id="packages-content">
                <div id="features" class="text-left">
                    <ul>
                        <li>
                        <div class="honey_price">
                            <p><img src="<?php echo base_url('/public/images/twoheart.png') ?>"></p>
                            <h3 class="text-uppercase">Stay 2 nights <br /><b>for just $320</b></h3>
                            <p class="honeymoon-package-text">(Incl. of breakfast for 2 and all taxes)</p>
                         </div>   
                        </li>
                        <li>
                            <h3 class="text-uppercase honeymoon-package-title">INCLUDES:</h3>
                            <p>Accommodation in one of our <span>Junior Suite for 2 nights</span> (Upgrade to Panoramic or Executive suite, add US$50)<br />
                            <span>Free Welcome drink</span>, fruit basket, rose decoration and Cambodian scarves<br />
                            60-minute special "<span>Couple Massage</span>" at <a href="http://www.bodia-spa.com/" target="_blank">BODIA SPA</a> (add US$190 for half day treatment)<br />
                            A <span>Sunset cruise</span> on <a href="http://www.phoceamekong.com/" target="_blank">Phoceamekong</a> boat with cocktails and tapas<br />
                            <span>2 Free drinks</span> at <a href="<?php echo base_url('/le-moon-bar.html') ?>" target="_blank">Le Moon</a> rooftop bar</p>
                        </li>
                        <li class="extra">
                            <h3 class="text-uppercase honeymoon-package-title honeymoon-package-title-bg">ADD++:</h3>
                            <p>A bottle of <b>MOET &amp; CHANDON</b> +$90<br />
                            A 2-hour professional <b>photo session</b> +US$250<br />
                            A <b>romantic diner</b> at KWEST restaurant + US$60<br />
                             </p>
                              <div class="package_form">
                              
                            <form method="post" id="package_send" class="form" role="form">
                             <div class="form-group">
                             <input type="text" name="email" id="email" class="form-control">
                             </div>
                              <div class="form-group">
                                <button type="submit" id="package_honey" class="package_honey"><span class="pic-heart"></span>email me more detail</button>
                            </div>
                            </form>
                          <div id="honey_success"></div>
                           </div>
                        </li>
                    </ul>
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
            if($('.honeymoon-tabs').hasClass('default'))
            {
                $('#first').show();
                $('#second').hide();
            }/*End Custom*/
        });
    </script>
<?php $this->load->view('amj/footer') ?>