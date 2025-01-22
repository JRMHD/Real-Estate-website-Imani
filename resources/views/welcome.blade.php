<!doctype html>
<html class="no-js" lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Imani Elite Realty - Expert Real Estate Services in Nairobi</title>
    <meta name="description"
        content="Imani Elite Realty is a leading Nairobi-based real estate company. We specialize in buying, selling, and leasing residential and commercial properties, offering professional and seamless services.">
    <meta name="keywords"
        content="Imani Elite Realty, real estate Nairobi, property purchase, property leasing, property rentals, residential properties, commercial properties">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Imani Elite Realty">

    <link rel="canonical" href="http://www.ImaniRealty.com">
    <meta property="og:title" content="Imani Elite Realty - Expert Real Estate Services in Nairobi">
    <meta property="og:description"
        content="Over a decade of expertise in helping clients buy, sell, and lease properties in Nairobi. Find your perfect home or commercial space with Imani Elite Realty.">
    <meta property="og:url" content="http://www.ImaniRealty.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.ImaniRealty.com/assets/images/og-image.jpg">
    <!-- Replace with the actual path -->

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/ico" sizes="32x32" href="\Images\favicon.ico">
    <link rel="icon" type="image/ico" sizes="16x16" href="\Images\favicon.ico">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS here -->
    <link rel="stylesheet" href="main/css/bootstrap.min.css">
    <link rel="stylesheet" href="main/css/animate.min.css">
    <link rel="stylesheet" href="main/css/magnific-popup.css">
    <link rel="stylesheet" href="main/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="main/css/odometer.css">
    <link rel="stylesheet" href="main/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="main/css/slick.css">
    <link rel="stylesheet" href="main/css/spacing.css">
    <link rel="stylesheet" href="main/css/flaticon.css">
    <link rel="stylesheet" href="main/css/style.css">
    <link rel="stylesheet" href="main/css/responsive.css">

    <!-- Livewire Styles -->
    <style>
        [wire\:loading] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [x-cloak] {
            display: none !important;
        }

        :root {
            --livewire-progress-bar-color: #2299dd;
        }
    </style>
</head>


