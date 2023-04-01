<!doctype html>
<html lang="en">

<head>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- fontawesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- fancy box -->
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.min.css"/>
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <!-- owl carousel cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- custom css    -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/loader.css">


  <!-- data aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="icon" href="asset/img/logo/logos.png">

</head>

<body>


  <header>
<!-- navbar -->

<nav class="navbar interior-navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="asset/img/logo/new_logo-3.png" id="navbar___img" alt=""></a>
      <button class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobile-offcanvas" aria-controls="mobile-offcanvas" aria-expanded="false" aria-label="Toggle navigation" style="border: none; outline: none; background: none">
        <span class="d-md-none d-block navbar-toggler-icon" style="background-image: none;">
          <img src="asset/img/logo/menu.png" class="img-fluid" alt="">
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="text-white nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" id="about__us" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="text-white nav-link" id="services" href="services.php">Services</a>
          </li>
          <li class="nav-item">
              <a class="text-white nav-link" id="projects" href="projects.php">Projects</a>
          </li>
          <li class="nav-item">
              <a class="text-white nav-link" id="contact__us" href="contact.php">Contact Us</a>
          </li>
        </ul>
          <div class="desktop-canvas-btn">
              <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasdesktop" aria-controls="offcanvasdesktop">
                <img class="menu___bar" src="asset/img/logo/menu.png" alt="">
              </button>
          </div>
      </div>
    </div>
  </nav>
  
  
      <!-- desktop offcanvas -->
      
      <div style="z-index: 1111;" class="bg-white offcanvas offcanvas-end desktopcanvas" tabindex="-1" id="offcanvasdesktop" aria-labelledby="offcanvasdesktop" style="z-index: 11111;">
          <div class="offcanvas-header">
          <div style="margin-top: 30px;" class="offcanvas-title desktop-offcanvas-title" id="offcanvasdesktop">
              <img class="img-fluid w-25" src="asset/img/logo/logos.png" alt="">
          </div>
          <button type="button" class="close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"> <img src="asset/img/sm-icons/close.png" alt="" style="width: 20px;"></button>
          </div>
          <div class="offcanvas-body">
      
          <div class="company-para-offcanvas">
              <p>we provide our clients with outstanding services from the stage of Conceptualization to Completion of the project. </p>
          </div>
          <div class="offcanvas-address">
              <h5>Office Address</h5>
              <div class="mt-3 address-details">
                  <i class="fa-solid fa-map-location-dot"></i>
                  <div>
                      <p class="m-0">Al khaimah Blg 2 P.O Box 231900</p>
                      <p>Dubai</p>
                  </div>
              </div>
          </div>
          <div class="phone-numbers">
              <h5>Contact Us Now</h5>
              <div class="number"><a href="#"><i class="fa-solid fa-phone pe-2"></i>+971 556061169</a></div>
              <div class="number"><a href="#"><i class="fa-solid fa-envelope pe-2"></i>jay@alkufouf.com</a></div>
          </div>
          <div class="social-media-offcanvas">
              <h5>Find us here</h5>
              <div class="social-media-sm ">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </div>
          </div>
          </div>
      </div>
      
      
      
      <!-- mobile navbar -->
      
      <div style="z-index: 1111; width:75%;" class="bg-white offcanvas offcanvas-start mobile-offcanvas px-3" tabindex="-1" id="mobile-offcanvas" aria-labelledby="mobile-offcanvas">
          <div class="offcanvas-header mt-3">
          <div class="offcanvas-title" id="mobile-offcanvas">
              <img class="img-fluid w-50" src="asset/img/logo/Al kufouf Logo-02.png" alt="">
          </div>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
      
              <ul class="mobile-nav mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="projects.php">Projects</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              </ul>
      
          <div class="d-flex-full mobile social-media-offcanvas">
              <div class="social-media-sm">
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
              <a href="#"><i class="fa-solid fa-envelope"></i></a>
              </div>
          </div>
      
          </div>
      </div>
    
  </header>




  <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="row title_box">
                <div class="col-md-7">
                    <h1 class="title">CONNECTING PEOPLE WITH THEIR STYLE</h1>
                    <p class="title-desc">When it comes to architecture, our team is top-notch! We provide a unique design solution for every corner</p>
                    <a href="contact.php"><button>Enquire Now</button></a>
                </div>
            </div>
            <img src="assets/images/project/21.jpg" class="d-block w-100" alt="...">
          </div>

          <div class="carousel-item">
            <!-- <h1 class="head_txt">WE ARE SPECIALIZED INTERIOR DESIGN FIRM BASED IN DUBAI</h1> -->
            <div class="row title_box">
                <div class="col-md-7">
                    <h1 class="title">WE ARE SPECIALIZED INTERIOR DESIGN FIRM BASED IN DUBAI</h1>
                    <p class="title-desc">Architecture is basically the art of organizing interior space. We design spaces that are functional, beautiful, and sustainable. </p>
                    <a href="contact.php"><button>Enquire Now</button></a>
                </div>
            </div>
            <img src="assets/images/dubai.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="row title_box">
                <div class="col-md-7">
                    <h1 class="title">DESIGN YOUR HOME WITH PASSION</h1>
                    <p class="title-desc">We build your dream space that inspires you to be yourself and will work with you every step of the way so that your vision becomes a reality</p>
                    <a href="contact.php"><button>Enquire Now</button></a>
                </div>
            </div>
            <img src="assets/images/project/20.jpg" class="d-block w-100" alt="...">
          </div>
        
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>





      <div class="about__section">
        <div class="container">
            <div class="row">
                <div class="d-md-none d-block d-flex-full col-md-5 mb-5">
                    <div class="right__box">
                        <span class="mb-3">what we offer</span>
                        <h2 class="mb-3">Providing solutions for construction management, and restoration</h2>
                        <p class="description__txt">At Al Kufouf, we provide our clients with outstanding services from the stage of Conceptualization to Completion of the project. It is important to understand that there are several steps that need to be undertaken in order to successfully complete a given project. We not only ensure taking care of your designs and fit out but everything that needs to be fulfilled along with it.</p>
                        <!-- <p class="description__txt">Al kufouf Interior Decoration is one of the leading Interior Design & Fit-out Contracting Company in Dubai with an exceptional reputation for providing innovative, quality and extraordinary designs and services. We cater all interior design and fit-out solutions as a commercial, Residential, Hospitality Restaurant, Office, Joinery, Beauty Salon and Spa, Retail and Health clinic.</p> -->
                        <button class="button mt-3">Read More</button>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="left__box">
                        <div class="row pe-lg-5">
                            <div class="col-md-6 px-2 mb-3">
                                <div class="box first__box">
                                    <img src="assets/images/icons/sketch.png" alt="" class="icon">
                                    <h4>Construction Management</h4>
                                    <p>We have a wealth of experience working as main building contractors</p>
                                </div>
                            </div>
                            <div class="col-md-6 px-2 mb-3">
                                <div class="box second__box">
                                    <img src="assets/images/icons/plan.png" alt="" class="icon">
                                    <h4>Landscape Design</h4>
                                    <p>We have a wealth of experience working as main building contractors</p>
                                </div>
                            </div>
                            <div class="col-md-6 px-2 mb-3">
                                <div class="box third__box">
                                    <img src="assets/images/icons/interior-design.png" alt="" class="icon">
                                    <h4>Interior Design</h4>
                                    <p>We have a wealth of experience working as main building contractors</p>
                                </div>
                            </div>
                            <div class="col-md-6 px-2 mb-3">
                                <div class="box fourth__box">
                                    <img src="assets/images/icons/construction-worker.png" alt="" class="icon">
                                    <h4>Urban Planning</h4>
                                    <p>We have a wealth of experience working as main building contractors</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-block d-none d-flex-full col-md-5">
                    <div class="right__box">
                        <span class="">About Us</span>
                        <h2 class="mb-3">Providing solutions for construction management, and restoration</h2>
                        <p class="description__txt">At Al Kufouf, we provide our clients with outstanding services from the stage of Conceptualization to Completion of the project. It is important to understand that there are several steps that need to be undertaken in order to successfully complete a given project. We not only ensure taking care of your designs and fit out but everything that needs to be fulfilled along with it.</p>
                        <!-- <p class="description__txt">Al kufouf Interior Decoration is one of the leading Interior Design & Fit-out Contracting Company in Dubai with an exceptional reputation for providing innovative, quality and extraordinary designs and services. We cater all interior design and fit-out solutions as a commercial, Residential, Hospitality Restaurant, Office, Joinery, Beauty Salon and Spa, Retail and Health clinic.</p> -->
                        <a href="about.php"><button class="button">Read More</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    





    <div class="impact__section">
        <div class="container">
            <h3 class="heading">Our Process</h3>
            <div class="row">
                <div class="col-md-5">
                    <div class="img_box">
                        <img src="https://images.adsttc.com/media/images/5e55/1fb3/6ee6/7e94/3b00/0117/large_jpg/15_ZHA_One_Thousand_Museum_Miami_%C2%A9Hufton_Crow.jpg?1582636929" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6 col-12 mt-md-0 mt-5">
                            <div class="box">
                                <h5>Discover and Explore</h5>
                                
                                <p>The initiation phase of any project starts with discovering the client, exploring the site, and preparing to create</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="box">
                                <h5>Create and Generate</h5>
                            
                                <p>We need to generate an overall idea, explore options and narrow it down to a final concept.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="box">
                                <h5>Develop and Refine</h5>
                            
                                <p>During this phase, everything needed for execution is prepared by meticulous coordination, so the outcome is perfect and errors are minimized</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="box">
                                <h5>Execute and Evaluate</h5>
                         
                                <p>Everything comes together in this final phase. Now it's time to make sure everything is perfect for the owner to enjoy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="img__cover">

    <div class="callakf">

    <h2>Let’s talk about your ideas!</h2>

    <p>Let us handle everything while you sit back and relax! Everything from the site study to the finest accessories. Providing a seamless "turnkey" service of ultimate luxury...</p>


    </div>
    </div>



