@extends($layout)
@section('page_title', 'Lms and University Laravel 12 Template')
@php $body_class = 'page'; @endphp
@section('content')

    @include($header . 'header-three')
    <!-- header banner -->
    <div class="banner v__1">
        <div class="container">
            <div class="col-sm-12">
                <div class="banner__wrapper">
                    <div class="banner__wrapper--left">
                        <img src="{{asset('assets/images/banner/image__1.jpg')}}" alt="">
                    </div>
                    <div class="banner__wrapper--middle">
                        <div class="banner__content">
                            <h6 class="banner__content--sub">
                               <img src="{{asset('assets/images/icon/e-cap.svg')}}" alt="cap"> knowledge meets innovation
                            </h6>
                            <h1 class="banner__content--title">
                                University
                                <span> Of Unipix</span>
                            </h1>
                            <div class="banner__content--circle rts__circle v__2">
                                <svg class="spinner" viewBox="0 0 100 100">
             <defs>
                                        <path id="circle" d="M50,50 m-37,0a37,37 0 1,1 74,0a37,37 0 1,1 -74,0"></path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#circle">Unipix University * Estd. 1971 * Explore Future *</textPath>
                                    </text>
                                </svg>
                                <div class="rts__circle--icon save-from-hidden">
                                    <a href="https://www.youtube.com/watch?v=7ahgosTZJHg" class="video-play  rts-video-btn popup-video">
                                        <i class="fa-sharp fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="banner__content--description">
                                <p>Remember to tailor the section names to fit the specific needs and
                                    structure of your university website.
                                </p>
                                <a href="{{ route('program-single') }}" class="rts-theme-btn btn-arrow">View Our Program 
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__wrapper--right">
                        <img src="{{asset('assets/images/banner/image__2.jpg')}}" alt="banner right">
                    </div>
                </div>
                <!-- banner animated shape -->
                <div class="banner__wrapper--shape">
                    <img src="{{asset('assets/images/banner/banner-svg.svg')}}" alt="banner">
                </div>
            </div>
        </div>
        <div class="grid-line">
            <div class="grid-lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <!-- header banner end -->
    @include($components . 'about__h1')
    <!-- program -->
    <section class="rts__section rts__light rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">Our Programs</h2>
                    <div class="rts__section--link">
                        <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">more program<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{asset('assets/images/program/program__1.jpg')}});">
                        <h5 class="rts__program--item--title">Graduation Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at  Unipix University.</p>
                        <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{asset('assets/images/program/program__2.jpg')}});">
                        <h5 class="rts__program--item--title">Summer Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at  Unipix University.</p>
                        <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{asset('assets/images/program/program__3.jpg')}});">
                        <h5 class="rts__program--item--title">Undergraduate</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at  Unipix University.</p>
                        <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="rts__program--item" style="background-image: url({{asset('assets/images/program/program__4.jpg')}});">
                        <h5 class="rts__program--item--title">Online Program</h5>
                        <p class="rts__program--item--description">Embark on a journey of knowledge discovery, and growth at  Unipix University.</p>
                        <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- program end -->
    <!-- campus life -->
    <section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="rts__section--wrapper v__2">
                        <h2 class="rts__section--title">Campus Life</h2>
                        <p class="rts__section--description">Embark on a journey of knowledge, discovery, and growth at  Unipix University. Our admissions process is designed identify bright, motivated individuals who are eager contribute to our dynamic academic community.</p>
                        <div class="campus__vector">
                            <img src="{{asset('assets/images/campus/campus__vector.svg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="campus__life">
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{asset('assets/images/campus/campus__life__bg__1.jpg')}}" alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="{{ route('campus-life') }}">Student Life</a></h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="{{ route('campus-life') }}"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{asset('assets/images/campus/campus__life__bg__2.jpg')}}" alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="{{ route('campus-life') }}">Arts & Culture</a></h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="{{ route('campus-life') }}"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                        <!-- single campus -->
                        <div class="campus__life--single">
                            <div class="campus__life--single--bg">
                                <img src="{{asset('assets/images/campus/campus__life__bg__3.jpg')}}" alt="">
                            </div>
                            <div class="campus__life--single--flex">
                                <div class="campus__life--single--content">
                                    <h4 class="campus__life--single--title"><a href="{{ route('athletics') }}">Athletics</a></h4>
                                    <p class="campus__life--single--description">Building a vibrant community of creative and accomplished people from around.</p>
                                </div>
                                <div class="campus__life--single--button">
                                    <a href="{{ route('athletics') }}"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- single campus end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- campus life end -->
    <!-- team -->
    <section class="rts__section rts__light rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">University Professors</h2>
                    <div class="rts__section--link">
                        <a href="{{ route('faculty') }}" class="rts-nbg-btn btn-arrow">Find More Professor<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- team member area -->
            <div class="row g-5">
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="{{ route('faculty-details') }}">
                                <img src="{{asset('assets/images/speaker/teacher__1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="{{ route('faculty-details') }}">C. Hannah Ueno</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Assistant Professor
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="{{ route('faculty-details') }}">
                                <img src="{{asset('assets/images/speaker/teacher__2.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="{{ route('faculty-details') }}">Thomas Fred</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Associate Professor of History
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="{{ route('faculty-details') }}">
                                <img src="{{asset('assets/images/speaker/teacher__3.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="{{ route('faculty-details') }}">Jennifer Aarons</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Professor of Art
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
                <!-- single team -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="rts__single--member">
                        <div class="rts__single--member--thumb">
                            <a href="{{ route('faculty-details') }}">
                                <img src="{{asset('assets/images/speaker/teacher__4.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__single--member--meta">
                            <h5 class="rts__single--member--meta--title">
                                <a href="{{ route('faculty-details') }}">Michael McGarvey</a>
                            </h5>
                            <span class="rts__single--member--meta--designation">
                                Professor of Literature
                            </span>
                        </div>
                    </div>
                </div>
                <!-- single team end -->
            </div>
            <!-- team member area end -->
        </div>
    </section>
    <!-- team end -->
    <!-- research -->
    <section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper v__3">
                    <h2 class="rts__section--title">PUBLICATION & <br>
                        RESEARCH </h2>
                    <div class="rts__section--details">
                        <p class="rts__description">
                            Dive into the vast array of courses offered at our university, spanning across 10+ specializations. Embrace an educational journey that ignites intellectual curiosity and nurtures intuitive learning among our students.
                        </p>
                        <a href="{{ route('research') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- research content -->
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="{{ route('research') }}">
                                <img src="{{asset('assets/images/research/01.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="{{ route('research') }}">Are Social Net Work Beneficial for our Society?</a>
                            <p class="rts__research--single--meta--excerpt">
                                The American Journal of Applied Scientific Research (AJASR): A Rigorous Peer-Reviewed Platform.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="{{ route('research') }}">
                                <img src="{{asset('assets/images/research/02.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="{{ route('research') }}">Unveiling the Frontiers Discovery and Innovation</a>
                            <p class="rts__research--single--meta--excerpt">
                                The American Journal of Applied Scientific Research (AJASR): A Rigorous Peer-Reviewed Platform.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__research--single">
                        <div class="rts__research--single--thumb">
                            <a href="{{ route('research') }}">
                                <img src="{{asset('assets/images/research/03.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="rts__research--single--meta">
                            <a class="rts__research--single--meta--title" href="{{ route('research') }}">Exploring Environmental Frontiers Unveiling Insights Labs Research</a>
                            <p class="rts__research--single--meta--excerpt">
                                Our commitment extends beyond the confines of the laboratory walls; we aim to bridge the gap
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </section>
    <!-- research end -->
    <!-- student feedback -->
    <section class="rts__section rts-section-padding rts__primary__bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="rts__section--wrapper v__4">
                        <h2 class="rts__section--title">Student Feedback</h2>
                        <p class="rts__section--description">Your opinion matters, and by providing feedback, you contribute to the continuous enhancement of our academic programs, support services, and campus life</p>
                        <div class="rts__slider--arrow">
                            <div class="rts__prev slider__btn"><i class="fa-light fa-arrow-left"></i></div>
                            <div class="rts__next slider__btn"><i class="fa-light fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <!-- student feedback testimonial -->
                <div class="col-lg-7">
                    <div class="rts__testimonial--active swiper swiper-data" data-swiper='{
                        "slidesPerView":2,
                        "loop": true,
                        "speed": 1000,
                        "navigation":{
                            "nextEl":".rts__next",
                            "prevEl":".rts__prev"
                        },
                        "autoplay":{
                            "delay":"7000"
                        },
                        "breakpoints":{
                            "320":{
                                "slidesPerView": 1
                            },
                            "575":{
                                "slidesPerView": 1.5
                            },
                            "768":{
                                "slidesPerView": 2
                            },
                            "991":{
                                "slidesPerView": 2
                            },
                            "1201":{
                                "slidesPerView": 2
                            }
                        }
                    }'>
                        <div class="swiper-wrapper">
                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="rts__single--testimonial">
                                    <div class="rts__rating--star">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-light fa-star"></i>
                                    </div>
                                    <p class="rts__single--testimonial--text">
                                        I can't recommend The Gourmet Haven enough. It's a place for special date in nights, or whenever you're in the mood for a culinary.
                                    </p>
                                    <div class="rts__single--testimonial--author">
                                        <div class="rts__single--testimonial--author--meta">
                                            <div class="rts__author--img">
                                                <img src="{{asset('assets/images/testimonial/author-1.png')}}" alt="author">
                                            </div>
                                            <div class="rts__author--info">
                                                <h5 class="mb-0">Emma Elizabeth</h5>
                                                <span class="designation">Assistant Teacher</span>
                                            </div>
                                        </div>
                                        <div class="rts__single--testimonial--quote">
                                            <img src="{{asset('assets/images/testimonial/quote.svg')}}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="rts__single--testimonial">
                                    <div class="rts__rating--star">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-light fa-star"></i>
                                    </div>
                                    <p class="rts__single--testimonial--text">
                                        I can't recommend The Gourmet Haven enough. It's a place for special date in nights, or whenever you're in the mood for a culinary.
                                    </p>
                                    <div class="rts__single--testimonial--author">
                                        <div class="rts__single--testimonial--author--meta">
                                            <div class="rts__author--img">
                                                <img src="{{asset('assets/images/testimonial/author-1.png')}}" alt="author">
                                            </div>
                                            <div class="rts__author--info">
                                                <h5 class="mb-0">Emma Elizabeth</h5>
                                                <span class="designation">Assistant Teacher</span>
                                            </div>
                                        </div>
                                        <div class="rts__single--testimonial--quote">
                                            <img src="{{asset('assets/images/testimonial/quote.svg')}}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                            <!-- single slide -->
                            <div class="swiper-slide">
                                <div class="rts__single--testimonial">
                                    <div class="rts__rating--star">
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-solid fa-star"></i>
                                        <i class="fa-sharp fa-light fa-star"></i>
                                    </div>
                                    <p class="rts__single--testimonial--text">
                                        I can't recommend The Gourmet Haven enough. It's a place for special date in nights, or whenever you're in the mood for a culinary.
                                    </p>
                                    <div class="rts__single--testimonial--author">
                                        <div class="rts__single--testimonial--author--meta">
                                            <div class="rts__author--img">
                                                <img src="{{asset('assets/images/testimonial/author-1.png')}}" alt="author">
                                            </div>
                                            <div class="rts__author--info">
                                                <h5 class="mb-0">Emma Elizabeth</h5>
                                                <span class="designation">Assistant Teacher</span>
                                            </div>
                                        </div>
                                        <div class="rts__single--testimonial--quote">
                                            <img src="{{asset('assets/images/testimonial/quote.svg')}}" alt="quote">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- student feedback end -->
    <!-- UPCOMING EVENT -->
    <section class="rts__section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper">
                    <h2 class="rts__section--title">Upcoming event</h2>
                    <div class="rts__section--link">
                        <a href="{{ route('event') }}" class="rts-nbg-btn btn-arrow">View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                        </span></a>
                    </div>
                </div>
            </div>
            <!-- event content -->
            <div class="row g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{asset('assets/images/event/01.jpg')}}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('event-details') }}">
                                Edu Fest 2023: Igniting Minds Off on
                                Transforming Lives </a>
                            </h5>
                            <a href="{{ route('event-details') }}" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{asset('assets/images/event/02.jpg')}}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('event-details') }}">
                                    Sustainability & Development Showcase: Green
                                    Living at Unipix </a>
                            </h5>
                            <a href="{{ route('event-details') }}" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{asset('assets/images/event/03.jpg')}}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{asset('assets/images/icon/calendar.svg')}}" alt="">
                                    <span>Nov 11, 2023</span>
                                </span>
                                <span class="location">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                    <span>Yarra Park, UK</span>
                                </span>
                            </div>
                            <h5 class="rts__single--event--meta--title">
                                <a href="{{ route('event-details') }}">
                                    Career Carnival: Explore Your
                                    Professional Journey </a>
                            </h5>
                            <a href="{{ route('event-details') }}" class="rts__round--btn">
                                <i class="fa-light fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single event item -->
            </div>
        </div>
    </section>
    <!-- UPCOMING EVENT END -->

    @include($components . 'blog-v1', ['class' => 'v_1 rts__light rts-section-padding'])
    <!-- footer -->
     @include($footer . 'footer-v3', ['class' => 'v__1'])
@endsection
