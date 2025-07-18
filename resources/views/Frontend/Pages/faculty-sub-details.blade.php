@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg breadcrumb-height-full',
        'image' => 'breadcrumb-2.jpg')}}',
        'title' => 'Faculty',
        'page' => 'Faculty Areas'    
    ])
    <!-- content -->
     <div class="rts-faculty-details rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section mb--60">
                    <h3 class="rts-section-title">Message from Dean</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-8">
                    <div class="faculty-image text-center">
                        <img class="img-fluid mw-100 " src="{{asset('assets/images/faculty/02.jpg')}}" alt="faculty image">
                        <div class="h5 mb-2 mt-5">Barry Palatnik, Ed.D</div>
                        <span>Assistant Professor</span>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faculty-content-text ms-lg-5 mt-5 mt-lg-0">
                        <p class="h6 mb-
                        4">It’s your Time Join to explore</p>
                        <p class="mb-5">The Faculty of Arts Unipix University  warmly welcomes you to a vast, vivid and vigorous academic landscape of relentless pursuits and superb brilliance.</p>
                        <p class="h6 mb-
                        4">Learn to lead</p>
                        <p class="mb-5">In line with the lifelong motto of Unipix ‘where leaders are created’, FA is devoted to produce accomplished, as well as skilled, learners who can meet the professional requirements of today’s local and global job market. Be it an academic seminar or an in-house cricket tournament or a debate festival, students and teachers at FA work hand in hand to make it a success. This is how we make sure that each of our students remains engaged in academic and extracurricular rigors to grow to his or her fullest extent. This is how FA of Unipix creates local leaders for the global demands.</p>
                        <p class="h6 mb-
                        4">Challenge yourself to change the world</p>
                        <p>Education becomes meaningful only when it can change the world when necessary. This is what my colleagues and I are working for every single day of the week at FA. I hope that you will find whatever information you may need here and if not please feel free to let me know. I warmly welcome your comments and suggestions. Thank you very much for your kind visit.</p>
                    </div>
                </div>
                <div class="border-top my-60"></div>
                <div class="row align-items-center justify-content-md-center">
                    <div class="col-lg-6 col-md-11">
                        <div class="faculty-content-text me-5">
                            <h4 class="font-32 mb-4">Mission</h4>
                            <p>Create innovative knowledge through intellectual practice, critical engagement, and creative endeavor. It is dedicated to providing students with enriched curriculum that fosters deeper understanding and appreciation of societies, cultures, languages, literatures, and artistic trends to address the contemporary global and local challenges.</p>
                            <h4 class="font-32 mb-4 mt-5">Vision</h4>
                            <p>Create innovative knowledge through intellectual practice, critical engagement, and creative endeavor. It is dedicated to providing students with enriched curriculum that fosters deeper understanding and appreciation of societies, cultures, languages, literatures, and artistic trends to address the contemporary global and local challenges.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-11">
                        <figure class="mt-5 mt-lg-0">
                             <img class="mw-100" src="{{asset('assets/images/faculty/09.jpg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row g-5 faculty-sub-details rts-section-padding">
                <div class="rts-section mb-4 text-center">
                    <h3 class="rts-section-title">List of Departments</h3>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb">
                            <img src="{{asset('assets/images/course/09.jpg')}}" alt="course-thumbnail">
                        </div>
                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="{{ route('department-details') }}">Department of English</a>
                            </div>
                            <div class="cat-link">
                                <a href="{{ route('department-details') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb">
                            <img src="{{asset('assets/images/course/10.jpg')}}" alt="course-thumbnail">
                        </div>
                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="{{ route('department-details') }}">Department of Music</a>
                            </div>
                            <div class="cat-link">
                                <a href="{{ route('department-details') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb">
                            <img src="{{asset('assets/images/course/11.jpg')}}" alt="course-thumbnail">
                        </div>
                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="{{ route('department-details') }}">Department of History</a>
                            </div>
                            <div class="cat-link">
                                <a href="{{ route('department-details') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-cat-item">
                        <div class="cat-thumb">
                            <img src="{{asset('assets/images/course/12.jpg')}}" alt="course-thumbnail">
                        </div>
                        <div class="cat-meta">
                            <div class="cat-title">
                                <a href="{{ route('department-details') }}">Department of Philosophy</a>
                            </div>
                            <div class="cat-link">
                                <a href="{{ route('department-details') }}" class="cat-link-arrow"><i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center g-0">
                <div class="rts-section mb--60 text-center">
                    <h3 class="rts-section-title">Academics & Program</h3>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="program__single--item">
                        <div class="program__single--item--bg">
                            <img src="{{asset('assets/images/program/program__bg.jpg')}}" alt="">
                        </div>
                        <h5 class="program__single--item--title">undergraduate</h5>

                        <ul class="program__single--item--list">
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Anthropology
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Applied Mathematics
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Biomedical Engineering
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Astrophysics
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="program__single--item v__2">
                        <div class="program__single--item--bg">
                            <img src="{{asset('assets/images/program/program__bg.jpg')}}" alt="">
                        </div>
                        <h5 class="program__single--item--title">graduate</h5>

                        <ul class="program__single--item--list">
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Applied Computation
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Applied Mathematics
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Applied Computation
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Architecture
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="program__single--item">
                        <div class="program__single--item--bg">
                            <img src="{{asset('assets/images/program/program__bg.jpg')}}" alt="">
                        </div>
                        <h5 class="program__single--item--title">Lifelong Learning</h5>

                        <ul class="program__single--item--list">
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Personal Development
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Arts and Humanities
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Health and Wellness
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="program__single--item--list--item">
                                <a href="{{ route('program-single') }}" class="link__list">Social Sciences
                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row pt--120">
                <div class="rts__section--wrapper">
                    <div class="rts__section--wrapper--left">
                        <h2 class="rts__section--title text-capitalize">Upcoming event</h2>
                    </div>
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
                    <div class="rts__single--event v__3">
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
                    <div class="rts__single--event v__3">
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
                                    Sustainability Showcase: Green
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
                    <div class="rts__single--event v__3">
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
     </div>
    <!-- content end -->
    <!-- gallery -->
    <div class="rts-gallery section-bg rts-section-padding">
    <div class="container">
        <div class="row">
            <div class="rts-section mb--50 rt-center">
                <h2 class="rts-section-title">University Sport Gallery</h2>
            </div>
        </div>
        <div class="gallery-area">
            <div class="row g-5">
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x1.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/01.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x2.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/02.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x3.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/03.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x4.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/04.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x5.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/05.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- single gallery item -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery">
                        <a href="{{asset('assets/images/campus/gallery/2x6.jpg')}}" class="single-gallery__item">
                            <img src="{{asset('assets/images/campus/gallery/06.jpg')}}" alt="gallery">
                            <div class="single-gallery__icon">
                                <i class="fa-light fa-circle-plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- gallery end -->
         <!-- blog -->
    <div class="rts-blog v_1 rts__light rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-12">
                    <div class="rts-section rts-border-bottom-1 mb--50 pb--20">
                        <h2 class="rts-section-title text-uppercase">
                            Latest Blogs
                        </h2>
                        <p class="rts-section-description">Whether you’re considering a foundation course or an undergraduate academics is a place.</p>
                        <a href="{{ route('blog') }}" class="rts-nbg-btn btn-arrow">View All<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                    </span></a>
                    </div>
                </div>
            </div>
            <!-- blog content -->
            <div class="row g-5 justify-content-md-center">
                <div class="col-md-11 col-lg-6">
                    <div class="rts-blog-post blog-v-full">
                        <div class="single-blog-post">
                            <a href="{{ route('blog-details') }}" class="blog-thumb">
                                <img src="{{asset('assets/images/blog/big-thumb-1.jpg')}}" alt="blog-thumb">
                            </a>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Masum Sakib</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Classroom community-building It’s ok to try something new!
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6">
                    <div class="rts-blog-post">
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-1.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Samira Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Those inequalities are inequalities that occur within households
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-2.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Zent Ekizie</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    Those inequalities are inequalities that occur within households
                                </a>
                            </div>
                        </div>
                        <!-- single blog -->
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/small-thumb-3.jpg')}}" alt="post-thumbnail">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="post-meta">
                                    <div class="rt-author">
                                        <span>
                                        <i class="fa-light fa-user"></i>
                                    </span>
                                        <a href="#">Zayed Khan</a>
                                    </div>
                                    <div class="rt-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                </div>
                                <a href="{{ route('blog-details') }}" class="post-title">
                                    After decades of improvement, cardiovascular health rates
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->
     
     @include($footer . 'footer-v3', ['class' => 'v__1'])
@endsection