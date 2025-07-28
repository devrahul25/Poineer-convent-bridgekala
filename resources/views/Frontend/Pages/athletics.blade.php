@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb-v2', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Fitness Athletics',
        'page' => 'Sports',
        'parent' => 'Activities',
    ])

    <!-- single athletics content -->
    <div class="rts-athletics rts-section-padding">
        <div class="container">
            <div class="rts-athletics__content">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="left-content">
                            <div class="athletics-image">
                                <img src="{{ asset('assets/images/sports/1.jpg') }}" alt="campus-single">
                            </div>
                            <p class="athletics-description mt--35">
                                Our comprehensive sports program is designed to instill values such as patience,
                                perseverance, discipline, and teamwork. A dedicated time slot is reserved in the academic
                                schedule for sports, and additional practice sessions are organized before and after school
                                hours to ensure every student has the opportunity to thrive.

                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-content">
                            <div class="right-content__section">
                                <h2 class="rts-section-title mb--15">Why Our Sports Program Matters
                                </h2>
                                <p class="description">
                                    At Pioneer, we believe that sports and games are not just extracurricular
                                    activities—they are essential components of a well-rounded education. They play a
                                    crucial role in nurturing both mental agility and physical fitness, while also helping
                                    students discover and harness their innate talents.
                                </p>
                                <div class="athletics-image mt--45">
                                    <img src="{{ asset('assets/images/sports/2.jpg') }}" alt="campus-single">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single athletics content end -->
    <div class="rts-gallery section-bg rts-section-padding mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="rts-section mb--40 rt-center">
                    <h2 class="rts-section-title">Activities / Sports Offered</h2>
                </div>
            </div>
            <div class="gallery-area">
                <div class="row g-5">
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x1.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/01.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Cricket</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x2.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/02.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Badminton
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x3.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/03.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Basketball
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x4.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/04.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                     <p class="text-white">Football

                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x5.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/05.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Volleyball
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x6.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/06.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                     <p class="text-white">Chess
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- basketball --}}
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
                        <h4 class="rts-section-title mb--40">Basketball: Our Prime Sport
                        </h4>
                        <p>
                            Basketball holds a special place at Pioneer, where it has been adopted as the flagship sport.
                            The school has emerged as a nurturing hub for young basketball talent, fostering both skill and
                            sportsmanship in an encouraging environment.

                            <span class="d-block mb--30"></span>
                            Our students proudly represent the school at Inter-Class, Inter-House, Zonal, District, State,
                            National, and International levels—consistently earning accolades and bringing honor to the
                            institution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- basketball --}}


    <!-- athletics gallery -->
    <div class="rts-gallery section-bg rts-section-padding mt-5">
        <div class="container">
            <div class="row">
                <div class="rts-section mb--40 rt-center">
                    <h2 class="rts-section-title">Annual Sports Day</h2>
                </div>
            </div>
            <div class="gallery-area">
                <div class="row g-5">
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x1.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/01.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Yoga
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x2.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/02.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">zumba
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x3.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/03.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                    <p class="text-white">Races
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x4.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/04.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">March-past
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x5.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/05.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">P.T. Drills
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single gallery item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x6.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/06.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">Chess
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x6.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/06.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">Dumbles

                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery">
                            <a href="{{ asset('assets/images/campus/gallery/2x6.jpg') }}" class="single-gallery__item">
                                <img src="{{ asset('assets/images/campus/gallery/06.jpg') }}" alt="gallery">
                                <div class="single-gallery__icon">
                                   <p class="text-white">Track and Field Events
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- athletics gallery end -->

    <!-- section three -->
    <div class="rts-campus-section rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">Athletics, Recreation, &amp; Wellness</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{ asset('assets/images/campus/07.jpg') }}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Recreation and Wellness</a></h5>
                                <p class="item-description">Students, faculty, recreational facilities and wellness
                                    programs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{ asset('assets/images/campus/08.jpg') }}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">Cardinal Athletics</a></h5>
                                <p class="item-description">Stanford students compete in 36 varsity sports and 43 club
                                    sports.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
                <!-- single item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-item">
                        <div class="single-item__content">
                            <div class="single-item__image">
                                <img src="{{ asset('assets/images/campus/09.jpg') }}" alt="item-image">
                            </div>
                            <div class="single-item__meta">
                                <h5 class="item-title"><a href="#">BeWell</a></h5>
                                <p class="item-description">Offers incentives, programs, and activities that promote health
                                    and wellness.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </div>

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
