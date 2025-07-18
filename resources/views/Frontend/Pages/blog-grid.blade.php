@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'University Blog',
        'page' => 'blogs'    
    ])
    <!-- university blog list -->
    <div class="rts-blog v_4 rts-section-padding">
        <div class="container">
            <div class="row justify-content-center g-5">
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/01.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/02.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/03.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/01.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/02.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
                <!-- single blog item -->
                <div class="col-lg-10 col-md-11 col-xl-6">
                    <div class="single-blog">
                        <div class="blog single-blog__content">
                            <div class="blog__thumb">
                                <a href="{{ route('blog-details') }}">
                                    <img src="{{asset('assets/images/blog/03.jpg')}}" alt="blog thumbnail">
                                </a>
                            </div>
                            <div class="blog__meta">
                                <div class="blog__meta--da">
                                    <div class="blog-date">
                                        <span><i class="fal fa-calendar"></i></span>
                                        <span>Dec 28, 2023</span>
                                    </div>
                                    <div class="blog-author">
                                        <span><i class="far fa-user"></i>
                                        </span>
                                        <span><a href="#">Maria coli</a></span>
                                    </div>
                                </div>
                                <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Classroom community-building It’s ok to try
                                        something new feature! </a></h5>
                                <a href="{{ route('blog-details') }}" class="about-btn rts-nbg-btn btn-arrow">Read More <span><i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog item end -->
            </div>
            <div class="rts-load-more-btn rt-center mt--60">
                <a href="#" class="rts-theme-btn primary primary lh-100">Load More</a>
            </div>
        </div>
    </div>
    
    @include($footer . 'footer-v3', ['class' => 'v__1'])
@endsection