<!-- 
    <div class="counter__section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex-full">
                    <div class="box">
                        <i class="fa-solid fa-briefcase"></i>
                        <h5>586</h5>
                        <p>Project Launched</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex-full">
                    <div class="box">
                        <i class="fa-solid fa-layer-group"></i>
                        <h5>506</h5>
                        <p>Branch Office</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex-full">
                    <div class="box">
                        <i class="fa-regular fa-face-smile"></i>
                        <h5>350</h5>
                        <p>Our Happy Clients</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex-full">
                    <div class="box">
                        <i class="fa-solid fa-ribbon"></i>
                        <h5>756</h5>
                        <p>Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->






    <div class="service___box">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-3">
                    <div class="txt_section">
                        <span class="text-white">what we offer</span>
                        <h3 class="text-white">Featured Services</h3>
                        <p class="text-white">We have a wealth of experience working as main building contractors on all kinds of projects, big and small, from home maintenance and improvements to extensions, refurbishments and new builds.</p>
                        <a href="services.php"><button class="view_btn">View More</button></a>
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>01</span>
                        <img src="assets/images/icons/factory.png" alt="">
                        <h5>Factories & Warehouse</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>02</span>
                        <img src="assets/images/icons/residential.png" alt="">
                        <h5>Residential & Commercial</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>03</span>
                        <img src="assets/images/icons/accomodation.png" alt="">
                        <h5>Staff & Labor Accomodation</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>04</span>
                        <img src="assets/images/icons/hospital.png" alt="">
                        <h5>Hospital</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>05</span>
                        <img src="assets/images/icons/showroom.png" alt="">
                        <h5>Showrooms & Service Centers</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
                <div class="col-md-3 px-2 mt-3">
                    <div class="box">
                        <span>06</span>
                        <img src="assets/images/icons/institution.png" alt="">
                        <h5>Educational Institution</h5>
                        <!-- <a href="">View More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<!-- 
    <div class="service___box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img_box">
                        <img src="assets/images/services/service-card.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Our Services</h4>
                    <p>CHC's expertise is in accurately executing large and complex building construction projects. We are proficient in handling diverse construction projects such as</p>
                    <ul class="p-0">
                        <li>Factories & warehouse</li>
                        <li>Residential & Commercial</li>
                        <li>Staff & labor accomodation</li>
                        <li>Hotels</li>
                        <li>Showrooms & Service Centers</li>
                        <li>Hospitals</li>
                        <li>Educational institutions</li>
                        <li>Shopping malls</li>
                        <li>Cinemas</li>
                        <li>State of the art villas</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div> -->














    <!-- latest project section -->

    <div class="latest-projects-section" style="position: relative;">
        <!-- <img src="assets/images/new/time.png" alt="" class="time-line"> -->
        <div class="gray-box-1"></div>
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column justify-content-center col-lg-4 col-md-12 col-12 latest--project">
                    <h3 class="main-head">Our Latest Concepts</h3>
                    <p class="main-para">For Us, attentive listening and understanding are the foundation of strategic design. We live to design audacious and inspirational spaces for people</p>
                    <div class="">
                        <a href="projects.php" class="button mt-3 btn-read-more bn632-hover bn20">View All</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="latest-project-slider owl-carousel">
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/1.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/2.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/3.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/4.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/5.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/6.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/7.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/8.jpeg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/9.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="latest-projects">
                            <div class="latest-projects-box">
                                <img class="img-fluid" src="assets/images/project/12.jpg" alt="">
                                <div class="latest-project-dtls">
                                    <!-- <p class="head">Living Room</p>
                                    <div class="project-location"><i class="fa-regular fa-building"></i>Landmark, Kozhikode</div> -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- latest project section end -->









