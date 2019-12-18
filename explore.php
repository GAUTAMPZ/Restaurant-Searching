    <?php require_once 'header.php'; ?>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(assets/img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- Explore Area -->
    <section class="dorne-explore-area d-md-flex">
        <!-- Explore Search Area -->
        <div class="explore-search-area d-md-flex">
            <!-- Explore Search Form -->
            <div class="explore-search-form">
                <h6>What are you looking for?</h6>
                <!-- Tabs -->
                <div class="nav nav-tabs" id="heroTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                </div>
                <!-- Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                        <form action="#" method="get">
                            <select class="custom-select" id="destinations">
                                <option selected>Your Destinations</option>
                                <option value="1">New York</option>
                                <option value="2">Latvia</option>
                                <option value="3">Dhaka</option>
                                <option value="4">Melbourne</option>
                                <option value="5">London</option>
                            </select>
                            <select class="custom-select" id="catagories">
                                <option selected>All Catagories</option>
                                <option value="1">Catagories 1</option>
                                <option value="2">Catagories 2</option>
                                <option value="3">Catagories 3</option>
                                <option value="3">Catagories 4</option>
                            </select>
                            <select class="custom-select" id="price-range">
                                <option selected>Price Range</option>
                                <option value="1">$100 - $499</option>
                                <option value="2">$500 - $999</option>
                                <option value="3">$1000 - $4999</option>
                                <option value="3">$5000+</option>
                            </select>
                            <select class="custom-select" id="proximity">
                                <option selected>Proximity</option>
                                <option value="1">Proximity 1</option>
                                <option value="2">Proximity 2</option>
                                <option value="3">Proximity 3</option>
                                <option value="3">Proximity 4</option>
                                <option value="3">Proximity 5</option>
                            </select>
                            <div class="row mt-md-5 mt-0">
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Accepts Credit Cards</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bike Parking</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Reservations</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Privat Parking</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Smoking Area</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wheelchair Accesible</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Coupons</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn dorne-btn mt-50 bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Explore Search Result -->
            <div class="explore-search-result">
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="assets/img/bg-img/feature-1.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Ibiza</h5>
                            <p>Party</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="assets/img/bg-img/feature-2.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Paris</h5>
                            <p>Luxury</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="assets/img/bg-img/feature-3.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Lake Como</h5>
                            <p>Spectacular</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="assets/img/bg-img/feature-4.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Greece</h5>
                            <p>Sunny</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Map Area -->
        <div class="explore-map-area">
            <div id="exploreGoogleMap"></div>
        </div>
    </section>
<?php require_once 'footer.php'; ?>
<script src="assets/js/google-map/explore-map-active.js"></script>