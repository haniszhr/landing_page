<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deazy | Responsive Bootstrap Landing Page Template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <!-- Pe-icon-7 icon -->
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css">

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body>
     <!-- START  NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-light" id="navbar">
        <div class="container">
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="images/logo-light.png" alt="" height="24" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Client</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <div>
                    <ul class="top-right text-end list-unstyled list-inline mb-0 nav-social d-none d-lg-block">
                        <li class="list-inline-item"><a href="" class="facebook"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="" class="twitter"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="" class="instagram"><i class="mdi mdi-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START HOME -->
    <section class="section bg-home align-items-center d-flex" id="home">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center text-white">
                        <h1 class="home-title text-uppercase">Help Your Business Growth <br> Up To High Level</h1>
                        <div class="home-border my-3 mt-4"></div>
                        <p class="home-subtitle pt-4 mx-auto">Maecenas class semper class semper sollicitudin imperdiet
                            aliquam vehicula tempor auctor bibendum turpis ut pede aenean ornare.</p>
                        <div class="pt-4 mt-3 home-button">
                            <a href="#" class="btn btn-primary btn-round text-uppercase">Get Started Now

                                <span class="play-shadow ms-2" data-bs-toggle="modal"
                                    data-bs-target="#watchvideomodal"><span class="home-btn"><i
                                            class="mdi mdi-play text-center"></i></span></span>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false"
                                    tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                        <div class="modal-content home-modal">
                                            <div class="modal-header border-0">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <video id="VisaChipCardVideo" class="video-box" controls>
                                                <source src="https://www.w3schools.com/html/mov_bbb.mp4"
                                                    type="video/mp4">
                                                <!--Browser does not support <video> tag -->
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START SERVICES -->
    <section class="section" id="services">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary text-uppercase">Best Services</h5>
                        <h3 class="mt-3 fw-normal">Creative Services with & digital business</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-diamond"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Digital Design</h5>
                            <p class="text-muted mb-0"> Some quick example text to build on the card title and make up
                                the bulk of the card content Moltin gives you the platform.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="service-box mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-science"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Awesome Support</h5>
                            <p class="text-muted mb-0">It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth leaeve Finibus Bonorum for the far World.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box active mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-display2"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Unlimited Colors</h5>
                            <p class="text-muted mb-0"> Credibly brand standards to compliant users without extensible
                                services.
                                Anibh euismod tincidunt words ut laoreet.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="service-box mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-news-paper"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Truly Multipurpose</h5>
                            <p class="text-muted mb-0">Even the all-powerful Pointing has no control about the blind
                                texts it is an almost unortho exact original form graphic.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-box mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-piggy"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Strategy Solutions</h5>
                            <p class="text-muted mb-0"> Separated they live in Bookmarksgrove right at the coast
                                of the Semantics, a large lange ocean necessary regelialia.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="service-box mt-4">
                        <div class="services-icon">
                            <i class="pe-7s-plane"></i>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-3 f-17 mt-4">Strategy Solutions</h5>
                            <p class="text-muted mb-0">Question Marks and devious Semikoli, but the Little Blind Text
                                didn’t
                                listen. She packed her predefined chunks seven versalia.</p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-14 fw-normal">Learn More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- END SERVICES -->

    <!-- START HOW IT WORKS -->
    <section class="section bg-light" id="work">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">Easy Proccess</h5>
                        <h3 class="mt-2 fw-normal">So... How Does it Works?</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-3">
                <div class="col-lg-4">
                    <div class="work-box work-border text-center p-4">
                        <div class="work-img">
                            <img src="images/work/img-1.png" alt="" class="img-fluid">
                        </div>

                        <div class="work-contain">
                            <h1 class="work-count text-muted display-2 fw-normal">01</h1>
                            <div class="work-desc">
                                <h4 class="f-17">Tell us your idea</h4>
                                <p class="text-muted mt-4 pt-2">It uses a dictionary sit consectetuer amget adipiscing
                                    elit
                                    aenean from coodo tend predefined ligula accident.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box work-border text-center p-4">
                        <div class="work-img">
                            <img src="images/work/img-2.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-contain">
                            <h1 class="work-count text-muted display-2 fw-normal">02</h1>
                            <div class="work-desc">
                                <h4 class="f-17">Debut with users</h4>
                                <p class="text-muted mt-4 pt-2">Phasellus ultricies magna vitae maximus congue lectus ex
                                    aliquet sem
                                    convallis aliquam Ut sit accumsan.</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-4">
                        <div class="work-img">
                            <img src="images/work/img-3.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-contain">
                            <h1 class="work-count text-muted display-2 fw-normal">03</h1>
                            <div class="work-desc">
                                <h4 class="f-17">Research and Develop</h4>
                                <p class="text-muted mt-4 pt-2">Consectetuer adicing commodo ligula eget dolor aenean
                                    massa cum sociis natoque
                                    montes nascetur quam felis.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="mt-4 text-center">
                        <a href="#" class="btn btn-primary btn-round">View More <i
                                class="mdi mdi-arrow-right ps-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOW IT WORKS -->

    <!-- START VIDEO SECTION -->
    <section class="section-lg bg-video">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-box">
                        <div>
                            <a href="" class="play-shadow" data-bs-toggle="modal"
                                data-bs-target="#watchvideomodal"><span class="video-play-icon"><i
                                        class="mdi mdi-play text-center"></i></span></a>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content home-modal">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <video id="VisaChipCardVideo" class="video-box" controls>
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-white mt-5 fw-normal">Beautifull simple handcrafted templates for your website
                        </h3>
                        <p class="text-white-50 text-uppercase text-center pt-3">Unlimited Power And Customization</p>
                        <div class="title-border"></div>

                    </div>
                </div>
            </div>
    </section>
    <!-- END VIDEO SECTION -->

    <!-- START CLIENTS -->
    <section class="section  bg-light" id="client">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">Our Clients</h5>
                        <h3 class="mt-2 fw-normal">What they say about us
                            honest reviews</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5 pt-4">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="client-box mt-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="client-img mt-4">
                                                <img src="images/users/img-1.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="mt-4">
                                                <div class="client-content">
                                                    <h5 class="f-19 fw-normal line-height_1_6">“Our task musat bear to
                                                        free ourselves by widening our circle of comsion to embrace all
                                                        living creatures and the whole
                                                        and quis consectetur nunc sit amet semper justo.
                                                        scelerisque pretium dolor, sit amet vehicula pelleque nature and
                                                        its beauty.”
                                                    </h5>

                                                    <div class="client-icon mt-4 pt-2">
                                                        <i class="mdi mdi-format-quote-close"></i>
                                                    </div>

                                                    <h5 class="f-17 mt-3 mb-2">Brandon Carney</h5>
                                                    <p class="text-primary mb-0 f-14">- Designer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="client-box mt-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="client-img mt-4">
                                                <img src="images/users/img-2.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="mt-4">
                                                <div class="client-content">
                                                    <h5 class="f-19 fw-normal line-height_1_6">“I feel confident
                                                        imposing change on myself. It's a lot more fun proging than
                                                        looking back. That's why I
                                                        ultricies enim at carney malesuada creatures and the whole of
                                                        quis
                                                        consectetur nunc diam on tortor semper throw curve balls.”
                                                    </h5>

                                                    <div class="client-icon mt-4 pt-2">
                                                        <i class="mdi mdi-format-quote-close"></i>
                                                    </div>

                                                    <h5 class="f-17 mt-3 mb-2">Jeremiah Eskew</h5>
                                                    <p class="text-primary mb-0 f-14">- Developer</p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="client-box mt-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="client-img mt-4">
                                                <img src="images/users/img-3.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">

                                            <div class="mt-4">
                                                <div class="client-content">
                                                    <h5 class="f-19 fw-normal line-height_1_6">"The auropean languages
                                                        are members andf the Same
                                                        family their separate existence is ae myth For science, music,
                                                        sport,
                                                        etc, Read europe
                                                        convals feugiat egdgfet cursus tellus their languages common
                                                        sagittis
                                                        praesent peesque words."
                                                    </h5>

                                                    <div class="client-icon mt-4 pt-2">
                                                        <i class="mdi mdi-format-quote-close"></i>
                                                    </div>

                                                    <h5 class="f-17 mt-3 mb-2">Zachary Tevis</h5>
                                                    <p class="text-primary mb-0 f-15">- Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="client-box mt-4">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="client-img mt-4">
                                                <img src="images/users/img-4.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="mt-4">
                                                <div class="client-content">
                                                    <h5 class="f-19 fw-normal line-height_1_6">"The auropean languages
                                                        are members of the Same family their separate existence is a
                                                        myth For science, music, sport, etc, our
                                                        europe convals feugiat egdgfet cursus tellus their languages
                                                        common sagittis praesent peesque words."
                                                    </h5>

                                                    <div class="client-icon mt-4 pt-2">
                                                        <i class="mdi mdi-format-quote-close"></i>
                                                    </div>

                                                    <h5 class="f-17 mt-3 mb-2">William Alderman</h5>
                                                    <p class="text-primary mb-0 f-14">- Ceo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <ol class="carousel-indicators mb-0 rounded">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"><img
                                    src="images/users/img-1.jpg" alt="" class=" testi-img img-fluid mx-auto d-block">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"><img
                                    src="images/users/img-2.jpg" alt="" class=" testi-img img-fluid mx-auto d-block">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"><img
                                    src="images/users/img-3.jpg" alt="" class=" testi-img img-fluid mx-auto d-block">
                            </li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"><img
                                    src="images/users/img-4.jpg" alt="" class=" testi-img img-fluid mx-auto d-block">
                            </li>
                        </ol>
                    </div>
                </div>

            </div>

            <div class="row mt-5 pt-3">
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="client-images mt-4">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- END CLIENTS -->

    <!-- START PRICE -->
    <section class="section" id="price">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">Best Price</h5>
                        <h3 class="mt-2 fw-normal">Best Pricing Package Start
                            Business</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="price-box mt-4">
                        <h4 class="pricing-title mb-0">Freelancer</h4>
                        <h1 class="fw-normal mb-0 mt-3">$9.99<sup class="text-muted f-15"> /Month</sup></h1>
                        <p class="text-muted mt-3 pb-3">For small teams trying out softland for an unlimited period of
                            time</p>
                        <hr class="mt-3">
                        <div class="price-features mt-4 pt-3">
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">2</span> Website</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">30 GB</span> Storage</p>
                            <p class="text-muted"><i class="mdi mdi-close-circle text-danger f-17 me-2 "></i><span
                                    class="text-dark fw-normal">Unmetered</span> Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-close-circle text-danger f-17 me-2"></i><span
                                    class="text-dark fw-normal">Email</span> 1 Year trail</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Free domain</span> annual plan</p>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="" class="btn btn-outline-primary w-100">Start with Deazy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price-box mt-4">
                        <div class="pricing-badge">
                            <span class="badge">Featured</span>
                        </div>
                        <h4 class="pricing-title mb-0">Starter</h4>
                        <h1 class="fw-normal mb-0 mt-3 text-primary">$29.99<sup class="text-muted f-15"> /Month</sup>
                        </h1>
                        <p class="text-muted mt-3 pb-3">For larger businesses or those with onal administration needs
                        </p>
                        <hr class="mt-3 pricing-active-color">
                        <div class="price-features mt-4 pt-3">
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">2</span> Website</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">30 GB</span> Storage</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Unmetered</span> Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Email</span> 1 Year trail</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Free domain</span> annual plan</p>
                        </div>
                        <div class="mt-5 text-center">
                            <a href="" class="btn btn-primary w-100">Start with Deazy</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="price-box mt-4">
                        <h4 class="pricing-title mb-0">Enterprice</h4>
                        <h1 class="fw-normal mb-0 mt-3">$49.99<sup class="text-muted f-15"> /Month</sup></h1>
                        <p class="text-muted mt-3 pb-3">For extra large businesses or those in regulated industries</p>
                        <hr class="mt-3">
                        <div class="price-features mt-4 pt-3">
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">2</span> Website</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">30 GB</span> Storage</p>
                            <p class="text-muted"><i class="mdi mdi-close-circle text-danger f-17 me-2 "></i><span
                                    class="text-dark fw-normal">Unmetered</span> Bandwidth</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Email</span> 1 Year trail</p>
                            <p class="text-muted"><i class="mdi mdi-check-circle text-primary f-17 me-2"></i><span
                                    class="text-dark fw-normal">Free domain</span> annual plan</p>
                        </div>

                        <div class="mt-5 text-center">
                            <a href="" class="btn btn-outline-primary w-100">Start with Deazy</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END PRICE -->

    <!-- START SIGN IN FORM -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h3 class="fw-normal">Start Your Free Trial</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <form class="sign-form">
                                <div class="form-group">
                                    <label for="semail"><i class="mdi mdi-email-outline sign-icon"></i></label>
                                    <input type="email" class="form-control" id="semail" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="fname"><i class="mdi mdi-account sign-icon"></i></label>
                                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label for="cname"><i class="mdi mdi-hospital-building sign-icon"></i></label>
                                    <input type="text" class="form-control" id="cname" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="mnumber"><i class="mdi mdi-cellphone sign-icon"></i></label>
                                    <input type="text" class="form-control" id="mnumber" placeholder="Mobile Name">
                                </div>
                                <div>
                                    <button class="btn btn-primary w-100">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SIGN IN FORM -->

    <!-- START FAQ -->
    <section class="section" id="faq">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">More Question</h5>
                        <h3 class="mt-2 fw-normal">Frequently Asked Questions</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 pt-4 align-items-center">
                <div class="col-lg-6">
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="featutes-box active p-4 mt-4">
                                <h3 class="text-primary">370+</h3>
                                <h5 class="f-17 mt-2 text-primary fw-normal">Happy Clients</h5>
                                <p class="text-muted mt-2 mb-0">Suspendisse potenti aliquam vulputate quis felis.</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="featutes-box p-4 mt-4">
                                <h3>2M</h3>
                                <h5 class="f-17 mt-2 fw-normal">Download</h5>
                                <p class="text-muted mt-2 mb-0">Curabitur pulvinar in commodo Integer placera tellus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="featutes-box p-4 mt-4">
                                <h3>4500+</h3>
                                <h3 class="f-17 mt-2 fw-normal">Happy Users</h3>
                                <p class="text-muted mt-2 mb-0">Proin dictum ipsum vestibulum soudin sagittis est. </p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="featutes-box p-4 mt-4">
                                <h3>5+</h3>
                                <h3 class="f-17 mt-2 fw-normal">Years of expe.</h3>
                                <p class="text-muted mt-2 mb-0">Sodales maximus ex lectus venenatis lacus.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="accordion faq-box mt-4" id="accordionExample">
                        <div class="accordion-item mt-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="mb-0 f-16">How many variations exist? </h5> <i
                                        class="mdi mdi-chevron-down f-20 ms-auto"></i>

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="text-muted mb-0">You want customer to your store. Easily publish your
                                        coupans and when a user has manage to catch one of your coupens,
                                        the coupens wil be deducted from your on coupens
                                        consectetur adipisicing eli.Lorem ipsum dolor sit
                                        the amet, consectetur adipisicing eli.Lorem account at Clooger.</p>

                                    <p class="text-muted mt-2 mb-0">
                                        Aliquam rutrum felis et magna fringilla, vitae semper nunc ornare. Praesent
                                        vitae felis vitae tellus euismod viverra ac at sapien
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5 class="mb-0 f-16"> Is safe use Lorem Ipsum?</h5> <i
                                        class="mdi mdi-chevron-down f-20 ms-auto"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="text-muted mb-0">Itaque earum rerum hic tenetur sapiente delectut
                                        reiciendis voluptatibus perspiciatis unde omnis iste natus error sit maiores
                                        alias consequatur perferendisthat doloribus asperiores repellat.

                                        Nam libero tempore cum soluta nobis eligendi optio cumque nihil impedit
                                        minusidquod maxime placeat facere possimus.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5 class="mb-0 f-16">When can be used? </h5> <i
                                        class="mdi mdi-chevron-down f-20 ms-auto"></i>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="text-muted mb-0">Temporibus autem quibusdam a aut officiis debitis rerum
                                        necessitatibus veniet ut et voluptates repudiandae sint a molestiae recusandae
                                        itaque earum rerum hic tenetur a sapiente delectus ut at aut reiciendis
                                        voluptatibus maiores
                                        alias consequatur perferendis doloribus asperiores rerum necessitat
                                        saepeeveniet. </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END FAQ -->

    <!-- START GET STARTED -->
    <section class="section-lg bg-cta">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="title-box">
                        <h3 class="text-white fw-normal">Let's get started with Deazy</h3>
                        <p class="text-white-50 text-center pt-3">We craft digital, graphic and
                            dimensional thinking, to create category leading brand experiences that have meaning and add
                            a
                            value for our clients.</p>
                        <div class="title-border"></div>

                        <div class="mt-5">
                            <a href="#" class="btn btn-outline-custom btn-round">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- END GET STARTED -->

    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">Our Blogs</h5>
                        <h3 class="mt-2 fw-normal">Our latest blog posts
                            insights articles</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="blog-box mt-4 bg-white p-3">
                        <div class="blog-img">
                            <img src="images/blog/img-1.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="blog-post-detail my-3">
                            <p class="f-14 text-muted mb-1">23 march 2021 <span class="text-primary fw-normal">Calvin
                                    Hubbard</span></p>
                            <h5 class="f-17"><a href="#" class="text-dark">Doing a cross country road trip</a></h5>
                            <p class="text-muted mt-2">She packed seven versalia, put her initial into question belt
                                made on the way..</p>
                            <div class="mt-4">
                                <a href="" class="btn btn-sm btn-primary">Read More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-box mt-4 bg-white p-3">
                        <div class="blog-img">
                            <img src="images/blog/img-2.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="blog-post-detail my-3">
                            <p class="f-14 text-muted mb-1">14 march 2021 <span class="text-primary fw-normal">Zachary
                                    Tevis</span></p>
                            <h5 class="f-17"><a href="#" class="text-dark">New exhibition at our Museum</a></h5>
                            <p class="text-muted mt-2">Pityful a rethoric question ran over her cheek, then she
                                continued her way.</p>
                            <div class="mt-4">
                                <a href="" class="btn btn-sm btn-primary">Read More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-box mt-4 bg-white p-3">
                        <div class="blog-img">
                            <img src="images/blog/img-3.jpg" alt="" class="img-fluid mx-auto d-block rounded">
                        </div>
                        <div class="blog-post-detail my-3">
                            <p class="f-14 text-muted mb-1">07 April 2021 <span class="text-primary fw-normal">William
                                    Alderman</span></p>
                            <h5 class="f-17"><a href="#" class="text-dark">Why are so many people..
                                </a></h5>
                            <p class="text-muted mt-2">Far far away, behind the far word moun taiandns from the
                                countries
                                Consonantia.</p>
                            <div class="mt-4">
                                <a href="" class="btn btn-sm btn-primary">Read More <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h5 class="sub-title text-primary text-uppercase">Contact us</h5>
                        <h3 class="mt-2 fw-normal">Have a project on mind?</h3>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="contact-content mt-4">
                        <div class="mt-4 pt-1">
                            <div class="contact-icon float-start pe-4">
                                <i class="mdi mdi-phone"></i>
                            </div>

                            <div class="contact-info">
                                <h5 class="f-16 mb-0 fw-normal">Phone Number</h5>
                                <p class="text-muted mb-0 f-14">+00 620-468-6348</p>
                            </div>
                        </div>

                        <div class="mt-4 pt-1">
                            <div class="contact-icon float-start pe-4">
                                <i class="mdi mdi-email"></i>
                            </div>

                            <div class="contact-info">
                                <h5 class="f-16 mb-0 fw-normal">Email Address</h5>
                                <p class="text-muted mb-0 f-14">CarmenTSmith@teleworm.us</p>
                            </div>
                        </div>

                        <div class="mt-4 pt-1">
                            <div class="contact-icon float-start pe-4">
                                <i class="mdi mdi-map"></i>
                            </div>

                            <div class="contact-info">
                                <h5 class="f-16 mb-0 fw-normal">Office Location</h5>
                                <p class="text-muted mb-0 f-14">1074 Murphy Court Anaheim, 92801</p>
                            </div>
                        </div>

                        <div class="mt-4 pt-1">
                            <div class="contact-icon float-start pe-4">
                                <i class="mdi mdi-calendar-range"></i>
                            </div>

                            <div class="contact-info">
                                <h5 class="f-16 mb-0 fw-normal">Email Time</h5>
                                <p class="text-muted mb-0 f-14">Mon - Fri 09:00 - 7:00</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="3" class="form-control"
                                            placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 text-right">
                                    <input type="submit" id="submit" name="send"
                                        class="submitBnt btn btn-rounded btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <section class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4">
                        <h5 class="f-17 text-white fw-normal">About company</h5>
                        <p class="text-white-50 mt-3 pt-1">Morbi convallis orci elit a fermentum felis lacinia eget
                            Pellentesque non risus eu odio tincidunt hendrerit Praesent porttitor dictum diam. Nulla
                            pellentesque
                            augue metus. Maecenas vitae tellus nec ipsum convallis tincidunt quis ac dui.</p>
                    </div>
                </div>

                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="f-17 text-white fw-normal">Support</h5>
                                <ul class="list-unstyled footer-link mt-3 mb-0">
                                    <li><a href="">Pricing</a></li>
                                    <li><a href="">Facebook Integration</a></li>
                                    <li><a href="">Application</a></li>
                                    <li><a href="">Woodpress Program</a></li>
                                    <li><a href="">Business Marketing</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-17 text-white fw-normal">More Info</h5>
                                <ul class="list-unstyled footer-link mt-3 mb-0">
                                    <li><a href="">Pricing</a></li>
                                    <li><a href="">For Marketing</a></li>
                                    <li><a href="">For CEOs</a></li>
                                    <li><a href="">For Agencies</a></li>
                                    <li><a href="">Our Apps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-17 text-white fw-normal">Resources</h5>
                                <ul class="list-unstyled footer-link mt-3 mb-0">
                                    <li><a href="">Form validation</a></li>
                                    <li><a href="">Pricacy Policy</a></li>
                                    <li><a href="">Terms &amp; Conditions</a></li>
                                    <li><a href="">Design Defined</a></li>
                                    <li><a href="">Marketplace</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-12">
                    <img src="images/logo-light.png" alt="" height="24">

                    <p class="text-white-50 float-end mb-0">
                        2021 © Deazy. Design by Themesdesign
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- JAVASCRIPTS -->
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="js/app.js"></script>
</body>

</html>