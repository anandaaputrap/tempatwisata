<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from detour.hibootstrap.com/index-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 12:59:27 GMT -->

<head>
    @include('template.admin.include.head')
</head>

<body>
    <div id="__next">
        <div class="body_overlay"></div>
        <header class="header-wrap style2">
            <div class="body_overlay"></div>
            <div class="header-top">
                @include('template.public.component.headerTop')
            </div>
        </header>
        <header class="header-wrap style2">
            <div class="header-bottom">
                @include('template.public.component.headerBottom')
            </div>
        </header>
        <div class="contact-popup">
            <div class="contact-popup-title">
                <h2>Contact Us</h2><button type="button" class="close-popup"><i class="ri-close-fill"></i></button>
            </div>
            <div class="contact-popup-wrap">
                <div class="contact-address">
                    <div class="contact-icon"><i class="ri-map-pin-fill"></i></div>
                    <div class="contact-info">
                        <h5>San Francisco,USA</h5>
                        <p>Address: 123 westearn Road,LA</p>
                        <p>Phone: <a href="tel:2132008224">213-200-8224</a><a href="tel:2132008225">213-200-8225</a></p>
                        <h5 class="mt-30 mb-20">Follow Us On:</h5>
                        <ul class="social-profile v1">
                            <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i></a>
                            </li>
                            <li><a target="_blank" href="https://linkedin.com/"><i class="ri-linkedin-fill"></i></a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/"><i class="ri-twitter-fill"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="ri-instagram-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="comp_map"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
        <div class="cart-popup">
            <div class="cart-popup-title">
                <h2>Shopping Cart (4)</h2><button type="button" class="close-popup"><i
                        class="las la-times"></i></button>
            </div>
            <div class="cart-popup-item-wrap">
                <div class="cart-popup-item">
                    <div class="cart-popup-item-img"><img src="../images/product/cart-thumb-1.jpg" alt="Image" /></div>
                    <div class="cart-popup-item-name">
                        <p>Large Suitcase</p>
                        <div class="product-quantity">
                            <div class="qtySelector"><span class="ri-subtract-line decreaseQty"></span><input
                                    type="text" class="qtyValue" value="1" /><span
                                    class="las la-plus increaseQty"></span></div>
                        </div>
                    </div>
                    <div class="cart-popup-item-price"><button type="button"><i
                                class="las la-times"></i></button><span>$148.00</span></div>
                </div>
                <div class="cart-popup-item">
                    <div class="cart-popup-item-img"><img src="../images/product/cart-thumb-2.jpg" alt="Image" /></div>
                    <div class="cart-popup-item-name">
                        <p>Leather Backpack</p>
                        <div class="product-quantity">
                            <div class="qtySelector"><span class="ri-subtract-line decreaseQty"></span><input
                                    type="text" class="qtyValue" value="1" /><span
                                    class="las la-plus increaseQty"></span></div>
                        </div>
                    </div>
                    <div class="cart-popup-item-price"><button type="button"><i
                                class="las la-times"></i></button><span>$148.00</span></div>
                </div>
                <div class="cart-popup-item">
                    <div class="cart-popup-item-img"><img src="../images/product/cart-thumb-3.jpg" alt="Image" /></div>
                    <div class="cart-popup-item-name">
                        <p>Orange Suitcase</p>
                        <div class="product-quantity">
                            <div class="qtySelector"><span class="ri-subtract-line decreaseQty"></span><input
                                    type="text" class="qtyValue" value="1" /><span
                                    class="las la-plus increaseQty"></span></div>
                        </div>
                    </div>
                    <div class="cart-popup-item-price"><button type="button"><i
                                class="las la-times"></i></button><span>$148.00</span></div>
                </div>
            </div>
            <div class="cart-popup-total-wrap">
                <div class="cart-popup-total">
                    <h5>TOTAL</h5>
                    <h5>$444.00</h5>
                </div><a class="btn v4" href="../shop-left-sidebar/index.html">Continue Shopping</a><a class="btn v3"
                    href="../checkout/index.html">Check Out</a>
            </div>
        </div>
        <div class="hero-wrap style2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="hero-content style2 text-left">
                            <h1>Make Tour &amp; Explore <br /><span>Incredible Destinations</span></h1>
                            <div class="filter-tours-wrap style2">
                                <div class="filter-box">
                                    <div class="form-group"><input type="search" placeholder="Keywords" /></div>
                                </div>
                                <div class="filter-box">
                                    <div class="filter-dropdown"><select class="hero-filter">
                                            <option value="1">Destination</option>
                                            <option value="2">Europe</option>
                                            <option value="3">Asia</option>
                                            <option value="4">Africa</option>
                                        </select><span class="hero-filter-down-arrow"><i
                                                class="ri-arrow-down-s-line"></i></span></div>
                                </div>
                                <div class="filter-box">
                                    <div class="filter-dropdown"><select class="hero-filter">
                                            <option value="1">Duration</option>
                                            <option value="2">3 Days</option>
                                            <option value="3">5 Days</option>
                                            <option value="4">10 Days</option>
                                        </select><span class="hero-filter-down-arrow"><i
                                                class="ri-arrow-down-s-line"></i></span></div>
                                </div>
                                <div class="filter-box">
                                    <div class="filter-dropdown"><select class="hero-filter">
                                            <option value="1">Person</option>
                                            <option value="2">1-3</option>
                                        </select><span class="hero-filter-down-arrow"><i
                                                class="ri-arrow-down-s-line"></i></span></div>
                                </div>
                                <div class="filter-box"><button type="submit" class="search-btn">Search <i
                                            class="ri-search-line"></i></button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo-wrap pt-100 pb-70 z-0 undefined">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="promo-item style2">
                            <div class="promo-icon"><i class="flaticon-map"></i></div>
                            <div class="promo-content">
                                <h4>Best Selections</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="promo-item style2">
                            <div class="promo-icon"><i class="flaticon-discount"></i></div>
                            <div class="promo-content">
                                <h4>Reasonable Price</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="promo-item style2">
                            <div class="promo-icon"><i class="flaticon-credit-card"></i></div>
                            <div class="promo-content">
                                <h4>Secure Payments</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="promo-item style2">
                            <div class="promo-icon"><i class="flaticon-support-1"></i></div>
                            <div class="promo-content">
                                <h4>24/7 Support</h4>
                                <p>Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy eirmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tour-slider-wrap pb-100">
            <div class="tour-slider-v3">
                <div>
                    <div class="tour-slider-v3-pagination"></div>
                </div>
            </div>
        </div>
        <section class="best-tour-wrap pb-70">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-12">
                        <div class="section-title style4 text-center"><span>UPCOMING</span>
                            <h2>Best Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-1">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Sydney Tour</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>5 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(200)</span></div>
                                </div>
                                <div class="tour-price"><span>$800</span><span class="discount">$1000</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-5">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Italy Tour</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>4 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(200)</span></div>
                                </div>
                                <div class="tour-price"><span>$342</span><span class="discount">$542</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-2">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Thailand Experience</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>7 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(100)</span></div>
                                </div>
                                <div class="tour-price"><span>$942</span><span class="discount">$1100</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-3">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Rome Tour</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>10 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(200)</span></div>
                                </div>
                                <div class="tour-price"><span>$1442</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-7">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Makao Experience</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>7 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(100)</span></div>
                                </div>
                                <div class="tour-price"><span>$942</span><span class="discount">$1100</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="best-tour-item style2 bg-f rec-bg-8">
                            <div class="best-tour-info">
                                <h4><a href="../tour-details/index.html">Turkey Tour</a></h4>
                                <div class="feature-tour-meta">
                                    <div class="feature-tour-time"><i class="ri-time-line"></i>10 days</div>
                                    <div class="feature-tour-review"><span class="rating">4.8</span><i
                                            class="ri-star-fill"></i><span class="total-review">(200)</span></div>
                                </div>
                                <div class="tour-price"><span>$1442</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="adventure-tour-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style4 text-center mb-40"><span>PLAN YOUR NEXT</span>
                            <h2>Adventure In Summer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="tour-slider-v1 undefined owl-theme"></div>
        <section class="service-wrap pt-100 pb-100">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-12">
                        <div class="section-title style4 text-center"><span>OUR ALL</span>
                            <h2>Provided Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-item style2">
                            <div class="service-img"><a href="../tours/index.html"><img
                                        src="../images/service/service-5.png" alt="Image" /></a></div>
                            <div class="service-info">
                                <h4><a href="../tours/index.html">Car Rental Services</a></h4>
                                <p>100+ Listing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-item style2">
                            <div class="service-img"><a href="../tours/index.html"><img
                                        src="../images/service/service-6.png" alt="Image" /></a></div>
                            <div class="service-info">
                                <h4><a href="../tours/index.html">Hotel Booking </a></h4>
                                <p>65+ Listing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-item style2">
                            <div class="service-img"><a href="../tours/index.html"><img
                                        src="../images/service/service-7.png" alt="Image" /></a></div>
                            <div class="service-info">
                                <h4><a href="../tours/index.html">Restaurent</a></h4>
                                <p>90+ Listing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-item style2">
                            <div class="service-img"><a href="../tours/index.html"><img
                                        src="../images/service/service-8.png" alt="Image" /></a></div>
                            <div class="service-info">
                                <h4><a href="../tours/index.html">Club &amp; Bar</a></h4>
                                <p>45+ Listing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center"><a class="btn v2" href="../tours/index.html">All Services <i
                                class="ri-logout-circle-r-line"></i></a></div>
                </div>
            </div>
        </section>
        <section class="recommend-tour-area bg-heath ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center style4 mb-40"><span>OUR ALL</span>
                            <h2>Recommended Destinations</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rec-wrap">
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-1"></div>
                                <div class="recommend-tour-info">
                                    <p>27+ Place</p>
                                    <h4><a href="../tour-details/index.html">Australia</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-2"></div>
                                <div class="recommend-tour-info">
                                    <p>15+ Place</p>
                                    <h4><a href="../tour-details/index.html">Newzealand</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-3"></div>
                                <div class="recommend-tour-info">
                                    <h4><a href="../tour-details/index.html">Egypt</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p>
                                    <p>20+ Place</p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-4"></div>
                                <div class="recommend-tour-info">
                                    <p>30+ Place</p>
                                    <h4><a href="../tour-details/index.html">Africa</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-5"></div>
                                <div class="recommend-tour-info">
                                    <p>15+ Place</p>
                                    <h4><a href="../tour-details/index.html">Africa</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                            <div class="recommend-tour-item style2">
                                <div class="recommend-tour-bg bg-f rec-bg-6"></div>
                                <div class="recommend-tour-info">
                                    <p>27+ Place</p>
                                    <h4><a href="../tour-details/index.html">Africa</a></h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi saepe vel ea.
                                    </p><a class="link" href="../tour-details/index.html">Explore <i
                                            class="ri-logout-circle-r-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="ptb-100">
            <section class="feature-wrap">
                <div class="container">
                    <div class="row mb-40 align-items-end">
                        <div class="col-md-12">
                            <div class="section-title style4 text-center"><span>UPCOMING</span>
                                <h2>Feature Tours</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="feature-tour-card style2">
                                <div class="row gx-0">
                                    <div class="col-md-6">
                                        <div class="feature-tour-img feature-bg-1 bg-f"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-tour-info">
                                            <h4><a href="../tours/index.html">France Experience</a></h4>
                                            <div class="feature-tour-meta">
                                                <div class="feature-tour-time"><i class="ri-time-line"></i>10 days</div>
                                                <div class="feature-tour-review"><span class="rating">4.5</span><i
                                                        class="ri-star-fill"></i><span class="total-review">(80)</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore.</p><span
                                                class="feature-tour-price">From $1,412</span>
                                            <div class="feature-tour-option"><a class="link style1"
                                                    href="../tour-details/index.html">Book Now <i
                                                        class="ri-logout-circle-r-line"></i></a><a class="link style2"
                                                    href="../tour-details/index.html">Tour Details<!-- --> <i
                                                        class="ri-logout-circle-r-line"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="feature-tour-card style2">
                                <div class="row gx-0">
                                    <div class="col-md-6">
                                        <div class="feature-tour-img feature-bg-2 bg-f"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-tour-info">
                                            <h4><a href="../tours/index.html">Macao Experience</a></h4>
                                            <div class="feature-tour-meta">
                                                <div class="feature-tour-time"><i class="ri-time-line"></i>5 days</div>
                                                <div class="feature-tour-review"><span class="rating">4.8</span><i
                                                        class="ri-star-fill"></i><span class="total-review">(200)</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore.</p><span
                                                class="feature-tour-price">From $512</span>
                                            <div class="feature-tour-option"><a class="link style1"
                                                    href="../tour-details/index.html">Book Now <i
                                                        class="ri-logout-circle-r-line"></i></a><a class="link style2"
                                                    href="../tour-details/index.html">Tour Details<!-- --> <i
                                                        class="ri-logout-circle-r-line"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="feature-tour-card style2">
                                <div class="row gx-0">
                                    <div class="col-md-6">
                                        <div class="feature-tour-img feature-bg-3 bg-f"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-tour-info">
                                            <h4><a href="../tours/index.html">Turkey Experience</a></h4>
                                            <div class="feature-tour-meta">
                                                <div class="feature-tour-time"><i class="ri-time-line"></i>3 days</div>
                                                <div class="feature-tour-review"><span class="rating">4.5</span><i
                                                        class="ri-star-fill"></i><span class="total-review">(65)</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore.</p><span
                                                class="feature-tour-price">From $412</span>
                                            <div class="feature-tour-option"><a class="link style1"
                                                    href="../tour-details/index.html">Book Now <i
                                                        class="ri-logout-circle-r-line"></i></a><a class="link style2"
                                                    href="../tour-details/index.html">Tour Details<!-- --> <i
                                                        class="ri-logout-circle-r-line"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12">
                            <div class="feature-tour-card style2">
                                <div class="row gx-0">
                                    <div class="col-md-6">
                                        <div class="feature-tour-img feature-bg-4 bg-f"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="feature-tour-info">
                                            <h4><a href="../tours/index.html">Bali Experience</a></h4>
                                            <div class="feature-tour-meta">
                                                <div class="feature-tour-time"><i class="ri-time-line"></i>5 days</div>
                                                <div class="feature-tour-review"><span class="rating">4.8</span><i
                                                        class="ri-star-fill"></i><span class="total-review">(200)</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut labore.</p><span
                                                class="feature-tour-price">From $512</span>
                                            <div class="feature-tour-option"><a class="link style1"
                                                    href="../tour-details/index.html">Book Now <i
                                                        class="ri-logout-circle-r-line"></i></a><a class="link style2"
                                                    href="../tour-details/index.html">Tour Details<!-- --> <i
                                                        class="ri-logout-circle-r-line"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-12 text-center"><a class="btn v2" href="../tours/index.html">View All Tours <i
                                    class="ri-logout-circle-r-line"></i></a></div>
                    </div>
                </div>
            </section>
        </div>
        <section class="about-wrap pb-100 undefined undefined">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="section-title style6 sm-center mb-40"><span>ABOUT US</span>
                            <h2>We Provide Best Deals</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat.</p>
                        </div>
                        <div class="about-features">
                            <div class="about-feature-item style2">
                                <div class="about-feature-icon"><i class="flaticon-customer-care"></i></div>
                                <div class="about-feature-text">
                                    <h4>Quality Services Ensure</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="about-feature-item style2">
                                <div class="about-feature-icon"><i class="flaticon-support"></i></div>
                                <div class="about-feature-text">
                                    <h4>Customer Care</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="about-feature-item style2">
                                <div class="about-feature-icon"><i class="flaticon-tour-guide"></i></div>
                                <div class="about-feature-text">
                                    <h4>Experience Guides</h4>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial-wrap">
                            <div class="testimonial-slider-two swiper-container">
                                <div class="swiper-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-wrap pb-70">
            <div class="shape-8 sm-none"><img src="../images/shape-5.png" alt="Image" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style1 mb-40 text-center"><span>Our Shop</span>
                            <h2>Travel Accessories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-wrap pb-70 undefined">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style4 text-center mb-40"><span>BLOGS</span>
                            <h2>Latest News And Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card style2">
                            <div class="blog-img"><a href="../blog-details-right-sidebar/index.html"><img
                                        src="../images/blog/blog-1.jpg" alt="Image" /></a><span class="blog-date"><i
                                        class="ri-time-line"></i>06 February , 2021</span></div>
                            <div class="blog-info">
                                <h3 class="blog-title"><a href="../blog-details-right-sidebar/index.html">24 Of Our
                                        Favorite Things To Do In Cape Town And Around</a></h3>
                                <div class="blog-meta"><span>By<!-- --> <a
                                            href="../blog-details-right-sidebar/index.html">Admin</a></span><span><a
                                            href="../blog-details-right-sidebar/index.html">4 Comments</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card style2">
                            <div class="blog-img"><a href="../blog-details-right-sidebar/index.html"><img
                                        src="../images/blog/blog-5.jpg" alt="Image" /></a><span class="blog-date"><i
                                        class="ri-time-line"></i>26 January , 2021</span></div>
                            <div class="blog-info">
                                <h3 class="blog-title"><a href="../blog-details-right-sidebar/index.html">Our Favorite
                                        Things To Do In The Fascinating City Of Córdoba</a></h3>
                                <div class="blog-meta"><span>By<!-- --> <a
                                            href="../blog-details-right-sidebar/index.html">Admin</a></span><span><a
                                            href="../blog-details-right-sidebar/index.html">2 Comments</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card style2">
                            <div class="blog-img"><a href="../blog-details-right-sidebar/index.html"><img
                                        src="../images/blog/blog-3.jpg" alt="Image" /></a><span class="blog-date"><i
                                        class="ri-time-line"></i>15 January , 2021</span></div>
                            <div class="blog-info">
                                <h3 class="blog-title"><a href="../blog-details-right-sidebar/index.html">Mexico Road
                                        Trip – Impressions Of A Challenging Journey</a></h3>
                                <div class="blog-meta"><span>By<!-- --> <a
                                            href="../blog-details-right-sidebar/index.html">Admin</a></span><span><a
                                            href="../blog-details-right-sidebar/index.html">3 Comments</a></span></div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container px-0 bg-heath newsletter">
            <div class="newsletter-wrap style2">
                <div class="dot-shape sm-none"><img src="../images/dot-shape.svg" alt="Image" /></div>
                <div class="curve-shape sm-none"><img src="../images/curve.png" alt="Image" /></div>
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 col-md-5">
                        <div class="newsletter-img"><img src="../images/newsletter-img-1.png" alt="Image" /></div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-7 offset-lg-0 col-md-7">
                        <div class="newsletter-form style1">
                            <h3><span>Get Subscribe </span><br />Our Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                            <form action="#">
                                <div class="form-group mb-20"><input type="email"
                                        placeholder="Enter Your Email Address" /></div>
                                <div class="form-group mb-0"><button type="submit" class="btn v5">Subscribe Now <i
                                            class="ri-logout-circle-r-line"></i></button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="preloader js-preloader"><img src="../images/preloader.gif" alt="Image" /></div>
        <footer class="footer-wrap style1">
            @include('template.public.component.footer')
        </footer>
    </div>
    @include('template.public.include.javascript')
</body>
<!-- Mirrored from detour.hibootstrap.com/index-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Jun 2023 12:59:28 GMT -->

</html>