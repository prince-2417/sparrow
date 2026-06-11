<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trendig — Premium Fashion</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <!-- Top Announcement Bar -->
    <div class="announcement-bar">
        <p>🎀 Free Shipping on orders above Rs. 999 &nbsp;|&nbsp; Use code <strong>TRENDIG10</strong> for 10% off &nbsp;|&nbsp; New Collection Live Now 🎀</p>
    </div>

    <?php include("include/header.php"); ?>


    <!-- Hero Slider Start -->
    <section class="hero-slider">
        <div id="mainSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=1600&q=80" class="d-block w-100" alt="Collection">
                    <div class="slider-content">
                        <span>New Collection 2025</span>
                        <h1>Elegance in Every Stitch</h1>
                        <p>Premium innerwear crafted for comfort & confidence</p>
                        <a href="#" class="hero-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=1600&q=80" class="d-block w-100" alt="Collection">
                    <div class="slider-content">
                        <span>Love Season Special</span>
                        <h1>Feel Beautiful Every Day</h1>
                        <p>Up to 40% off on selected collections</p>
                        <a href="#" class="hero-btn">Explore Sale <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=1600&q=80" class="d-block w-100" alt="Collection">
                    <div class="slider-content">
                        <span>Nightwear Collection</span>
                        <h1>Luxury Comfort Awaits</h1>
                        <p>Satin, lace & more for your perfect nights</p>
                        <a href="#" class="hero-btn">View Collection <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

            <!-- Arrows -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

        </div>
    </section>
    <!-- Hero Slider End -->


    <!-- Features Strip -->
    <section class="features-strip">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <i class="fa-solid fa-truck-fast"></i>
                        <div>
                            <h6>Free Shipping</h6>
                            <p>On orders above Rs. 999</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <i class="fa-solid fa-rotate-left"></i>
                        <div>
                            <h6>Easy Returns</h6>
                            <p>7-day hassle free returns</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div>
                            <h6>Secure Payment</h6>
                            <p>100% secure transactions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-item">
                        <i class="fa-solid fa-headset"></i>
                        <div>
                            <h6>24/7 Support</h6>
                            <p>Dedicated support team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

         
    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="section-title">
                <span>Browse Collections</span>
                <h2>Shop By Category</h2>
            </div>
            <div class="row g-3">

                <div class="col-lg-6">
                    <div class="category-card cat-large">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=800&q=80" alt="Bra Sets">
                        <div class="category-content">
                            <span>New Arrivals</span>
                            <h3>Bra Sets</h3>
                            <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="category-card cat-small">
                                <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?w=500&q=80" alt="Nightwear">
                                <div class="category-content">
                                    <span>Bestseller</span>
                                    <h3>Nightwear</h3>
                                    <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="category-card cat-small">
                                <img src="https://images.unsplash.com/photo-1434389677669-e08b4cac3105?w=500&q=80" alt="Daywear">
                                <div class="category-content">
                                    <span>Trending</span>
                                    <h3>Daywear</h3>
                                    <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="category-card cat-small">
                                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&q=80" alt="Panties">
                                <div class="category-content">
                                    <span>Top Picks</span>
                                    <h3>Panties</h3>
                                    <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="category-card cat-small">
                                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=500&q=80" alt="Special Offers">
                                <div class="category-content">
                                    <span>Sale</span>
                                    <h3>Special Offers</h3>
                                    <a href="#">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Featured Products Section -->
    <section class="products-section">
        <div class="container">
            <div class="section-title">
                <span>Handpicked For You</span>
                <h2>Featured Products</h2>
            </div>

            <!-- Filter Tabs -->
            <div class="product-tabs">
                <button class="tab-btn active">All</button>
                <button class="tab-btn">Bras</button>
                <button class="tab-btn">Sets</button>
                <button class="tab-btn">Nightwear</button>
                <button class="tab-btn">Sale</button>
            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=500&q=80" alt="Lace Bralette">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-new">New</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Bras</p>
                            <h5>Lace Bralette</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                <span>(42)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">Rs. 1,299</span>
                            </div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1571513722275-4b41940f54b8?w=500&q=80" alt="Love Season Set">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-sale">-24%</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Sets</p>
                            <h5>Love Season Set</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span>(87)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">Rs. 1,899</span>
                                <span class="old-price">Rs. 2,499</span>
                            </div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1562572159-4efc207f5aff?w=500&q=80" alt="Satin Night Set">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Nightwear</p>
                            <h5>Satin Night Set</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                <span>(31)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">Rs. 2,199</span>
                            </div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=500&q=80" alt="Sports Bra">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-new">New</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Sports</p>
                            <h5>Sports Bra Pro</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span>(56)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">Rs. 999</span>
                            </div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center mt-5">
                <a href="#" class="outline-btn">View All Products <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>


    <!-- Full Width Banner -->
    <section class="fullwidth-banner">
        <div class="banner-content">
            <span>Limited Time Offer</span>
            <h2>Love Season Sale</h2>
            <p>Up to 50% off on premium collections. Don't miss out!</p>
            <a href="#" class="hero-btn">Shop The Sale <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </section>


    <!-- New Arrivals Section -->
    <section class="products-section" style="background:#fff;">
        <div class="container">
            <div class="section-title">
                <span>Just Landed</span>
                <h2>New Arrivals</h2>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1544441893-675973e31985?w=500&q=80" alt="">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-new">New</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Sets</p>
                            <h5>Floral Lace Set</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                <span>(18)</span>
                            </div>
                            <div class="product-price"><span class="price">Rs. 1,599</span></div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567401893414-76b7b1e5a7a5?w=500&q=80" alt="">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-new">New</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Nightwear</p>
                            <h5>Silk Sleep Dress</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                <span>(24)</span>
                            </div>
                            <div class="product-price"><span class="price">Rs. 2,499</span></div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=500&q=80" alt="">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-sale">-30%</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Bras</p>
                            <h5>Comfort Push-Up Bra</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                <span>(63)</span>
                            </div>
                            <div class="product-price">
                                <span class="price">Rs. 849</span>
                                <span class="old-price">Rs. 1,199</span>
                            </div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1560243563-062bfc001d68?w=500&q=80" alt="">
                            <div class="product-overlay">
                                <a href="#" class="quick-view-btn"><i class="fa-regular fa-eye"></i> Quick View</a>
                            </div>
                            <span class="badge-new">New</span>
                            <a href="#" class="wishlist-btn"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="product-info">
                            <p class="product-category">Daywear</p>
                            <h5>Cotton Cami Set</h5>
                            <div class="product-stars">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                <span>(39)</span>
                            </div>
                            <div class="product-price"><span class="price">Rs. 1,199</span></div>
                            <button class="add-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Promo Split Banner -->
    <section class="promo-banner">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="promo-card" style="background-image: url('https://images.unsplash.com/photo-1509631179647-0177331693ae?w=800&q=80')">
                        <div class="promo-content">
                            <span>Limited Time</span>
                            <h3>Love Season Special</h3>
                            <p>Up to 40% off on selected items</p>
                            <a href="#" class="promo-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promo-card" style="background-image: url('https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=800&q=80')">
                        <div class="promo-content">
                            <span>New Arrivals</span>
                            <h3>Satin Collection</h3>
                            <p>Luxury comfort for every day</p>
                            <a href="#" class="promo-btn">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title">
                <span>Customer Love</span>
                <h2>What They Say About Us</h2>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p>"The quality is absolutely amazing! The lace feels so soft and the fit is perfect. I've ordered 3 sets already and will keep coming back!"</p>
                        <div class="reviewer">
                            <img src="https://i.pravatar.cc/60?img=47" alt="Reviewer">
                            <div>
                                <h6>Ayesha Khan</h6>
                                <span>Lahore</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card featured-review">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p>"Finally found my perfect size! Trendig has the best collection and delivery was super fast. The satin nightwear is my favourite purchase ever."</p>
                        <div class="reviewer">
                            <img src="https://i.pravatar.cc/60?img=32" alt="Reviewer">
                            <div>
                                <h6>Sara Ahmed</h6>
                                <span>Karachi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                        </div>
                        <p>"Great packaging and the products look exactly like in the pictures. The love season set is gorgeous! Highly recommend to everyone."</p>
                        <div class="reviewer">
                            <img src="https://i.pravatar.cc/60?img=5" alt="Reviewer">
                            <div>
                                <h6>Fatima Malik</h6>
                                <span>Islamabad</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Instagram Feed Section -->
    <section class="insta-section">
        <div class="container-fluid px-0">
            <div class="section-title">
                <span>@trendig.pk</span>
                <h2>Follow Us on Instagram</h2>
            </div>
            <div class="insta-grid">
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
                <div class="insta-item">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="">
                    <div class="insta-overlay"><i class="fa-brands fa-instagram"></i></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span>Stay in the Loop</span>
                    <h2>Get Exclusive Offers</h2>
                    <p>Subscribe & be the first to know about new arrivals, special deals & style tips.</p>
                </div>
                <div class="col-md-6">
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter your email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand">
                        <a href="#" class="footer-logo"><i class="fa-solid fa-crown"></i> Trendig</a>
                        <p>Your go-to destination for premium innerwear, nightwear & fashion essentials. Comfort meets style.</p>
                        <div class="social-links">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Collections</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h6>Categories</h6>
                        <ul>
                            <li><a href="#">Bra Sets</a></li>
                            <li><a href="#">Bralette</a></li>
                            <li><a href="#">Panties</a></li>
                            <li><a href="#">Nightwear</a></li>
                            <li><a href="#">Daywear</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h6>Help</h6>
                        <ul>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Track Order</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h6>Contact</h6>
                        <ul>
                            <li><i class="fa-solid fa-phone"></i> +92 300 0000000</li>
                            <li><i class="fa-solid fa-envelope"></i> hello@trendig.com</li>
                            <li><i class="fa-solid fa-location-dot"></i> Lahore, Pakistan</li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Trendig. All rights reserved.</p>
                <div class="payment-icons">
                    <i class="fa-brands fa-cc-visa"></i>
                    <i class="fa-brands fa-cc-mastercard"></i>
                    <i class="fa-brands fa-cc-paypal"></i>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Product filter tabs
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>

</body>

</html>
