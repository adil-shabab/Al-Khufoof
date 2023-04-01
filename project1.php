<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- fancy box -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css"/>
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

    <div class="main-inner-pages project1">
        <!-- header -->
        <?php include 'inc/header.php';?>
        <!-- header end -->

        <div class="main-banner">
            <div class="container">
                <div class="banner-head text-white">Villa 543 B</div>
                <nav aria-label="breadcrumb">
                <ol class="text-white breadcrumb">
                    <li class="text-white breadcrumb-item"><a href="#">Home</a></li>
                    <span class="text-white">></span>
                    <li class="text-white breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
                </nav>
            </div>
        </div>
    </div>

    


    <div class="mt-5 txt_inner_project">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="head__txt mb-3 head">Villa 543 B</h3>
                    <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae dolorem libero accusantium fugit debitis cumque asperiores nihil repellendus aliquid, qui perspiciatis fuga excepturi numquam voluptate. Facere magni quidem eius iusto. Harum iste in tempore nam aperiam quisquam quibusdam architecto, iusto sunt? Ipsum expedita cumque rem aspernatur perferendis nobis ea exercitationem ipsa molestias! Voluptate est ipsa architecto vitae.</p>
                </div>
                <div class="col-md-4" id="bx">
                    <div class="d-flex align-items-center mb-3">
                        <i class="me-1 fa-solid fa-location-dot"></i>
                        <p class="m-0 ms-3">Malappuram, Kerala, India</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="me-1 fa-solid fa-layer-group"></i>
                        <p class="m-0 ms-3">480 Sqft</p>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="me-1 fa-solid fa-user-large"></i>
                        <p class="m-0 ms-3">Sharon Armin</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="mb-5 pb-5 inner_project_glry">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="d-flex flex-column mt-3">
                        <a href="assets/images/project/1.jpg" data-fancybox="group">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/1.jpg" /></span>
                        </a>
                        <a href="assets/images/project/2.jpg" data-fancybox="group" class="mt-3">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/2.jpg" /></span>
                        </a>
                        <a href="assets/images/project/6.jpg" data-fancybox="group" class="mt-3">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/6.jpg" /></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="row">
                        <a href="assets/images/project/3.jpg" data-fancybox="group" class="mt-3">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/3.jpg" /></span>
                        </a>
                        <a href="assets/images/project/4.jpg" data-fancybox="group" class="mt-3">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/4.jpg" /></span>
                        </a>
                        <a href="assets/images/project/5.jpg" data-fancybox="group" class="mt-3">
                            <span class="thumb"> <img class="img-fluid" src="assets/images/project/5.jpg" /></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- footer start -->
    <?php include 'inc/footer.php';?>
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
        document.getElementById('projects').classList.add('active')
    </script>

</body>
</html>