<!-- img gallery section start -->

<div class="d-none gallerySection">
    <div class="containers">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <a href="assets/images/project/1.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/1.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/2.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/2.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/3.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/3.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/4.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/4.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/5.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/5.jpg" /></span>
                </a>
            </div>

            <div class="grid-item">
                <a href="assets/images/project/6.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/6.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/7.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/7.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/8.jpeg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/8.jpeg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/9.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/9.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/10.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/10.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/11.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/11.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/11.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/11.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/12.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/12.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/13.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/13.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/14.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/14.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/15.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/15.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/16.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/16.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/17.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/17.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/18.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/18.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/19.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/19.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">
                <a href="assets/images/project/20.jpg" data-fancybox="group">
                    <span class="thumb"> <img src="assets/images/project/20.jpg" /></span>
                </a>
            </div>
            <div class="grid-item">

            </div>
        </div>
    </div>
</div>


<!-- img gallery section end -->




<div class="cta__section">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center flex-column text-white col-md-7">
                <h3>Join Our Community</h3>
                <p>We create homes and communities that are beautiful, sustainable, and meaningful</p>
                <div class="d-flex">
                    <input placeholder="Your Email Address" type="text">
                    <button type="submit">Submit</button>
                </div>
            </div>
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <!-- <img src="https://demo.zozothemes.com/induzy/wp-content/uploads/sites/15/2018/06/industrial_worker.png" alt="" class="img-fluid"> -->
            </div>
        </div>
    </div>
