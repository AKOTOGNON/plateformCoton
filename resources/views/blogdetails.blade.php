<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pixydrops.com/agrionhtml/main-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 14:47:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Blog Details || Agrion || Agrion HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('fichier/assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('fichier/assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('fichier/assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('fichier/assets/images/favicons/site.webmanifest') }}" />
    <meta name="description" content="Agrion HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{  asset('fichier/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/agrion-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/vendors/timepicker/timePicker.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('fichier/assets/css/agrion.css') }}" />
    <link rel="stylesheet" href="{{ asset('fichier/assets/css/agrion-responsive.css') }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="/"><img src="{{ asset('fichier/assets/images/resources/logo3.png') }}" alt=""></a>
                    </div>
                    <div class="main-header__menu-box">
                        <div class="main-header__menu-box-top">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-control"style=" margin-left:200px;">
                                   <a href="" >inscription</a>
                                    </div>
                                </li>
                                 <li>
                                    <div class="form-control" style=" margin-left:10px;">
                                        <a href="" >connexion</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="dropdown megamenu">
                                                        <a href="/">Acceuil</a>
                                                    </li>




                                                    <li class="dropdown current">
                                                        <a href="#">Blog</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="{{ route('blogsecretaire') }}">Blog Secretaire</a></li>
                                                            <li><a href="{{ route('blogministere') }}">Blog Ministere</a></li>
                                                            <li><a href="{{ route('blogindustriel') }}">Blog Industriel</a></li>
                                                            <li><a href="{{ route('blogdetails') }}">Blog Details</a></li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('contact') }}">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">
                                                <div class="main-menu__search-box">
                                                    <a href="#"
                                                        class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>
                                                <div class="main-menu__cart-box">
                                                    <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                                </div>
                                                <div class="main-menu__btn-box">
                                                    <a href="{{ route('contact') }}" class="thm-btn main-menu__btn">Get Free Quote
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="main-header__phone-contact-box">
                        <div class="main-header__phone-number">
                            <a href="tel:9200886823">+92 (0088) 6823</a>
                        </div>
                        <div class="main-header__call-box">
                            <div class="main-header__call-inner">
                                <div class="main-header__call-icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url({{ asset('fichier/assets/images/backgrounds/page-header-bg.jpg') }})">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><span>/</span></li>
                        <li>Blog</li>
                    </ul>
                    <h2>Blog Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ asset('fichier/assets/images/blog/blog-details-img-1.jpg') }}" alt="">
                                <div class="blog-details__date">
                                    <p>28</p>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="blog-details.html"><i class="fas fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li><a href="{{ route('blogdetails') }}"><i class="fas fa-comments"></i> 02
                                            Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">Why Agriculture & Eco is for the Envoirment</h3>
                                <p class="blog-details__text-1">There are many variations of passages of Lorem Ipsum
                                    available, but majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum. There are many variations of passages of Lorem Ipsum
                                    available, but majority have suffered alteration in some form, by injected humour,
                                    or randomised words which don't look even slightly believable. If you are going to
                                    use a passage of Lorem Ipsum. Suspendisse ultricies vestibulum vehicula. Proin
                                    laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis.
                                    Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque
                                    nulla non facilisis. Fusce vel orci sed quam gravida condimentum. Aliquam
                                    condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit
                                    non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit
                                    nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus dolor.
                                    Nulla a erat et orci mattis auctor.</p>
                                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit
                                    amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus
                                    nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus
                                    interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet
                                    pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                            </div>
                            <div class="blog-details__bottom">
                                <p class="blog-details__tags">
                                    <span>Tags</span>
                                    <a href="{{ route('blogdetails') }}">Agriculture</a>
                                    <a href="{{ route('blogdetails') }}">Farm</a>
                                </p>
                                <div class="blog-details__social-list">
                                    <a href="{{ route('blogdetails') }}"><i class="fab fa-twitter"></i></a>
                                    <a href="{{ route('blogdetails') }}"><i class="fab fa-facebook"></i></a>
                                    <a href="{{ route('blogdetails') }}"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="{{ route('blogdetails') }}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="blog-details__pagenation-box">
                                <ul class="list-unstyled blog-details__pagenation">
                                    <li>Wheat Harvest Organic Gather nice Moment</li>
                                    <li>Survived not only five centuries</li>
                                </ul>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('fichier/assets/images/blog/comment-1-1.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin</h3>
                                        <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                            Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                            sollicitudin at euismod.</p>
                                        <a href="blog-details.html" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="{{ asset('fichier/assets/images/blog/comment-1-2.jpg') }}" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert</h3>
                                        <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                                            Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                                            sollicitudin at euismod.</p>
                                        <a href="{{ route('blogdetails') }}" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <h3 class="comment-form__title">Leave a Comment</h3>
                                    <form action="https://pixydrops.com/agrionhtml/main-html/assets/inc/sendemail.php"
                                        class="comment-one__form contact-form-validated" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="text" placeholder="Your Name" name="name">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment-form__input-box">
                                                    <input type="email" placeholder="Email Address" name="email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="comment-form__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write a Comment"></textarea>
                                                </div>
                                                <div class="comment-form__btn-box">
                                                    <a href="#" class="thm-btn">Submit Comment <i
                                                            class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('fichier/assets/images/blog/lp-1-1.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span>
                                                <a href="{{ route('blogdetails') }}">Agriculture Miracle
                                                    you Dont know About</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('fichier/assets/images/blog/lp-1-2.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span>
                                                <a href="{{ route('blogdetails') }}">There are many variations of</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="{{ asset('fichier/assets/images/blog/lp-1-3.jpg') }}" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="fas fa-user-circle"></i>Admin</span>
                                                <a href="{{ route('blogdetails') }}">Bring to the table win-win survival</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="{{ route('blogdetails') }}">Agriculture<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                    <li class="active"><a href="blog-details.html">Dairy Farm<span
                                                class="icon-right-arrow"></span></a></li>
                                    <li><a href="{{ route('blogdetails') }}">Economy Solution<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="{{ route('blogdetails') }}">Harvests Innovations<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="{{ route('blogdetails') }}">Organic Food<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="{{ route('blogdetails') }}">Fresh Vegetables<span
                                                class="icon-right-arrow"></span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#">Agriculture</a>
                                    <a href="#">Farm</a>
                                    <a href="#">Eco</a>
                                    <a href="#">Milk</a>
                                    <a href="#">Dairy</a>
                                    <a href="#">Organic</a>
                                </div>
                            </div>
                            <div class="sidebar__single sidebar__comments">
                                <h3 class="sidebar__title">Recent Comments</h3>
                                <ul class="sidebar__comments-list list-unstyled">
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A wordpress commenter on <br> launch new mobile app</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p> <span>John Doe</span> on template:</p>
                                            <h5>comments</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p>A wordpress commenter on <br> launch new mobile app</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__comments-icon">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="sidebar__comments-text-box">
                                            <p> <span>John Doe</span> on template:</p>
                                            <h5>comments</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer-shape-1 float-bob-x"
                            style="background-image: url({{ asset('fichier/assets/images/shapes/site-footer-shape-1.png') }});"></div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <a href="index.html"><img src="{{ asset('fichier/assets/images/resources/footer-logo.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Welcome to our Agriculture Farming. Lorem
                                            simply text amet cing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__news">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">News</h3>
                                    </div>
                                    <ul class="footer-widget__news-list list-unstyled">
                                        <li>
                                            <div class="footer-widget__news-img">
                                                <img src="assets/images/resources/footer-widget-news-img-1.jpg" alt="">
                                            </div>
                                            <div class="footer-widget__news-content">
                                                <p class="footer-widget__news-date">20 Jul, 2022</p>
                                                <h5 class="footer-widget__news-sub-title"><a href="blog-details.html">A
                                                        Organic Food
                                                        Gives
                                                        More Good Taste</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget__news-img">
                                                <img src="{{ asset('fichier/assets/images/resources/footer-widget-news-img-2.jpg') }}" alt="">
                                            </div>
                                            <div class="footer-widget__news-content">
                                                <p class="footer-widget__news-date">20 Jul, 2022</p>
                                                <h5 class="footer-widget__news-sub-title"><a href="{{ route('blogdetails') }}">A
                                                        Organic Food
                                                        Gives
                                                        More Good Taste</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__Contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact</h3>
                                    </div>
                                    <ul class="footer-widget__Contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-phone-square-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:9200886823">+92 (0088) 6823</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>80 Broklyn Golden Street. USA</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="footer-widget__Contact-form">
                                        <div class="footer-widget__Contact-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="footer-widget__Contact-btn"><i
                                                    class="icon-right-arrow"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2022 by <a href="#">Agrion.com</a></p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="site-footer__bottom-scroll">
                                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                                            class="icon-up-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="/" aria-label="logo image"><img src="{{ asset('fichier/assets/images/resources/logo-2.png') }}" width="122"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <script src="{{ asset('fichier/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('fichier/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>




    <!-- template js -->
    <script src="{{ asset('fichier/assets/js/agrion.js') }}"></script>
</body>


<!-- Mirrored from pixydrops.com/agrionhtml/main-html/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2024 14:47:43 GMT -->
</html>
