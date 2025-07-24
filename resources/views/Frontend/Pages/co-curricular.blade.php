@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'About Pioneer Convent',
        'page' => 'about',
    ])

    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">About School</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            Established in 1995, Pioneer Convent Sr. Sec. School has been shaping young minds through
                            quality education, strong values, and holistic development, creating responsible and confident
                            individuals prepared to face future challenges with knowledge, integrity, and compassion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="{{ asset('assets/images/about/about-01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">1,800+</h3>
                                <img src="{{ asset('assets/images/icon/11.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Enrolled Students from Nursery to Class 12
                                </p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title"> 120+</h3>
                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Experienced Faculty & Staff</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">3,500+</h3>
                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Pioneer Alumni Across India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/about/history.jpg') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Our Story</h4>
                        <p>
                            Founded in 1995, Pioneer Convent Sr. Sec. School has grown into one of Delhi’s most respected
                            CBSE-affiliated institutions. Nestled in the heart of Loknayakpuram, our 2-acre lush green
                            campus provides a serene and stimulating environment where students can learn, grow, and thrive.
                            From pre-primary to Class 12, we offer all academic streams, supported by modern infrastructure
                            and a team of passionate educators.
                            <span class="d-block mb--30"></span>
                            At Pioneer, we follow a child-centric approach inspired by the globally recognized Multiple
                            Intelligence Theory. Our aim is to recognize and nurture each student’s unique potential through
                            personalized learning experiences. By integrating academic excellence with co-curricular
                            activities, life skills, and moral values, we empower our students with the knowledge,
                            confidence, and integrity needed to lead meaningful and successful lives.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->

    <!-- funfact -->
    <div class="rts-funfact rts-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">100%</h2>
                            <p>Board Exam Success Rate</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Top Ranked</h2>
                            <p>Among Child-Centric Schools</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Since 1995</h2>
                            <p>Trusted Legacy of Education</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- funfact end -->


    <!-- mission -->
    {{-- <section class="rts-mission">
        <div class="container">
            <div class="row justify-content-center rt-center">
                <div class="rts-section mb--50">
                    <h2 class="rts-section-title">Mission and Vision</h2>
                </div>
            </div>
            <!-- mission -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-timeline-section">
                        <div class="rts-timeline-content">
                            <div class="left-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title"> Academic Excellence & Values</h5>
                                    <p>We combine values and modern education to nurture confident, future-ready global
                                        citizens.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-1.jpg') }}" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Whole Child Development</h5>
                                    <p>We promote balanced growth through academics, co-curricular activities, and
                                        character-building experiences.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="separator">
                            </div>
                            <div class="right-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Holistic Growth</h5>
                                    <p> We envision nurturing minds through creativity, compassion, leadership, and
                                        student-centered learning environments.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-3.jpg') }}" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title">Future-Ready Leaders</h5>
                                    <p>We aim to inspire innovative, ethical, and green leaders for tomorrow’s world.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- mission end-->

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])
    @include($components . 'testimonial-v3', ['class' => 'rts-section-padding'])
    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