</div>



<!-- cta section start -->
<!-- 
<div class="mb-5 cta-section">
    <div class="cta-section-img">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-8 col-md-12 col-12 d-flex flex-column justify-content-center h-100">
                    <p class="cta-head">Get a free consultation. <br>Just leave a request below </p>
                    <div class="cta-input">
                        <input type="text" placeholder="Enter Your Number" name="" id="">
                        <a href="#" class="bn633-hover bn20">Connect Us <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 d-lg-block d-md-none d-none">
                    <div class="cta-right-img">
                        <div class="cta-img-div">
                            <img src="assets/images/cta-side-pic.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- cta section end -->





    
<div class="testimonialSection">
    <img src="assets/img/dots-1.png" class="dots" alt="">
    <div class="container">
        <div  style="position: relative;" class="col-12">
            <h2 class="text-center head-txt">What Our Customers <span>Say!</span></h2>
        </div>
        <div class="testimonialCarousel">
        
            <div  class="testimonialcard">
                <div class="top">
                    <div class="profile">
                        <div>
                            <img src="asset/img/testimonial/profile-1.png" alt="" />
                        </div>
                        <div class="d-flex flex-column ms-3">
                        <p>Manuel</p>
                        <div class="starRating">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <p class="testimonialHead text-center">It was a very good experience</p>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                </div>
            </div>
            <div class="testimonialcard">
                <div class="top">
                    <div class="profile">
                        <div>
                            <img  src="asset/img/testimonial/profile-2.png" alt="" />
                        </div>
                        <div class="d-flex flex-column ms-3">
                        <p>Manuel</p>
                        <div class="starRating">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <p class="testimonialHead text-center">It was a very good experience</p>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                </div>
            </div>
            <div class="testimonialcard">
                <div class="top">
                    <div class="profile">
                        <div>
                            <img src="asset/img/testimonial/profile-3.png" alt="" />
                        </div>
                        <div class="d-flex flex-column ms-3">
                        <p>Manuel</p>
                        <div class="starRating">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <p class="testimonialHead text-center">It was a very good experience</p>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                </div>
            </div>
            <div class="testimonialcard">
                <div class="top">
                    <div class="profile">
                        <div>
                            <img src="asset/img/testimonial/profile-1.png" alt="" />
                        </div>
                        <div class="d-flex flex-column ms-3">
                        <p>Manuel</p>
                        <div class="starRating">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <p class="testimonialHead text-center">It was a very good experience</p>
                <div class="review">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus nibh mauris, nec turpis orci lectus maecenas. Suspendisse sed magna eget nibh in turpis. Consequat duis diam lacus arcu.</p>
                </div>
            </div>              
        </div>
    </div>
