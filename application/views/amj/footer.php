<footer class="footer on-ipad" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="on-ipad book-right-now">
                <div>
                    <a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25"
                       target="_blank">
                        Book right here
                    </a>
                </div>
            </div>

            <ul class="menu-footer">
                <li role="presentation" class="<?php if ($page_name == "room") echo "active"; ?>">
                    <a href="<?php echo base_url('/executive-suite-room.html') ?>">
                        Rooms & Suites
                    </a>
                </li>
                <li role="presentation" class="<?php if ($page_name == "business") echo "active"; ?>">
                    <a href="<?php echo base_url('/large-suites-for-frequent-travelers.html') ?>">
                        Business Travelers
                    </a>
                </li>
                <li role="presentation" class="<?php if ($page_name == "honeyMoon") echo "active"; ?>">
                    <a href="<?php echo base_url('/suite-for-honeymoon-with-heart.html') ?>">
                        Honey Mooners
                    </a>
                </li>
                <li role="presentation" class="<?php if ($page_name == "drinkDinner") echo "active"; ?>">
                    <a href="<?php echo base_url('/kwest-restaurant-and-lounge.html') ?>">
                        DRINKING & DINING
                    </a>
                </li>
                <li role="presentation" class="<?php if ($page_name == "contact") echo "active"; ?>">
                    <a href="<?php echo base_url('/contact.html') ?>">
                        Contact & Find Us
                    </a>
                </li>
                <li role="presentation" class="<?php if ($page_name == "gallery") echo "active"; ?>">
                    <a href="<?php echo base_url('/gallery.html') ?>">
                        Gallery
                    </a>
                </li>
                <?php if ($page_name != "home") { ?>
                    <li role="presentation" class="pull-right">
                        <a href="<?php echo base_url() ?>">
                            Home
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</footer>

<footer class="all-menu-footer">

    <?php if ($page_name != "home" && false) { ?>
        <a href="<?php echo base_url() ?>" class="btn-home">home</a>
    <?php } ?>

    <div class="container">
        <ul class="nav nav-pills" id="footer-menu">
            <li role="presentation" class="<?php if ($page_name == "room") echo "active"; ?>">
                <a href="<?php echo base_url('/executive-suite-room.html') ?>">
                    <svg class="menu-icon" id="icon-suites" viewBox="0 0 1024 1024">
                        <path class="path"
                              d="M892.416 403.456l-357.888-166.4c-0.512-1.024-2.56-1.536-2.56-2.048v-43.008c0-7.68-6.144-12.288-13.824-12.288h-3.072c-33.792 0-61.44-28.672-61.44-62.976s27.648-62.464 61.952-62.464c34.304 0 61.952 27.648 61.952 61.44 0 9.216 7.68 16.896 16.896 16.896s16.896-7.68 16.896-17.408c0-52.736-43.008-96.256-96.256-96.256-52.736 0-97.28 43.008-97.28 95.744 1.024 48.128 37.888 87.552 78.848 95.232v29.184l-294.4 135.68c-30.72 8.704-86.528 42.496-86.528 105.984 0 67.072 58.368 82.432 89.088 87.552h30.72v373.248c0 18.432 13.312 31.232 31.744 31.232h480.768c18.432 0 35.328-12.8 35.328-31.232v-373.248h79.872l3.072-2.56c2.56-1.024 60.416-27.136 60.416-85.504 0-56.832-30.208-74.752-34.304-76.8zM856.064 532.48h-72.704v-16.384c0-18.432-16.896-34.816-35.328-34.816h-480.768c-18.432 0-31.744 16.384-31.744 34.816v16.384h-30.72c-5.632 0-54.784-3.072-54.784-52.736 0-54.272 60.416-71.68 62.976-72.192l1.536-0.512 304.64-139.776 357.888 166.4c2.56 1.536 15.36 12.8 15.36 46.080 0.512 30.72-27.136 47.616-36.352 52.736z"></path>
                    </svg>
                    Rooms & Suites
                </a>
            </li>
            <li role="presentation" class="<?php if ($page_name == "business") echo "active"; ?>">
                <a href="<?php echo base_url('/large-suites-for-frequent-travelers.html') ?>">
                    <svg class="menu-icon" id="icon-business" viewBox="0 0 1024 1024" width="30px" height="30px">
                        <path class="path"
                              d="M841.728 201.728c-56.32-56.32-163.84-78.336-220.672-22.016l-451.072 451.072c-56.32 56.32-56.32 147.968 0 204.288s147.456 56.32 204.288 0l302.592-302.592c56.32-56.32 71.168-133.12 14.848-189.44s-133.12-41.472-189.44 14.848l-197.632 197.632 20.992 20.992 197.632-197.632c44.544-44.544 102.4-59.392 146.944-14.848s29.696 102.4-14.848 146.944l-302.592 302.592c-44.544 44.544-117.248 44.544-161.792 0s-44.544-117.248 0-161.792l451.072-451.072c44.544-44.544 133.632-22.528 178.176 22.016s66.56 133.632 22.016 178.176l-393.728 393.728 20.992 20.992 393.728-393.728c56.832-55.808 34.816-163.84-21.504-220.16z"></path>
                    </svg>
                    Business Travelers
                </a>
            </li>
            <li role="presentation" class="<?php if ($page_name == "honeyMoon") echo "active"; ?>">
                <a href="<?php echo base_url('customize-your-stay-in-phnom-penh.html'); ?>" id="custom_your_stay">
                    <svg class="menu-icon" id="icon-custom" viewBox="0 0 1024 1024">
                        <path class="path"
                              d="M705.024 235.008h-384c5.12-123.392 9.216-114.688 155.136-114.688h72.192c145.408 0 152.064-8.192 156.672 114.688zM706.56 281.088h-387.584l-52.736 243.712c197.12 0 157.696 378.88 220.672 378.88 2.56 0 7.168 0 8.192 0v-277.504c-26.112-7.68-45.568-31.744-45.568-60.416 0-34.816 28.16-62.976 62.976-62.976s62.976 28.16 62.976 62.976c0 28.672-18.944 52.736-45.568 60.416v277.504c0.512 0 7.168 0 7.68 0 58.88 0 23.040-378.88 219.648-378.88l-50.688-243.712z"></path>
                    </svg>
                    Customize your stay
                </a>
            </li>
            <li role="presentation" class="<?php if ($page_name == "drinkDinner") echo "active"; ?>">
                <a href="<?php echo base_url('/kwest-restaurant-and-lounge.html') ?>">
                    <svg class="menu-icon" id="icon-dining" viewBox="0 0 1024 1024">
                        <path class="path"
                              d="M676.352 702.976c143.872-63.488 244.224-206.848 244.224-373.76h-817.152c0 166.912 100.352 310.784 244.224 373.76h328.704z"></path>
                        <path class="path" d="M345.088 733.696h329.728v65.024h-329.728v-65.024z"></path>
                    </svg>
                    DRINKING & DINING
                </a>
            </li>
            <li>
                <a href="http://www.hotelcambodia.asia/camrez/index.php?a=k&task=dobooking&selectedProperty=25"
                   target="_blank"
                   class="btn-check">
                    <svg class="btn-icon menu-icon" id="icon-bed" viewBox="0 0 1024 1024">
                        <path class="path"
                              d="M226.611 491.028h115.456v-82.98c0-17.106 15.293-31.053 33.976-31.053 18.744 0 34.038 13.947 34.038 31.053v116.992c0 15.078-11.914 27.668-27.53 30.479-4.869 2.171-10.24 3.487-16.041 3.487h-139.899c-20.454 0-37.279-15.288-37.279-33.966 0-18.714 16.824-34.012 37.279-34.012zM261.432 474.885c42.153 0 76.58-34.396 76.58-76.616 0-42.184-34.427-76.616-76.58-76.616-42.184 0-76.58 34.432-76.58 76.616 0 42.22 34.396 76.616 76.58 76.616zM435.973 494.484c0 0.031 0 0.138 0 0.179v67.83h390.615v-118.697c0-36.741-30.013-66.801-66.836-66.801h-256.983c-2.243 0-4.444 0.072-6.615 0.317h-61.251v91.807h1.070v25.364zM933.688 531.369v-118.697c0-22.159-18.104-40.335-40.264-40.335-22.231 0-40.335 18.176-40.335 40.335v169.38h-680.97v-268.442c0-23.444-18.606-42.65-41.37-42.65-22.728 0-41.37 19.205-41.37 42.65v268.442h-0.215v100.234h0.215v71.46c0 0.425 0.108 0.855 0.108 1.275v60.047h82.632v-132.777h680.97v123.315h81.741v-274.237h-1.142z"></path>
                    </svg>

                    <div class="btn-text">
                        check <br> availability
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <a href="<?php echo base_url('/contact.html') ?>" id="btn_contact_us">
        <svg class="menu-icon" id="icon-pin" viewBox="0 0 1024 1024">
            <path class="path"
                  d="M512.002 0c-186.768 0-338.714 151.947-338.714 338.712 0 75.223 48.035 197.862 146.842 374.927 69.892 125.235 138.634 229.658 141.522 234.041l50.35 76.32 50.348-76.318c2.89-4.385 71.637-108.806 141.52-234.041 98.811-177.067 146.842-299.704 146.842-374.927 0.002-186.768-151.945-338.714-338.71-338.714zM512.002 512c-96.966 0-175.575-78.607-175.575-175.575s78.609-175.575 175.575-175.575c96.966 0 175.575 78.607 175.575 175.575s-78.611 175.575-175.575 175.575z"></path>
        </svg>

        <span>
        Contact us<br>
        & Find Us
        </span>
    </a>
</footer>

</div>

<script src="<?php echo base_url('/public/js/photoswipe.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/js/photoswipe-ui-default.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('/public/js/photoswipe-custom.js') ?>" type="text/javascript"></script>

</body>
</html>