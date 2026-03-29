<!-- including header secition -->
<?php 
$title="About Us || Flipin India Pvt. Ltd.";
$dir="aboutus";
include('structure/header.php'); ?>
<!-- End of Header -->

<!--cube portfolio-->
<link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>

<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- CODE HERE -->

<section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    About Us
                </h3>
            </div>
</section><!--page-tree end here-->

<div class="space-70"></div>    
<div class="container">
            <div class="row align-items-center">
                <div class="flex">
                    <h4 class="heading-mini">About our company</h4>
                    <p>
                    Flipin provides some of the most advanced advertising solution to help you to promote your brand. 
Your brands need to appeal to all the five senses of your consumer. Flipin make your brand presence strong by making it distinct, recognizable and likable.

                    </p>
                    <p>
                    UWM Recycling offers a full suite of IT asset management and disposal services, including asset tracking, residual forecasting, portfolio planning, certified DoD data erasure, IT Asset Recovery/Asset Purchase programs (liquidation of unwanted equipment and trade-in credit or revenue sharing programs) and fully certified, comprehensive electronic waste recycling. This suite of services solves all of a corporation’s core disposal requirements, specifically ensuring compliance and indemnification against any downstream violations of data or improper recycling practices.
                    </p>
                   
                    <br>
                    <ul class="icon-list list-unstyled">
                        <li><i class="ion-checkmark-round"></i> Logistics Designed for You</li>
                        <li><i class="ion-checkmark-round"></i> Complete Chain of Custody</li>
                      	<li><i class="ion-checkmark-round"></i> Pickup Facility</li>
                        
                    </ul>
                </div>

                <!--<div class="col-lg-6">-->
                <!--     <img src="assets\img\blog\about-waste-pile.jpg">-->
                <!--</div>-->
            </div> 

</div>

        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script> 
        <script>
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-slider-thumbnail').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: false,
                    showPagination: false,
                    rewindNav: true,
                    scrollByPage: true,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                            width: 0,
                            cols: 1,
                        }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 400,
                    plugins: {
                        slider: {
                            pagination: '#js-pagination-slider',
                            paginationClass: 'cbp-pagination-active',
                        }
                    },
                });
            })(jQuery, window, document);
        </script>


<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->