</div>




<!-- map section start -->

<div class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3912.762951834812!2d75.7827703!3d11.278827899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3eda69b492cec3a6!2sMentegoz%20Technologies!5e0!3m2!1sen!2sin!4v1670223065644!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- map section end -->


<!-- 



    <div class="clients_section">
        <div class="container">
            <div class="client_carousel row owl-carousel owl-theme">
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-1.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-2.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-3.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-4.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-5.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
                <div class="col-md-3 w-100 item">
                    <div class="box">
                        <img src="asset/img/clients/client-6.png" alt="" class="img-fluid w-75">
                    </div>
                </div>
            </div>
        </div>
    </div>

 -->





  </main>




  <footer>
    <!-- footer section start -->
    <div class="footer__section">
        <div class="px-md-0 px-3 container">
            <div class="pt-5 row w-100">
                <div class="col-lg-3 px-lg-5">
                    <div class="ftr_box">
                        <img src="asset/img/logo/new_logo-3.png" style="width: 150px;" class="mb-3 img-fluid" alt="">
                        <p class="mt-3">We build your dream space that inspires you to be yourself and will work with you every step of the way so that your vision becomes a reality</p>
                    </div>
                </div>
                <div class="col-lg-3 px-lg-5">
                    <div class="ftr_box">
                        <h4>Quick Links</h4>
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                        <a href="projects.php">Projects</a>
                        <a href="services.php">Services</a>
                        <a href="contact.php">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 px-lg-5">
                    <div class="ftr_box">
                        <h4>Contact Us</h4>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fa-solid fa-mobile-retro"></i>
                            <p class="m-0 ms-3">+971 556061169</p>
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fa-solid fa-envelope"></i>
                            <p class="m-0 ms-3">jay@alkufouf.com</p>
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fa-solid fa-location-dot"></i>
                            <p class="m-0 ms-3">Al khaimah Blg 2 P.O Box 231900 Dubai</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 px-lg-5">
                    <div class="ftr_box">
                        <h4>Social Links</h4>
                        <div class="social__icon">
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-brands fa-facebook"></i>
                                <h6>Facebook</h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-brands fa-twitter"></i>
                                <h6>Twitter</h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-brands fa-instagram"></i>
                                <h6>Instagram</h6>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fa-brands fa-pinterest"></i>
                                <h6>Pinterest</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center m-0 copy__right">
            Al Khufoof | All Rights Reserved | Designed By Mentegoz
        </p>
    </div>


    <!-- footer section end -->
  </footer>


  <?php include 'inc/loader.php';?>



  
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
  <!-- gallery -->
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
  <!-- fancybox -->
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <!-- slick -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
  <!-- custom js  -->

  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <script src="assets/js/main.js"></script>

  <script src="asset/js/script.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


   <script>
   var $grid = $('.grid').masonry({
       itemSelector: '.grid-item',
       percentPosition: true,
       columnWidth: '.grid-sizer'
   });
   </script>
   
</body>

</html>