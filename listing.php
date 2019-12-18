<?php require_once 'lib/listing_back.php' ?>

<?php require_once 'header.php' ?>
    <!-- ***** Breadcumb Area Start ***** -->
    
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(assets/img/bg-img/hero-1.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured destinations</h4>
                        <p>Editor’s pick</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Features Area -->
             
               <?php foreach($resto_listing as $resto){ ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <a href="<?php echo($resto['url']) ?>">
                        <div class="single-features-area mb-50">
                            <img src="<?php echo($resto['image']) ?> " alt="">
                            <!-- Price -->
                            <div class="price-start">
                                <p>FROM $59/night</p>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    
                                    <h5><?php echo ($resto['name']);  ?> </h5>
                                    <p><?php   echo nl2br($resto['distance']."\n".$resto['address']); ?></p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="#" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
<?php require_once 'footer.php' ?>