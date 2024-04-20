<body data-bs-spy="scroll" data-bs-target="#navbar-example">

    <!-- Begin page -->
    <div class="layout-wrapper landing">
        <nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url() ?>">
                    <h1 class="display-7 fw-medium mb-4 lh-base text-white"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" alt="" width="40px" height="30px">Chat<span>Blend</span></h1>
                </a>
                <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                        <li class="nav-item">
                            <a class="nav-link fs-15 active" href="<?php echo base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#menu">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-15" href="#community">Community</a>
                        </li>
                    </ul>

                    <div class="">
                        <a href="<?php echo base_url() ?>signup" class="btn btn-success">Create Account</a>
                    </div>
                </div>

            </div>
        </nav>
        <div class="bg-overlay bg-overlay-pattern"> </div>
        <!-- end navbar -->

        <!-- start hero section -->
        <section class="section nft-hero" id="hero">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-sm-10">
                        <div class="text-center">
                            <h1 class="display-4 fw-medium mb-4 lh-base text-white">Speak with anyone around the world &<span class="text-success"> Master any language</span></h1>
                            <p class="lead text-white-50 lh-base mb-4 pb-2">Your ultimate language learning app designed to break down barriers and connect users from around the globe through the power of conversation. </p>

                            <div class="hstack gap-2 justify-content-center">
                                <a href="<?php echo base_url() ?>signin" class="btn btn-primary">Sign In Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                                <a href="<?php echo base_url() ?>signin" class="btn btn-danger">Explore Now <i class="ri-arrow-right-line align-middle ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end hero section -->

        <!-- start home -->
        <section class="section" id="main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 fw-bolder lh-base">I want to practice...</h1>
                            <p class="text-muted">Connect with global conversational partners effortlessly! Whether you're into literary chats over coffee, cultural exchanges over meals, or tech talks over brunch, we've got you covered. From Mandarin practice in the morning to French philosophy in the afternoon, and anime discussions in the evening, our platform links you with like-minded enthusiasts worldwide. Start connecting today to broaden your horizons and forge meaningful connections!</p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row g-5">
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4 ">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/united-kingdom.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>English</h5>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/philippines.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>Filipino</h5>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/spain.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>Spanish</h5>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4 ">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/italian.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>Italian</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4 ">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/china.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>Chinese</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="card text-center border-0">
                            <div class="card-body py-3 px-4 ">
                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/flags/japan.png" alt="" height="60" class="mb-3 pb-2"></a>
                                <h5>Japanese</h5>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end main -->

        <!-- start menu -->
        <section class="section bg-dark" id="menu">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="mb-3 fw-bold lh-base text-white">What is Chat<span>Blend</span>?</h1>
                            <p class="mb-4 text-white">The language learning app where millions of people teach each other.</p>
                            <div class="row g-5">
                                <div class="col-lg-6">
                                    <div class="card text-center border">
                                        <div class="card-body p-3 ">
                                            <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/users/stefania.webp" alt="" width="500px" class="mb-3 pb-2"></a>
                                            <h5>Stefania is a native German speaker. </h5>
                                            <h5>She wants to work on her English.</h5>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="card text-center border">
                                        <div class="card-body p-3">
                                            <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/users/anne.webp" alt="" width="500px" class="mb-3 pb-2"></a>
                                            <h5>Anne is a native English speaker.</h5>
                                            <h5>She wants to work on her German.</h5>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <h1 class="text-center lh-base pb-5" id="connect-info">Anne and Stefania connect on the Chat<span class="connect-info">Blend app...</span></h1>
                </div>

            </div><!-- end container -->
        </section>
        <!-- end marketplace -->
        <section class="col-lg-12" id="blog">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                        <h1 class="card-title mb-0">Millions of language partners. Any language combination.</h1>
                    </div><!-- end card header -->
                    <div class="card-body border-0">
                        <!-- Swiper -->
                        <div class="swiper responsive-swiper rounded gallery-light pb-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gallery-box card">
                                        <div class="gallery-container">
                                            <a class="image-popup" href="assets/images/small/img-1.jpg" title="">
                                                <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url('public/assets') ?>/images/people/Johanna.jpg" alt="" />
                                                <div class="gallery-overlay">
                                                    <h5 class="overlay-caption">Johanna Marie Quitoviera</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <div class="d-flex align-items-center mt-1">
                                                <div class="flex-grow-1"><span>Can teach: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/spain.png" id="language"></div>
                                                <div class="flex-grow-1"><span>Want to learn: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/italian.png" id="language"></div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3">
                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 2.2K
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-box card">
                                        <div class="gallery-container">
                                            <a class="image-popup" href="assets/images/small/img-2.jpg" title="">
                                                <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url('public/assets') ?>/images/people/Jayson.jpg" alt="" />
                                                <div class="gallery-overlay">
                                                    <h5 class="overlay-caption">Jayson Carlos</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <div class="d-flex align-items-center mt-1">
                                                <div class="flex-grow-1"><span>Can teach: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/spain.png" id="language"></div>
                                                <div class="flex-grow-1"><span>Want to learn: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/china.png" id="language"></div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3">
                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.2K
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-box card mb-0">
                                        <div class="gallery-container">
                                            <a class="image-popup" href="assets/images/small/img-10.jpg" title="">
                                                <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url('public/assets') ?>/images/people/josiah.jpg" alt="">
                                                <div class="gallery-overlay">
                                                    <h5 class="overlay-caption">Josiah Ariston</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <div class="d-flex align-items-center mt-1">
                                                <div class="flex-grow-1"><span>Can teach: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/japan.png" id="language"></div>
                                                <div class="flex-grow-1"><span>Want to learn: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/united-kingdom.png" id="language"></div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3">
                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 632
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-box card">
                                        <div class="gallery-container">
                                            <a class="image-popup" href="assets/images/small/img-4.jpg" title="">
                                                <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url('public/assets') ?>/images/people/Filwayne.jpg" alt="" />
                                                <div class="gallery-overlay">
                                                    <h5 class="overlay-caption">Filwayne De Lara</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <div class="d-flex align-items-center mt-1">
                                                <div class="flex-grow-1"><span>Can teach: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/philippines.png" id="language"></div>
                                                <div class="flex-grow-1"><span>Want to learn: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/italian.png" id="language"></div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3">
                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 825
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-box card">
                                        <div class="gallery-container">
                                            <a class="image-popup" href="assets/images/small/img-6.jpg" title="">
                                                <img class="gallery-img img-fluid mx-auto" src="<?php echo base_url('public/assets') ?>/images/people/Joanne.jpg" alt="" />
                                                <div class="gallery-overlay">
                                                    <h5 class="overlay-caption">Joanna Joyce Garcia Acar</h5>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <div class="d-flex align-items-center mt-1">
                                                <div class="flex-grow-1"><span>Can teach: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/spain.png" id="language"></div>
                                                <div class="flex-grow-1"><span>Want to learn: </span> <img src="<?php echo base_url('public/assets') ?>/images/flags/china.png" id="language"></div>
                                                <div class="flex-shrink-0">
                                                    <div class="d-flex gap-3">
                                                        <button type="button" class="btn btn-sm fs-12 btn-link text-body text-decoration-none px-0">
                                                            <i class="ri-thumb-up-fill text-muted align-bottom me-1"></i> 3.4K
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div>
        </section>
        <!-- start plan -->
        <section class="section " id="community">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h2 class="mb-3 fw-semibold lh-base">People Love ChatBlend!</h2>
                            <p class="">Over 100,000 5-star reviews!</p>
                            <div class="container">
                                <div class="row g-5 col-lg-12">
                                    <div class="col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4 ">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"I Love this app. Speaking to people who also want to learn a language is the best thing ever!"</h5>
                                                <p class="text-muted">Dius</p>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"There is always a friendly language partner ready to strike up a conversation."</h5>
                                                <p class="text-muted">Mon Carlo</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <div class="col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"If you are truly serious about learning a different language this is the app for you."</h5>
                                                <p class="text-muted">Cristy Ann</p>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <div class=" col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4 ">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"Lots of nice people and it's fun and easy to use. No other application can beat this!"</h5>
                                                <p class="text-muted">Lenard</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4 ">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"This app is seriously the best! it's so crazy to meet people from the other side of the world!"</h5>
                                                <p class="text-muted">Roy</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card text-center border-0">
                                            <div class="card-body py-3 px-4 ">
                                                <a href="#menu"><img src="<?php echo base_url('public/assets') ?>/images/rating.png" alt="" height="60" class="mb-3 pb-2"></a>
                                                <h5>"I feel privileged to have met sensational people through the app. If only I can rate this 100/10".</h5>
                                                <p class="text-muted">Eric</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end container -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Swiper -->
                        <div class="swiper mySwiper pb-4">
                            <div class="swiper-wrapper mb-5 all_restocat">
                            </div>
                            <div class="swiper-pagination swiper-pagination-dark"></div>
                        </div>
                    </div>
                </div>
            </div><!-- end container -->
        </section>
        <!-- end plan -->

        <!-- start cta -->
        <section class="py-5 bg-primary position-relative">
            <div class="bg-overlay bg-overlay-pattern opacity-50"></div>
            <div class="container">
                <div class="row align-items-center gy-4">
                    <div class="col-sm">
                        <div>
                            <h4 class="text-white mb-0 fw-semibold">Start practicing now!</h4>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-auto">
                        <div>
                            <a href="<?php echo base_url() ?>signin" class="btn-lg bg-gradient btn-danger">Sign Up</a>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta -->

        <!-- Start footer -->
        <footer class="custom-footer bg-dark py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-4">
                        <div>
                            <div>
                                <h1 class="display-7 fw-medium mb-4 lh-base text-white"><img src="<?php echo base_url('public/assets') ?>/images/svg/blender.svg" alt="" width="40px" height="30px">Chat<span>Blend</span></h1>
                            </div>
                            <div class="mt-4">
                                <p>A language learning app</p>
                                <p> Your ultimate language learning app designed to break down barriers and connect users from around the globe through the power of conversation.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 ms-lg-auto">
                        <div class="row">
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Local ChatBlenders</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#">Berkley</a></li>
                                        <li><a href="#">Brisbane</a></li>
                                        <li><a href="#">Chicago</a></li>
                                        <li><a href="#">Edinburgh</a></li>
                                        <li><a href="#">Houston</a></li>
                                        <li><a href="#">Melbourne</a></li>
                                        <li><a href="#">New York</a></li>
                                        <li><a href="#">San Diego</a></li>
                                        <li><a href="#">Manila</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Legal</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#">Terms of service</a></li>
                                        <li><a href="#">Legal Information</a></li>
                                        <li><a href="#">Privacy</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4 mt-4">
                                <h5 class="text-white mb-0">Support</h5>
                                <div class="text-muted mt-3">
                                    <ul class="list-unstyled ff-secondary footer-list">
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="<?php echo base_url() ?>restaurant">Be a ChatBlender</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row text-center text-sm-start align-items-center mt-5">
                    <div class="col-sm-6">

                        <div>
                            <p class="copy-rights mb-0">
                                2024 © ChatBlend
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-3 mt-sm-0">
                            <ul class="list-inline mb-0 footer-social-link">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-facebook-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-github-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-linkedin-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-google-fill"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="avatar-xs d-block">
                                        <div class="avatar-title rounded-circle">
                                            <i class="ri-dribbble-line"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    <!-- end layout wrapper -->