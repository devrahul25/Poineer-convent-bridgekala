@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'University Event',
        'page' => 'Events'    
    ])
    <!-- university event list -->
    <div class="rts-event rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start g-5">
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/01.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/02.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/03.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/04.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/05.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/06.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/04.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/05.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
                <!-- single event item -->
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="single-event">
                        <div class="event single-event__content">
                            <div class="event__thumb">
                                <img src="{{asset('assets/images/campus/event/06.jpg')}}" alt="event thumbnail">
                            </div>
                            <div class="event__meta">
                                <div class="event__meta--da">
                                    <div class="event-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>November 28, 2023</span>
                                    </div>
                                    <div class="event-time">
                                        <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                        <span>10:30 am</span>
                                    </div>
                                </div>
                                <h5 class="event__title"> <a href="{{ route('event-details') }}">Edu Fest 2023: Igniting Minds Off on Transforming Lives</a></h5>
                            </div>
                            <div class="event-place">
                                <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                <span>Yarra Park, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single event item end -->
            </div>
        </div>
    </div>
    <!-- university event list end -->
     
   @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection