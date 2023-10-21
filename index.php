<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="content-language" content="pt-pt, en-us" />

    <title><?php echo $lang['title'] ?></title>
    <meta content="Tecnicol Moçambique is a professional training centre with a proven track record and 19 years of experience, training competent professionals for the labour market and self-employment since 2004.  
We offer short and medium-term professional courses to an average of 2000 young people and adults in our delegate in the City of Maputo each year
" name="description" />
    <meta content="Vocational Training, Professional training, employment, Training centre, self-employment"
        name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link async href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link async href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link async href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link async href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container-fluid container-xxl d-flex align-items-center">
            <div id="logo" class="me-auto">

                <a href="index.html" class="scrollto"><img src="assets/img/logo-w.png" alt="" title="" /></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero"><?php echo $lang['home'] ?></a></li>
                    <li><a class="nav-link scrollto" href="#about"><?php echo $lang['about'] ?></a></li>
                    <li><a class="nav-link scrollto" href="#services"><?php echo $lang['services'] ?></a></li>
                    <li><a class="nav-link scrollto" href="#programmes"><?php echo $lang['programmes'] ?></a></li>
                    <li><a class="nav-link scrollto" href="#gallery"><?php echo $lang['gallery'] ?></a></li>
                    <li>
                        <a class="nav-link scrollto" href="#supporters"><?php echo $lang['supporters'] ?></a>
                    </li>

                    <li><a class="nav-link scrollto" href="#contact"><?php echo $lang['contact'] ?></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a class="buy-tickets" href="?lang=en"><img class="lang" src="assets/img/EN.webp" alt="">EN</a>
            <a class="buy-tickets" href="?lang=pt"><img class="lang" src="assets/img/MZ.webp" alt="">PT</a>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">

                <?php echo $lang['hero-slogan-text1'] ?> <br /><span> <?php echo $lang['hero-slogan-text2'] ?></span>
            </h1>
            <p class="mb-4 pb-0">
                <?php echo $lang['hero_title'] ?>
            </p>
            <!-- <a
					href="https://www.instagram.com/reel/CwVVVzXtBJT/?igshid=YTUzYTFiZDMwYg=="
					class="glightbox play-btn mb-4"></a> -->
            <a href="#about" class="about-btn scrollto"><?php echo $lang['about-button'] ?></a>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2><?php echo $lang['about_title'] ?></h2>

                        <p>
                            <?php echo $lang['about_paragraph1_text1'] ?>
                        </p>

                        <p><?php echo $lang['about_paragraph1_text2'] ?>.</p>

                        <p><?php echo $lang['about_paragraph1_text3'] ?>
                        </p>


                        <p><?php echo $lang['about_paragraph1_text4'] ?> </p>

                        <p><?php echo $lang['about_paragraph1_text5'] ?></p>


                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h2><?php echo $lang['mission_title'] ?></h2>
                            <p>
                                <?php echo $lang['mission_text'] ?>
                            </p>
                        </div>
                        <div>
                            <h2><?php echo $lang['vision_title'] ?></h2>
                            <p><?php echo $lang['vision_text'] ?> </p>
                        </div>

                        <div>
                            <h2><?php echo $lang['values_title'] ?></h2>
                            <p><?php echo $lang['values_text'] ?> </p>
                        </div>




                        <div class="container" data-aos="fade-up">
                            <div class="section-header">

                            </div>

                            <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in"
                                data-aos-delay="100">
                                <div class="col-lg-12 col-md-4 col-xs-6">
                                    <div class="supporter-logo">
                                        <img src="assets/img/certifications/Certifications.png" class="img-fluid"
                                            alt="" />
                                    </div>
                                </div>


                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Service Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2><?php echo $lang['services_title'] ?></h2>
                    <!-- <p>The market demands and Tecnicol offers it!</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="services" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/courses/1.jpg" alt="Short-term Vocational Programmes" loading="lazy"
                                class="img-fluid" />
                            <div class="details">
                                <h3><?php echo $lang['service1_title'] ?></h3>

                                <br> <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/courses/4.jpg" alt="Tailored Corporate and Executive Programmes"
                                loading="lazy" class="img-fluid" />
                            <div class="details">
                                <h3><?php echo $lang['service2_title'] ?></h3>

                                <br> <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/img/courses/3.jpg" alt="Youth Development Training Projects" loading="lazy"
                                class="img-fluid" />
                            <div class="details">
                                <h3><?php echo $lang['service3_title'] ?></h3>
                                <br> <br>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="services" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/courses/2.jpg" alt="Rural Empowerment Training Projects" loading="lazy"
                                class="img-fluid" />
                            <div class="details">
                                <h3><?php echo $lang['service4_title'] ?> </h3>


                                <br> <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Service Section -->

        <!-- ======= PROGRAMMES Section======= -->
        <section id="programmes" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2><?php echo $lang['programme_title'] ?> </h2>

                </div>

                <ul class="nav nav-tabs" role="tablist" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active" href="#services-1" role="tab" data-bs-toggle="tab">1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-2" role="tab" data-bs-toggle="tab">2
                            </h2></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-3" role="tab" data-bs-toggle="tab">3</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#services-4" role="tab" data-bs-toggle="tab">4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services-5" role="tab" data-bs-toggle="tab">5</a>
                    </li>

                </ul>



                <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <div role="tabpanel" class="col-lg-12 tab-pane fade show active" id="services-1">
                        <div class="container">
                            <div class="section-header">
                                <h2><?php echo $lang['programme1-title'] ?></h2>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/programs/ppmt/1.jpg" alt="ppmt" loading="lazy"
                                        class="img-fluid" />
                                </div>

                                <div class="col-md-6">
                                    <div class="details">

                                        <p>
                                            <?php echo $lang['programme1-text1'] ?>
                                        </p>

                                        <p>
                                            <?php echo $lang['programme1-text2'] ?>
                                        </p>

                                        <p><?php echo $lang['programme1-text3'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row g-0">
                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/ppmt/2.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/ppmt/2.jpg" alt="ppmt" loading="lazy"
                                                class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/ppmt/3.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/ppmt/3.jpg" alt="ppmt" loading="lazy"
                                                class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/ppmt/7.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/ppmt/7.jpg" alt="ppmt" loading="lazy"
                                                class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/ppmt/5.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/ppmt/5.jpg" alt="ppmt" loading="lazy"
                                                class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End PROGRAMMES 1 -->

                    <!-- PROGRAMMES 2 -->
                    <div role="tabpanel" class="col-lg-12 tab-pane fade" id="services-2">
                        <div class="container">
                            <div class="section-header">
                                <h2>
                                    <?php echo $lang['programme2-title'] ?>
                                </h2>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/programs/womens entrepreneurship/1.jpg"
                                        alt="womens entrepreneurship" loading="lazy" class="img-fluid" />
                                </div>

                                <div class="col-md-6">
                                    <div class="details">

                                        <p><?php echo $lang['programme2-text1'] ?>
                                        </p>

                                        <p><?php echo $lang['programme2-text2'] ?>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End PROGRAMMES 2 -->

                    <!-- PROGRAMMES 3 -->
                    <div role="tabpanel" class="col-lg-12 tab-pane fade" id="services-3">
                        <div class="container">
                            <div class="section-header">
                                <h2><?php echo $lang['programme3-title'] ?> </h2>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/programs/believe in employment/1-2.jpg"
                                        alt="believe in employment" loading="lazy" class="img-fluid" />
                                </div>

                                <div class="col-md-6">
                                    <div class="details">

                                        <p>
                                            <?php echo $lang['programme3-text1'] ?>

                                        </p>

                                        <p><?php echo $lang['programme3-text2'] ?>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid venue-gallery-container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row g-0">
                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/believe in employment/1.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/believe in employment/1.jpg"
                                                alt="believe in employment" loading="lazy" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/believe in employment/2.jpg" class="glightbox"
                                            loading="lazy" data-gall="venue-gallery">
                                            <img src="assets/img/programs/believe in employment/2.jpg"
                                                alt="believe in employment" loading="lazy" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/believe in employment/3.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/believe in employment/3.jpg"
                                                alt="believe in employment" loading="lazy" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4">
                                    <div class="venue-gallery">
                                        <a href="assets/img/programs/believe in employment/4.jpg" class="glightbox"
                                            data-gall="venue-gallery">
                                            <img src="assets/img/programs/believe in employment/4.jpg"
                                                alt="believe in employment" loading="lazy" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End PROGRAMMES 3 -->

                    <!-- PROGRAMMES 4 -->
                    <div role="tabpanel" class="col-lg-12 tab-pane fade" id="services-4">
                        <div class="container">
                            <div class="section-header">
                                <h2>
                                    <?php echo $lang['programme4-title'] ?>
                                </h2>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/programs/e4d/1.jpg" alt="e4d" loading="lazy"
                                        class="img-fluid" />
                                </div>

                                <div class="col-md-6">
                                    <div class="details">

                                        <p>
                                            <?php echo $lang['programme4-text1'] ?>

                                        </p>
                                        <p> <?php echo $lang['programme4-text2'] ?>
                                        </p>
                                        <p> <?php echo $lang['programme4-text3'] ?>
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End PROGRAMMES 4 -->


                    <!-- PROGRAMMES 5 -->
                    <div role="tabpanel" class="col-lg-12 tab-pane fade" id="services-5">
                        <div class="container">
                            <div class="section-header">
                                <h2>
                                    <?php echo $lang['programme5-title'] ?>
                                </h2>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/programs/fmt/1-2.jpg" alt="FMT" loading="lazy"
                                        class="img-fluid" />
                                </div>

                                <div class="col-md-6">
                                    <div class="details">
                                        <p><?php echo $lang['programme5-text1'] ?>
                                        </p>

                                        <p>T<?php echo $lang['programme5-text2'] ?>
                                        </p>

                                        <p><?php echo $lang['programme5-text3'] ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End PROGRAMMES 5 -->


                </div>
            </div>
        </section>
        <!-- End PROGRAMMES Section-->





        <!-- ======= Gallery Section ======= -->
        <section id="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2><?php echo $lang['gallery_title'] ?></h2>

                </div>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <a href="assets/img/programs/believe in employment/1.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/believe in employment/1.jpg" class="img-fluid"
                                alt="believe in employment" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/ppmt/3.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/ppmt/3.jpg" class="img-fluid" alt="ppmt" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/e4d/2.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/e4d/2.jpg" class="img-fluid" alt="e4d" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/fmt/5.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/fmt/5.jpg" class="img-fluid" alt="fmt" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/womens entrepreneurship/2.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/womens entrepreneurship/2.jpg" class="img-fluid"
                                alt="womens entrepreneurship" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/primary education teacher training/1-3.jpg"
                            class="gallery-lightbox"><img
                                src="assets/img/programs/primary education teacher training/1-3.jpg" class="img-fluid"
                                alt="primary education teacher training" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/ppmt/9.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/ppmt/9.jpg" class="img-fluid" alt="ppmt" loading="lazy" /></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/img/programs/believe in employment/7.jpg" class="gallery-lightbox"><img
                                src="assets/img/programs/believe in employment/7.jpg" class="img-fluid"
                                alt="believe in employment" loading="lazy" /></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- End Gallery Section -->

        <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2><?php echo $lang['partner_title'] ?></h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-7.png" class="img-fluid" alt="Sasol" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-3.png" class="img-fluid"
                                alt="TotalEnergies" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-12.png" class="img-fluid" alt="CLN" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-2.png" class="img-fluid" alt="Vulcan" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-8.png" class="img-fluid" alt="FDC" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-11.png" class="img-fluid" alt="CDN" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-10.png" class="img-fluid" alt="GIZ" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/partners/PartnersArtboard-9.png" class="img-fluid"
                                alt="SEJE- Acredita Emprega" />
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!-- End Partners Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2><?php echo $lang['contacts_title'] ?></h2>

                </div>


                <div class="form">
                    <form action="send.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="<?php echo $lang['placeholder_name'] ?>" required />
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="<?php echo $lang['placeholder_email'] ?>" required />
                            </div>
                            <div class="form-group col-md-4 mt-3 mt-md-0">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="<?php echo $lang['placeholder_phone'] ?>" required />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="<?php echo $lang['placeholder_subject'] ?>" required />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5"
                                placeholder="<?php echo $lang['placeholder_message'] ?>" required></textarea>
                        </div>
                        <!-- <div class="my-3">
								<div class="loading">Loading</div>
								<div class="error-message"></div>
								<div class="sent-message">
									Your message has been sent. Thank you!
								</div>
							</div> -->
                        <div class="text-center">
                            <button type="submit"><?php echo $lang['send_button'] ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="assets/img/logo/logo-white.png" alt="Tecnicol" />

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4><?php echo $lang['useful_links_title'] ?></h4>
                        <ul>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#"><?php echo $lang['useful_links1'] ?></a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a
                                    href="#about"><?php echo $lang['useful_links2'] ?></a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a
                                    href="#services"><?php echo $lang['useful_links3'] ?></a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#programmes"><?php echo $lang['useful_links4'] ?></a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="#supporters"><?php echo $lang['useful_links5'] ?></a>
                            </li>
                        </ul>
                    </div>



                    <div class="col-lg-6 col-md-6 footer-contact">
                        <h4><?php echo $lang['footer_contacts_title'] ?></h4>
                        <p>
                            <i class="bi bi-geo-alt"></i> Av. Eduardo Mondlane
                            N° 1248 / N° 2377 , Maputo<br />

                            <strong><i class="bi bi-phone"></i></strong> (+258) 82 305 2004<br />
                            <strong><i class="bi bi-envelope"></i></strong> comercial@tecnicol.co.mz <br />
                        </p>

                        <div class="social-links">

                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="copyright">
                &copy; <?php echo $lang['copywriting'] ?> <strong></strong>Tecnicol Moçambique 2023
            </div>
            <div class="credits">

                Designed by <a href="https://utterdigitalhub.com/">utter</a>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!--  Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>