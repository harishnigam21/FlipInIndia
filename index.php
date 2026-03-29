<!-- including header secition -->
<?php 
$title="Home || Flipin India Pvt. Ltd.";
$dir="index";
include('structure/header.php'); 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!-- End of Header -->



<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->
        <section id="slider-sec" class="slider-reg">
                <!-- Swiper -->
                <div class="swiper-container swiper-fullwidth">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="adminPanel/assets/img/banner/<?php echo $banner['image1']?>" alt="refresh" class="img-fluid deskH" width="100%" style="position: relative;">
                            
                        </div>
                        <div class="swiper-slide">
                            <img src="adminPanel/assets/img/banner/<?php echo $banner['image2']?>" alt="refresh" class="img-fluid deskH" width="100%" style="position: relative;">
                            
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next" style="color: #e53e31; font-size: 50px;    font-weight: 600;"></div>
                    <div class="swiper-button-prev" style="color: #e53e31; font-size: 50px;    font-weight: 600;"></div>
                </div>
    
        </section><!--main flex slider end-->
        <div class="space-50"></div>
        <div class="container">
                <div class="row intro-row">
                    <div class="col-md-12 text-center wow animated fadeInUp">
                        <h2>Welcome to Flipin India Pvt. Ltd. </h2>
                        <p class="bottommargin_30">
                                We are pleased to introduce ourselves as one of the leading Advertising agency in India.
                                We are in the business of delivering value added, Offline branding and online marketing projects for the wide profile of Corporate, Commercial and Hotels clients.
                            </p>
                    </div>
                    <div class="space-70"></div>
                    <div class=" col-md-4 wow animated bounceIn">
                        <div class="services-box">
                            <i class="ion-laptop"></i>
                            <h4>Offline Branding</h4>
                            <p>
                                We are engaged in offering a wide range of Signage, Glow Sign, Outlet Interior, Indoor & Outdoor Branding products for advertising sector.
                            </p>
                        </div>
                    </div><!--services box-->
                    <div class=" col-md-4 wow animated bounceIn" data-wow-delay=".2s">
                        <div class="services-box">
                            <i class="ion-ios-color-wand-outline"></i>
 <h4>Commercial Printing</h4>
                            <p>
                            We are engaged in offering printing solution services for advertising sector.
                            </p>

                            
                        </div>
                    </div><!--services box-->
                    <div class="col-md-4 wow animated bounceIn" data-wow-delay=".3s">
                        <div class="services-box">
                            <i class="ion-laptop"></i>
                           <h4>Online Marketing</h4>
                            <p>
                            We are engaged in offering Online Marketing, Website and software services for advertising sector.
                            </p>
                        </div>
                    </div><!--services box-->
                </div><!--row end-->
        </div><!--intro with services end-->
        <div class="space-70"></div><div class="space-30"></div>

        <div class="space-70"></div>
    <div class="container">
        <div class="row">
                <div class="col-md-6 margin-btm-20">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JKIAOZZritk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!--our skill progress bar col end-->

                <div class="col-md-6 hire-sec">
                    <h4 class="heading-mini">Why hire us?</h4>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-laptop"></i>
                        </div><!--services icon-->
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Complete advertising solution under one roof</h4>
                            <p>
                           We understand the complexity of scattered advertising services company; that’s why we offer an array of all advertising services under one roof to help ease the burden.  
                            </p>
                        </div><!--services 1 text-->
                    </div><!--services 1 row-->
                    <div class="space-20"></div>
                    <div class="row">
                        <div class="col-md-3 services-icon">
                            <i class="ion-ios-barcode-outline"></i>
                        </div><!--services icon-->
                        <div class="col-md-9 services-text">
                            <h4 class="heading-mini">Best Quality and Services</h4>
                            <p>
                          We are known for best quality and rapid services. We have highly experienced team to deliver best quality of product on time.  
                            </p>
                        </div><!--services 2 text-->
                    </div><!--services 2 row-->
                    
                </div><!--hire section end-->
            </div><!--row-->
            </div><!--about content end-->
            
            <!--testimonal section starts here-->
            <div class="space-50"></div>
            <section id="google-reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mr-auto ml-auto text-center">
                         <!-- Elfsight Google Reviews | Untitled Google Reviews -->
                            <script src="https://static.elfsight.com/platform/platform.js" async></script>
                            <div class="elfsight-app-85883aae-9459-4a2f-8080-743ee04a6524" data-elfsight-app-lazy></div>
                        </div>
                </div>
            </section>
            <div class="space-70"></div>
        <!--testimonials section end here-->
<div class="space-70"></div>
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3>Get latest news from us</h3>
                        <p>
                            Subscribe to our newsletter
                        </p>
                    </div>
                </div><!--row-->

                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto text-center">
                        <form method="post" action="#" class="form-subscribe">
                            <input type="text" name="email" placeholder="Email Id..." class="form-control" style="border:1px solid black;">
                            <button type="submit" name="submit" class="btn theme-btn-color btn-block">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--<div class="cta-bg">-->
        <!--    <div class="container text-center">-->
        <!--        <h3>Interested Then Try it..-->
        <!--            <a href="pickup.php" class="btn btn-lg btn-white btn-radius">Schedule Pickup</a>-->
        <!--        </h3>-->
        <!--    </div>-->
        <!--</div>-->
        
        
        <!-- Including footer page -- footer-->
          <?php include("structure/footer.php");  ?>
        <!--#footer option end-->
    
    </body>

</html>