<body>
    <!-- Preloader-start -->
    <div id="preloader">
        <div class="ta-preloader-block">
            <div class="ta-spinner-eff">
                <div class="ta-bar ta-bar-top"></div>
                <div class="ta-bar ta-bar-right"></div>
                <div class="ta-bar ta-bar-bottom"></div>
                <div class="ta-bar ta-bar-left"></div>
            </div>
        </div>
    </div>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->
    @include('header')

    <!-- header-area-end -->
    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider-area">
            <div class="slider-active">
                <div class="single-slider slider-bg" data-background="{{ asset('Images/home%202.jpg') }}">
                    <div class="slider-right-bg" data-animation="tgFadeInRight" data-delay=".8s"
                        data-background="assets/img/banner/banner_right_img01.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="banner-content text-center">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">Imani Elite Realty
                                    </h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">
                                        Nairobi's trusted real estate company with over a decade of expertise.
                                        Specializing in buying, selling,
                                        and leasing properties, we simplify your property journey with professionalism
                                        and care.
                                    </p>
                                    <a href="/about-us" class="btn" data-animation="fadeInUp" data-delay=".6s">
                                        <div class="btn_m">
                                            <div class="btn_c">
                                                <div class="btn_t1">Learn More</div>
                                                <div class="btn_t2">Learn More</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-bg" data-background="{{ asset('Images/home%201.jpg') }}">
                    <div class="slider-right-bg" data-animation="tgFadeInRight" data-delay=".8s"
                        data-background="assets/img/banner/banner_right_img02.jpg"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="banner-content text-center">
                                    <h2 class="title" data-animation="fadeInUp" data-delay=".2s">Welcome to Imani
                                        Elite Realty</h2>
                                    <p data-animation="fadeInUp" data-delay=".4s">
                                        With over a decade of experience, we specialize in buying, selling, and leasing
                                        properties.
                                        Whether in Nairobi or Dubai, we ensure a seamless and professional real estate
                                        experience.
                                    </p>
                                    <a href="/about-us" class="btn" data-animation="fadeInUp" data-delay=".6s">
                                        <div class="btn_m">
                                            <div class="btn_c">
                                                <div class="btn_t1">Learn More</div>
                                                <div class="btn_t2">Learn More</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-scroll-down">
                <a href="#about" class="section-link">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- about-area -->
        <section id="about" class="about-area section-pt-135 section-pb-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-35">
                            <span class="sub-title">Who We Are</span>
                            <h2 class="title">Expertise, Confidence, and Assurance in Real Estate</h2>
                        </div>
                        <div class="about-content text-center">
                            <p>
                                For over a decade, Imani Elite Realty has been empowering clients to find their ideal
                                properties.
                                With meticulous attention to detail and a commitment to excellence, we provide a
                                seamless journey
                                from property listing to closing. Trust us to navigate the complexities of real estate
                                and guide you
                                in making informed decisions. Welcome to Imani Elite Realty, where every transaction is
                                built on
                                trust and professionalism.
                            </p>
                            <a href="/about-us" class="btn transparent-btn">
                                <div class="btn_m">
                                    <div class="btn_c">
                                        <div class="btn_t1">More About</div>
                                        <div class="btn_t2">More About</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- about-area-end -->


        <!-- video-area -->
        <div class="video-area section-pt-140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="video-bg wow fadeInUp" data-wow-delay=".2s">
                            <a href="https://www.youtube.com/watch?v=zSGnjq-xrVw" class="popup-video play-btn"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video-area-end -->

        <!-- services-area -->
        <section class="services-area section-pt-140 section-pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-title text-center mb-55">
                            <span class="sub-title">What We Do</span>
                            <h2 class="title">Buy, Rent, or Lease with Confidence</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Buy Section -->
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/services/buy.jpg" alt="Buy"
                                        style="width: 100px; height: 100px; border-radius: 50%;"></a>
                            </div>

                            <div class="services-content">
                                <h2 class="title"><a href="#">Buy</a></h2>
                                <p>
                                    Discover properties tailored to your preferences. From modern apartments to
                                    luxurious homes,
                                    we provide a curated portfolio that ensures a seamless buying experience from
                                    selection
                                    to closing.
                                </p>
                                <a href="/our-services" class="text-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Rent Section -->
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/services/sell.jpg" alt="Rent"
                                        style="width: 100px; height: 100px; border-radius: 50%;"></a>
                            </div>

                            <div class="services-content">
                                <h2 class="title"><a href="#">Rent</a></h2>
                                <p>
                                    Find the perfect rental home in Nairobi. From stylish apartments to serene houses,
                                    we connect you with exceptional options that blend comfort, convenience, and
                                    quality.
                                </p>
                                <a href="/our-services" class="text-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Lease Section -->
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="services-item">
                            <div class="services-thumb">
                                <a href="#"><img src="main/img/services/lease.jpg" alt="Lease"
                                        style="width: 100px; height: 100px; border-radius: 50%;"></a>
                            </div>

                            <div class="services-content">
                                <h2 class="title"><a href="#">Lease</a></h2>
                                <p>
                                    Enjoy flexible leasing options for short-term or long-term stays. Our fully
                                    furnished,
                                    ready-to-move-in properties offer the perfect combination of comfort, style, and
                                    convenience.
                                </p>
                                <a href="/our-services" class="text-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- services-area-end -->

        <!-- project-area -->
        <section class="project-area section-py-140">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Our Properties</span>
                            <h2 class="title">Explore Premium Living Spaces</h2>
                        </div>
                    </div>
                </div>
                <div class="project-item-wrap">
                    <div class="row">
                        <!-- Placeholder Property 1 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="#"><img src="\Images\Premium Residential Living.jpg"
                                            alt="Property 1"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="/our-services">Premium Residential Living</a>
                                    </h3>
                                    <span>Westlands, Nairobi</span>
                                </div>
                            </div>
                        </div>
                        <!-- Placeholder Property 2 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="#"><img src="\Images\Modern Apartments.jpg" alt="Property 2"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="/our-services">Modern Apartments</a>
                                    </h3>
                                    <span>Nairobi</span>
                                </div>
                            </div>
                        </div>
                        <!-- Placeholder Property 3 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="#"><img src="\Images\Upscale Urban Spaces.jpg"
                                            alt="Property 3"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="/our-services">Upscale Urban Spaces</a>
                                    </h3>
                                    <span>Westlands, Nairobi</span>
                                </div>
                            </div>
                        </div>
                        <!-- Placeholder Property 4 -->
                        <div class="col-lg-6 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <a href="#"><img src="\Images\Luxury Residences.jpg" alt="Property 4"></a>
                                </div>
                                <div class="project-content">
                                    <h3 class="title">
                                        <a href="/our-services">Luxury Residences</a>
                                    </h3>
                                    <span>Westlands, Nairobi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-all-btn text-center">
                        <a href="/propertie" class="btn transparent-btn">
                            <div class="btn_m">
                                <div class="btn_c">
                                    <div class="btn_t1">Explore All</div>
                                    <div class="btn_t2">Explore All</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- newsletter-area -->
        <section class="newsletter-area newsletter-area-two section-py-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-inner">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="newsletter-content">
                                        <div class="section-title mb-50">
                                            <span class="sub-title">Quick Inquiry</span>
                                            <h2 class="title">Have a question or something you would like to share?
                                                We'd love to hear from you.</h2>
                                        </div>
                                        <div wire:snapshot="{&quot;data&quot;:{&quot;name&quot;:null,&quot;phone&quot;:null,&quot;email&quot;:null,&quot;inquiry_type&quot;:null,&quot;message&quot;:null,&quot;page&quot;:&quot;Home Page&quot;,&quot;terms&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;mOPD3uTT7ZnPxLJJaS2O&quot;,&quot;name&quot;:&quot;inquiry-form&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;815207c5045e8ac35c09332b94b748031a9aff33f3fa0907301fc79e6d8fa8c0&quot;}"
                                            wire:effects="[]" wire:id="mOPD3uTT7ZnPxLJJaS2O">
                                            <form id="inquiry-form" method="POST"
                                                action="{{ route('inquiry.store') }}" class="newsletter-form">
                                                @csrf
                                                <ul class="list-wrap">
                                                    <li><input type="text" id="name" placeholder="Your name"
                                                            name="name" required></li>
                                                    <li><input type="text" id="phone"
                                                            placeholder="Phone number" name="phone" required></li>
                                                    <li><input type="email" id="email" placeholder="Your email"
                                                            name="email" required></li>
                                                    <li>
                                                        <select id="inquiry-type" name="inquiry_type" required>
                                                            <option value="" disabled selected>Select Inquiry
                                                                Type</option>
                                                            <option value="general">General Inquiry</option>
                                                            <option value="project">Project Inquiry</option>
                                                            <option value="feedback">Feedback</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </li>
                                                    <li>
                                                        <textarea id="message" placeholder="Your message" name="message" required></textarea>
                                                    </li>
                                                    <li class="submit-btn">
                                                        <button type="submit" id="submit-btn">Submit</button>
                                                    </li>
                                                </ul>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox"
                                                        name="terms" required>
                                                    <label for="checkbox">I accept <span>Terms & Conditions</span> for
                                                        processing personal data</label>
                                                </div>
                                            </form>
                                            <div id="loading-spinner" style="display: none;">
                                                <div class="spinner"></div>
                                            </div>

                                            <div id="form-message"></div>
                                            <style>
                                                #loading-spinner {
                                                    display: flex;
                                                    justify-content: center;
                                                    align-items: center;
                                                    position: fixed;
                                                    top: 0;
                                                    left: 0;
                                                    width: 100%;
                                                    height: 100%;
                                                    background: rgba(255, 255, 255, 0.8);
                                                    z-index: 9999;
                                                }

                                                .spinner {
                                                    width: 50px;
                                                    height: 50px;
                                                    border: 6px solid #ddd;
                                                    border-top: 6px solid #3498db;
                                                    border-radius: 50%;
                                                    animation: spin 1s linear infinite;
                                                }

                                                @keyframes spin {
                                                    0% {
                                                        transform: rotate(0deg);
                                                    }

                                                    100% {
                                                        transform: rotate(360deg);
                                                    }
                                                }
                                            </style>

                                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#inquiry-form').on('submit', function(e) {
                                                        e.preventDefault();

                                                        const formData = new FormData(this);
                                                        $('#loading-spinner').show(); // Show spinner
                                                        $('#submit-btn').prop('disabled', true);

                                                        $.ajax({
                                                            url: $(this).attr('action'),
                                                            method: 'POST',
                                                            data: formData,
                                                            processData: false,
                                                            contentType: false,
                                                            success: function(response) {
                                                                $('#loading-spinner').hide(); // Hide spinner
                                                                $('#form-message').text(response.message).css('color', 'green');
                                                                $('#submit-btn').prop('disabled', false);
                                                                $('#inquiry-form')[0].reset();
                                                            },
                                                            error: function(xhr) {
                                                                $('#loading-spinner').hide(); // Hide spinner
                                                                $('#form-message').text('Something went wrong!').css('color', 'red');
                                                                $('#submit-btn').prop('disabled', false);
                                                            }
                                                        });
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- newsletter-area-end -->

    </main>
    <!-- main-area-end -->

    @include('footer')
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="main/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="main/js/jquery.magnific-popup.min.js"></script>
    <script src="main/js/jquery.odometer.min.js"></script>
    <script src="main/js/jquery.parallaxScroll.min.js"></script>
    <script src="main/js/simpleParallax.min.js"></script>
    <script src="main/js/slick-animation.min.js"></script>
    <script src="main/js/swiper-bundle.min.js"></script>
    <script src="main/js/jarallax.min.js"></script>
    <script src="main/js/jarallax-video.min.js"></script>
    <script src="main/js/jquery.appear.js"></script>
    <script src="main/js/jquery.easing.js"></script>
    <script src="main/js/slick.min.js"></script>
    <script src="main/js/ajax-form.js"></script>
    <script src="main/js/wow.min.js"></script>
    <script src="main/js/main.js"></script>


    <!-- JS here -->

    {{-- <script src="livewire/livewired3f4.js?id=a27c4ca2" data-csrf="QOgzJhc2upv5MaBFhEqomS8JeVIxKGGntIg7sy1J"
        data-update-uri="/livewire/update" data-navigate-once="true"></script> --}}
</body>



</html>
