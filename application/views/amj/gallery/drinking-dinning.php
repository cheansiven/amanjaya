<?php $dir = ''; if( stristr($_SERVER['HTTP_USER_AGENT'],'iphone') || strstr($_SERVER['HTTP_USER_AGENT'],'android') ) $dir = 'thumb/'; ?>
<?php $this->load->view('amj/header') ?>
    <style>
        #stretcher{
            background: #000000;
            /*background:url('<?php echo base_url("/public/images/contact/amanjaya-suites-bath.jpg"); ?>') no-repeat fixed;
            background-position: center;
            background-size: cover;*/
        }
    </style>
    <!-- Footer -->
<div class="on-web">
    <footer id="hl_content" class="above-footer wrap-gallery" role="contentinfo">
        <div id="gallery-albums" class="container" itemscope itemtype="http://schema.org/ImageGallery">
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside1.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside1.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside2.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside2.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside3.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside3.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside3-tn.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside3-tn.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside4.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside4.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside5.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside5.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'kwest-restaurant-riverside6.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/kwest-restaurant-riverside6.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'rootop-bar-lemoon-1.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/rootop-bar-lemoon-1.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'rootop-bar-lemoon-2.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/rootop-bar-lemoon-2.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
            <figure class="gallery-items" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?php echo base_url('public/images/gallery/drinking-dinning/'.$dir.'rootop-bar-lemoon-3.jpg') ?>" itemprop="contentUrl" data-size="1920x1080">
                    <img src="<?php echo base_url('public/images/gallery/drinking-dinning/thumb/rootop-bar-lemoon-3.jpg') ?>" itemprop="thumbnail" alt="riverside hotel cambodia" />
                </a>
                <figcaption itemprop="caption description">Kwest restaurant riverside</figcaption>
            </figure>
        </div>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe.
                 It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--share" title="Share"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                    </button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                    </button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>

                </div>

            </div>

        </div>
    </footer>
<?php $this->load->view('amj/gallery/gallery-footer') ?>