
<footer id="gallery-footer" class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="social hidden-from-mobile">
                <ul>
                 
                        <li class="<?php if($page_name == "home") echo "active"; ?>">
                            <a href="<?php echo base_url() ?>">Home</a>
                        </li>
                    
                </ul>
            </div>
            <ul class="menu-footer">
                <li class="<?php if($page_name == "gallery-albums") echo "active"; ?>">
                    <a href="<?php echo base_url('/gallery.html') ?>">Rooms</a>
                </li>
                <li class="<?php if($page_name == "gallery-drinking-dinning") echo "active"; ?>">
                    <a href="<?php echo base_url('/gallery/drinking-and-dinning.html') ?>">DRINKING &amp; Dining</a>
                </li>
                <li class="<?php if($page_name == "hotel") echo "active"; ?>">
                    <a href="<?php echo base_url('/gallery/hotel.html') ?>">Hotel</a>
                </li>
                <!-- <li class="<?php if($page_name == "business") echo "active"; ?>">
                    <a href="#">Business</a>
                </li>
                <li class="<?php if($page_name == "gallery-honeymoon") echo "active"; ?>">
                    <a href="<?php echo base_url('/gallery/honeymoon.html') ?>">Honey Mooners</a>
                </li>
                <li class="blank-menu"></li> -->
                <div class="clear"></div>
            </ul>
        </div>
    </div>
</footer>
</div>


<script src="<?php echo base_url('/public/js/photoswipe.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/js/photoswipe-ui-default.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/js/photoswipe-custom.js') ?>" type="text/javascript"></script>
</body>
</html>