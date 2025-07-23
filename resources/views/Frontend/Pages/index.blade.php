@extends($layout)
@section('content')
    @include($header . 'header-three')
    <div class="banner v__3">
        <div class="banner__wrapper">
            <div class="swiper swiper-data"
                data-swiper='{
                    "slidesPerView":1,
                    "effect": "fade",
                    "loop": false,
                    "speed": 1000,
                    "autoplay":{
                        "delay":"7000"
                    }}'>

                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg"
                            style="background-image: url({{ asset('assets/images/banner/slider__3.jpg') }});">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-10 col-sm-10">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <div class="banner__slides--content--icon">
                                                    <img src="{{ asset('assets/images/banner/banner__3--icon.png') }}"
                                                        alt="cap">
                                                </div>
                                                <h2 class="banner__slides--content--title">
                                                    Pioneer Convent Sr. Sec. School
                                                </h2>
                                                <p class="banner__slides--content--description">
                                                    Where Excellence Meets Values
                                                </p>
                                                <div class="banner__slides--content--btn">
                                                    <a href="{{ route('program-single') }}"
                                                        class="rts-theme-btn btn-arrow">Explore Campus
                                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slide -->

                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg"
                            style="background-image: url({{ asset('assets/images/banner/slider__3-2.jpg') }});">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6 col-md-10 col-sm-10">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <div class="banner__slides--content--icon">
                                                    <img src="{{ asset('assets/images/banner/banner__3--icon.png') }}"
                                                        alt="cap">
                                                </div>
                                                <h2 class="banner__slides--content--title">
                                                    Shaping Minds, Building Futures
                                                </h2>
                                                <p class="banner__slides--content--description">
                                                    Empowering students with knowledge, discipline, and a deep sense of
                                                    purpose.
                                                </p>
                                                <div class="banner__slides--content--btn">
                                                    <a href="{{ route('program-single') }}"
                                                        class="rts-theme-btn btn-arrow">View Our Program
                                                        <span><i class="fa-regular fa-arrow-right"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- single slides -->
                </div>
            </div>
        </div>
    </div>
    <!-- header banner end -->
    <!-- our program -->
    <section class="program rts-section-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5">
                    <div class="rts__section--wrapper v__2">
                        <h2 class="rts__section--title text-capitalize">Why Choose Pioneer</h2>
                        <p class="rts__section--description">Step into a world of knowledge, innovation, and values-driven
                            education. At Pioneer Convent Sr. Sec. School, we go beyond traditional learning to nurture
                            curious minds, confident leaders, and compassionate citizens. With our Multiple
                            Intelligence-Based Curriculum, a CBSE-affiliated program up to Class 12, and a strong emphasis
                            on sports, arts, and co-curricular excellence, we ensure every child thrives academically,
                            socially, and emotionally.

                        </p>
                        <div class="campus__vector">
                            <img src="{{ asset('assets/images/campus/campus__vector.svg') }}" alt="">
                        </div>
                        <a href="{{ route('academic') }}" class="rts-theme-btn btn-arrow">View All Program
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-10 mt-5 mt-md-0">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-6">
                            <div class="program__content">
                                <div class="rts__program--item v__2"
                                    style="background-image: url({{ asset('assets/images/program/program__1.jpg') }});">
                                    <h5 class="rts__program--item--title">2-Acre Green Campus</h5>
                                    <p class="rts__program--item--description">A serene and eco-friendly environment for
                                        holistic learning.</p>
                                    <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn More<span><i
                                                class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </span></a>
                                    <h5 class="rts__program--item--title--show">2-Acre Green Campus</h5>
                                </div>
                                <!-- second one -->
                                <div class="rts__program--item v__2"
                                    style="background-image: url({{ asset('assets/images/program/program__2.jpg') }});">
                                    <h5 class="rts__program--item--title">CBSE Affiliated till Class 12</h5>
                                    <p class="rts__program--item--description">All streams available with excellent academic
                                        performance.</p>
                                    <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn
                                        More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </span></a>
                                    <h5 class="rts__program--item--title--show">CBSE Affiliated till Class 12</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="program__content mt--85">
                                <div class="rts__program--item v__2"
                                    style="background-image: url({{ asset('assets/images/program/program__3.jpg') }});">
                                    <h5 class="rts__program--item--title">Multiple Intelligence Based Curriculum</h5>
                                    <p class="rts__program--item--description">Tailored to uncover each child's hidden
                                        potential.</p>
                                    <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn
                                        More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </span></a>
                                    <h5 class="rts__program--item--title--show">Multiple Intelligence Based Curriculum</h5>
                                </div>
                                <!-- second one -->
                                <div class="rts__program--item v__2"
                                    style="background-image: url({{ asset('assets/images/program/program__4.jpg') }});">
                                    <h5 class="rts__program--item--title"> World-Class Sports & Activities</h5>
                                    <p class="rts__program--item--description">From cricket to karate and robotics to
                                        music—balanced development.</p>
                                    <a href="{{ route('program-single') }}" class="rts-nbg-btn btn-arrow">Learn
                                        More<span><i class="fa-sharp fa-regular fa-arrow-right"></i>
                                        </span></a>
                                    <h5 class="rts__program--item--title--show"> World-Class Sports & Activities</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our program end -->

    <!-- campus life start -->
    <div class="rts-campus pt--100 rts-campus-bg mobile-padding moving">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-lg-start">
                <div class="col-lg-6 col-xl-5 col-md-10 col-sm-11">
                    <div class="rts-left-section">
                        <h2 class="section-title rt-white mb--55">
                            A Glimpse of Pioneer
                        </h2>
                        <a href="{{ route('about') }}"
                            class="about-btn rts-nbg-btn btn-arrow 
                    rt-white">Know More About Us<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i></span></a>

                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-md-10 col-sm-11">
                    <div class="rts-right-section rt-relative">
                        <p class="rt-white mb--40">Welcome to Pioneer Convent Sr. Sec. School
                            Pioneer Convent is among Delhi’s premier educational institutions, where we blend strong Indian
                            values with global learning methodologies. Our mission is to prepare young minds to be
                            innovative, compassionate, and future-ready leaders.</p>
                        <img class="round" src="{{ asset('assets/images/feature/01.jpg') }}" alt="campus images">
                        <div class="rts-round-shape"></div>
                    </div>
                </div>
            </div>
            <div class="bottom-text rt-clip-text">About University</div>
            <div class="rt-shape">
                <img class="rt-shape__1" data-speed="0.04" src="{{ asset('assets/images/feature/shape/01.png') }}"
                    alt="">
                <img class="shape rt-shape__2" data-speed="0.04" src="{{ asset('assets/images/feature/shape/02.png') }}"
                    alt="">
                <img class="shape rt-shape__3" data-speed="0.04" src="{{ asset('assets/images/feature/shape/03.png') }}"
                    alt="">
                <img class="shape rt-shape__4" data-speed="0.04" src="{{ asset('assets/images/feature/shape/04.png') }}"
                    alt="">
            </div>
        </div>
    </div>
    <!-- campus life end -->

    <!-- tution fee -->
    <section class="tution v__2 rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start align-items-center g-5">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="rts__section--wrapper v__7">
                        <h2 class="rts__section--title">Fee Structure at Pioneer Convent Sr. Sec. School</h2>
                        <p class="rts__section--description">
                            At Pioneer Convent, we are committed to providing high-quality, value-based education at an
                            affordable cost. Our fee structure is designed to remain transparent and accessible, ensuring
                            every child can benefit from holistic learning.
                        </p>
                        <a href="{{ route('tution-fee') }}" class="rts-theme-btn btn-arrow">Plan Details
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="tution__single--box v__1">
                        <h5 class="tution__single--box--title">Class-Wise Fee Structure</h5>
                        <h6 class="tution__single--box--faculty">College of Arts and Sciences</h6>
                        <ul class="tution__single--box--feature">
                            <li>Admission Fee (one-time): ₹X,XXX</li>
                            <li>Monthly Tuition Fee: ₹X,XXX</li>
                            <li>Annual Activity & Development Fee: ₹X,XXX</li>
                        </ul>
                        <h6 class="tution__single--box--faculty">Middle & Secondary School (Class 6 to 10)</h6>
                        <ul class="tution__single--box--feature">
                            <li>Admission Fee (one-time): ₹X,XXX</li>
                            <li>Monthly Tuition Fee: ₹X,XXX</li>
                            <li>Annual Activity & Development Fee: ₹X,XXX</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="tution__single--box">
                        <h5 class="tution__single--box--title">Extra Charges & Facilities</h5>
                        <h6 class="tution__single--box--faculty">Senior Secondary (Class 11 & 12)</h6>
                        <ul class="tution__single--box--feature">
                            <li>Science Stream: ₹X,XXX per month</li>
                            <li>Commerce Stream: ₹X,XXX per month</li>
                            <li>Humanities Stream: ₹X,XXX per month</li>
                            <li>Laboratory & Practical Fees (Science): ₹X,XXX per year</li>
                        </ul>
                        <h6 class="tution__single--box--faculty">Additional Fees</h6>
                        <ul class="tution__single--box--feature">
                            <li>Transport (Optional): Based on Route</li>
                            <li>Uniform & Books: As per actuals</li>
                            <li>Extracurricular Clubs & Activities: Nominal charges</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tution fee end -->
    <!-- campus life -->
    <div class="campus v__2 pt--120 pb--60">
        <div class="container">
            <div class="campus__wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="campus__link">
                            <a href="{{ route('campus-life') }}" class="campus__link--btn">
                                Campus Life
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="campus__right--text">
                            <h2 class="campus__right--text--title">
                                Thriving Beyond Classrooms – Life at Pioneer
                            </h2>
                            <p class="campus__right--text--description">
                                Step into a world of learning, creativity, and discovery. Campus life at Pioneer Convent is
                                more than just academics—it’s about nurturing talents, building friendships, and shaping
                                character. From sports and cultural activities to clubs, workshops, and community events,
                                every day is filled with opportunities to grow, explore, and excel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="campus__paralax--image"
        style="background-image: url('{{ asset('assets/images/campus/paralax__image.jpg') }}');">
    </div>

    <!-- apply start -->
    <section class="rts-application-area moving rts-section-padding v_1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12">
                    <div class="rts__section--wrapper v__9">
                        <h2 class="rts__section--title">Apply for Admission</h2>
                        <p class="rts__section--description">Welcome to the gateway of possibilities your admission to
                            Unipix University. At Unipix, we understand.</p>
                    </div>
                </div>
            </div>
            <!-- application form -->
            <div class="row justify-content-md-center">
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div class="rts-admission-form-image">
                        <img src="{{ asset('assets/images/feature/admission-form.jpg') }}" alt="">
                    </div>
                    <div class="rts-section-big-text">
                        Admission Now
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-5">
                    <div class="rts-application-form">
                        <div class="rts-application-form-content">
                            <h5 class="heading-title  mb--25">Application Form</h5>
                            <form action="#" class="rts-form">
                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="fname" id="fname" placeholder="First Name"
                                            required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="lname" id="lname" placeholder="Last Name"
                                            required>
                                    </div>
                                </div>
                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="email" name="email" id="email2" placeholder="Email.."
                                            required>
                                    </div>
                                    <div class="single-input">
                                        <input type="number" name="Phone" id="Phone" placeholder="Phone"
                                            required>
                                    </div>
                                </div>

                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="address" id="address" placeholder="address"
                                            required>
                                    </div>
                                    <div class="single-input">
                                        <input type="text" name="city" id="city" placeholder="City" required>
                                    </div>
                                </div>

                                <div class="rts-input rt-flex">
                                    <div class="single-input">
                                        <input type="text" name="country" id="country" placeholder="Country"
                                            required>
                                    </div>
                                    <div class="single-input">
                                        <input type="number" name="zip" id="zip" placeholder="Zip Code"
                                            required>
                                    </div>
                                </div>
                                <div class="rts-input w-full">
                                    <div class="single-input">
                                        <input type="text" name="data" id="datepicker" placeholder="dd/mm/yy"
                                            required>
                                    </div>
                                </div>
                                <div class="rts-input w-full">
                                    <div class="single-input">
                                        <textarea name="msg" id="msg" placeholder="Enter Your Comments"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="rts-theme-btn rts-nbg-btn btn-arrow v2 full-btn">Apply Now
                                    <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rt-shape">
                <img src="{{ asset('assets/images/feature/shape/01.svg') }}" data-speed="0.04" alt="shape"
                    class="rt-shape__1">
                <img src="{{ asset('assets/images/feature/shape/02.svg') }}" data-speed="0.04" alt="shape"
                    class="shape rt-shape__2">
                <img src="{{ asset('assets/images/feature/shape/03.svg') }}" data-speed="0.04" alt="shape"
                    class="shape rt-shape__3">
                <img src="{{ asset('assets/images/feature/shape/04.svg') }}" data-speed="0.04" alt="shape"
                    class="shape rt-shape__4">
                <img src="{{ asset('assets/images/feature/shape/05.svg') }}" data-speed="0.04" alt="shape"
                    class="shape rt-shape__5">
            </div>
        </div>
    </section>
    <!-- apply end -->


    <!-- UPCOMING EVENT -->
    <section class="rts__section rts__light pt--120">
        <div class="container">
            <div class="row">
                <div class="rts__section--wrapper rt__lowercase">
                    <h2 class="rts__section--title">Upcoming event</h2>
                    <div class="rts__section--link">
                        <a href="{{ route('event') }}" class="rts-nbg-btn btn-arrow">View All<span><i
                                    class="fa-sharp fa-regular fa-arrow-right"></i>
                            </span></a>
                    </div>
                </div>
            </div>
            <!-- event content -->
            <div class="row g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{ asset('assets/images/event/01.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="">
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
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{ asset('assets/images/event/02.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="">
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
                    <div class="rts__single--event v__2">
                        <div class="rts__single--event--thumb">
                            <a href="{{ route('event-details') }}">
                                <img src="{{ asset('assets/images/event/03.jpg') }}" alt="event">
                            </a>
                        </div>
                        <div class="rts__single--event--meta">
                            <div class="rts__single--event--meta--dl">
                                <span class="date">
                                    <img src="{{ asset('assets/images/icon/calendar.svg') }}" alt="">
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

    @include($components . 'brand-slider', ['class' => 'rts__light rts-section-padding'])
    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
