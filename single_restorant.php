<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<?php require_once 'lib/single_restorent_back.php'; ?>
<?php require_once 'header.php'; ?>
    <!-- ***** Breadcumb Area Start ***** -->

<div  class="show_warning" id="display">
	<div id="text_for_warning">
		<p id="text_for_warning_p"></p>
	</div>
</div>

    <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url( <?php  print_r($single_resto['image']) ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <div class="map-ratings-review-area d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img src="assets/img/core-img/map.png" alt=""></a>
                            <a href="#">8.7</a>
                            <a href="#">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">

                        <div class="listing-title">
                            <h4> <?php print_r($single_resto['name']) ?> </h4>
                            <h6>First Avenue no 83</h6>
                        </div>

                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#review">Reviews</a></li>
                                    <li><a href="#lomap">Location on map</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="overview-content mt-50" id="overview">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat. Sed mollis orci non cursus vestibulum. Pellentesque vitae est a augue laoreet venenatis sed eu felis. Sed cursus magna nec turpis ullamcorper, eget rutrum felis egestas. Nunc odio ex, fermentum efficitur nunc vitae, efficitur hendrerit diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum.</p>
                            <div class="row mt-5">
                                <div class="col-6">
                                        <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Accepts Credit Cards</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bike Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Reservations</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Privat Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Smoking Area</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wheelchair Accesible</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Coupons</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="listing-menu-area mt-100" id="menu">
                            <h4>Menu</h4>
                            <!-- Single Listing Menu -->
                            
                        <?php $i=0; foreach ($resto_menu as $resto_menu1) { if ($i<=2) { ?>
                            <div class="single-listing-menu d-flex justify-content-between">
                                <!-- Listing Menu Title -->
                                <div class="listing-menu-title">
                                    <h6>  <?php print_r($resto_menu1['name']) ?>  </h6>
                                    <p>   <?php print_r($resto_menu1['description']) ?>  </p>
                                </div>
                                <!-- Listing Menu Price -->
                                <div class="listing-menu-price">
                                    <h6>   <?php print_r($resto_menu1['price']) ?>  </h6>
                                </div>
                            </div>
                        <?php } else{ ?>
                            <div style="display: none;" class="toggl">
                                <div class="single-listing-menu d-flex justify-content-between">
                                    <!-- Listing Menu Title -->
                                    <div class="listing-menu-title">
                                        <h6>  <?php print_r($resto_menu1['name']) ?>  </h6>
                                        <p>   <?php print_r($resto_menu1['description']) ?>  </p>
                                    </div>
                                    <!-- Listing Menu Price -->
                                    <div class="listing-menu-price">
                                        <h6>   <?php print_r($resto_menu1['price']) ?>  </h6>
                                    </div>
                                </div>
                            </div>
                        <?php }$i++;} ?>

                            <button type="button" id= "show" class="btn dorne-btn mt-50">+ See The Menu</button>
                        </div>
                        <script type="text/javascript">
                            $("#show").click(function(){
                                //$(".hide").css("display","block");
                                $(".toggl").toggle();
                            });
                        </script>

                        <div class="listing-reviews-area mt-100" id="review">
                            <h4>reviews</h4>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="assets/img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“The best Burger in town”</h5>
                                            <div class="ratings">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Christinne Smith</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="assets/img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“Quality ingredients”</h5>
                                            <div class="ratings">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-fill.png" alt="">
                                                <img src="assets/img/clients-img/star-unfill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Michael Brown</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                        </div>

                        <div class="location-on-map mt-50" id="lomap">
                            <h4>Location on map</h4>
                            <input type="hidden" name="map-lat" id="map-lat" value="<?php echo $single_resto['latitude'] ?>">
                            <input type="hidden" name="map-lag" id="map-lag" value="<?php echo $single_resto['longitude'] ?>">
                            <div class="location-map">
                                <div id="locationMap"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                            <div class="listing-verify">
                                <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i> Verified Listing</a>
                            </div>

                        <!-- Book A Table Widget -->
                        <div class="book-a-table-widget mt-50">
                            <div class="variable_print">
                                <h6>BOOK A TABLE</h6>
                                <p id="p">0</p>
                            </div>
                            <div class="instruction">
                                <p>&nbsp&nbsp&nbspITEM</p>
                                <p>&nbsp&nbsp&nbspQUANTITY</p>
                                <p>PRICE</p>
                            </div>
                            <form method="get" action="">

                                <input type="hidden" name="/<?php echo $single_resto['search']; ?>/">
                                <input type="hidden" name="rest_id" value="<?php echo $id; ?>">

                                <?php $i=0; foreach ($resto_menu as $resto_menu1) {  ?>     

                                    <div class="menu-div" id = "space">
                                        <input id="label-join-<?php echo $i; ?>" class="menu-checkbox" type="checkbox" name="checkbox[]" value="<?php echo $resto_menu1['id']; ?>">
                                        <label for="label-join-<?php echo $i; ?>"> 
                                            <div class="order_form_div_name">
                                                <?php echo $resto_menu1['name']; ?>
                                            </div>
                                        	<div class="order_form_div_quntity">
                                                <button type="button" class = "button-dec" ><img src="assets/img/core-img/Capture1.PNG"></button>
                                                <input class="quantity-input" type="text" max="100" min="1" name="quantity_<?php echo $resto_menu1['id'];?>" value="0" >
                                                <button type="button" class = "button-inc" ><img src="assets/img/core-img/Capture.PNG"></button>
                                            </div>
                                            <div class="order_form_div_price">
                                                <input type="hidden" value="<?php echo $resto_menu1['price'];?>" class="order-item-price" readonly>
                                                <input type="text" value="<?php echo $resto_menu1['price'];?>" class="order-price" readonly>
                                            </div>
                                        </label>
                                    </div>
                                    
                                <?php $i++; } ?>
                                 
                                <button type="submit" name= 'submit' value="true" id= "prevent" class="btn dorne-btn bg-white text-dark" > book</button>
                            </form> 

                        </div>
                            
                        <!-- Opening Hours Widget -->
                        <div class="opening-hours-widget mt-50">
                            <h6>Opening Hours</h6>
                            <ul class="opening-hours">
                                <li>
                                    <p>     <?php print_r($resto_timing['0']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['0']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['1']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['1']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['2']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['2']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['3']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['3']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['4']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['4']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['5']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['5']['hours']) ?>    </p>
                                </li>
                                <li>
                                    <p>     <?php print_r($resto_timing['6']['day']) ?>    </p>
                                    <p>     <?php print_r($resto_timing['6']['hours']) ?>    </p>
                                </li>
                            </ul>
                        </div>

                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="assets/img/clients-img/1.jpg" alt="">
                            <div class="authors-name">
                                <a href="#">James Smith</a>
                                <p>The Author</p>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Business</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Single Listing Area End ***** -->

<?php require_once 'footer.php'; ?>
<script src="assets/js/google-map/location-map-active.js"></script>
<?php require_once 'lib/resto_order_back.php';