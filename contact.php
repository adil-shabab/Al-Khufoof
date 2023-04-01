<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- fancy box -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css" />
    <!-- data aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="asset/css/loader.css">

    <link rel="icon" href="asset/img/logo/logos.png">


    <style>
        .interior-navbar .nav-item .nav-link.active {
            font-weight: 400;
            color: white;
        }
        .interior-navbar .nav-item .nav-link {
            color: #cdcdcd;
        }
    </style>
</head>

<body>

    <div class="main-inner-pages contact-banner">
        <!-- header -->
        <?php include 'inc/header.php';?>
        <!-- header end -->

        <div class="main-banner">
            <div class="container">
                <div class="banner-head text-white">Contact Us</div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-white">
                        <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                        <span class="text-white">></span>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <!-- contact detail & form section start -->

    <div class="contact-form-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12 order-lg-1 order-md-2 order-2">
                    <div class="contact-detail-box">
                        <h4 class="mb-4">Contact Info</h4>
                        <p class="main-para mb-4">We build your dream space that inspires you to be yourself and will work with you every step of the way so that your vision becomes a reality</p>
                        <div class="location-dtls mt-md-3">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                Al khaimah Blg 2 P.O Box 231900, Dubai
                            </div>
                        </div>
                        <div class="location-dtls mt-md-2">
                            <i class="fa-solid fa-mobile-screen-button"></i>
                            <div>
                                <a href="#">+971 556061169</a>
                            </div>
                        </div>
                        <div class="location-dtls mt-md-2">
                            <i class="fa-regular fa-envelope"></i>
                            <div>
                                <a href="#">jay@alkufouf.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 order-lg-2 order-md-1 order-1 mb-lg-0 mb-md-5 mb-5">
                    <div class="contact-form-box">
                        <h6>Get in touch with us</h6>
                        <h3 class="main-head black-col mb-md-3 mb-2">Fill the form and send your query</h3>

                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="contact-input">
                                    <input type="text" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-textarea">
                                    <textarea  rows="4"></textarea>
                                </div>
                            </div>
                            <div class="contact-pg-btn">
                                <a href="" class="btn-read-more bn632-hover bn20">Submit Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact detail & form section end -->


    <!-- map section start -->

    <div class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.762951834812!2d75.7827703!3d11.278827899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3eda69b492cec3a6!2sMentegoz%20Technologies!5e0!3m2!1sen!2sin!4v1670223065644!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- map section end -->


    <!-- footer start -->
    <?php include 'inc/footer.php';?>
    <?php include 'inc/loader.php';?>
    <!-- footer end -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>
    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <!-- slick -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- gallery -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <!-- fancybox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <script>
        document.getElementById('contact__us').classList.add('active')
    </script>

</body>

</html>