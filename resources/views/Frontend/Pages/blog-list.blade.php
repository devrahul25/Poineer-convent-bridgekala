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
    <div class="rts-blog v_5 rts-section-padding">
        <div class="container">
            <div class="row sticky-coloum-wrap g-5">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <!-- single blog item -->
                            <div class="single-blog">
                                <div class="blog single-blog__content">
                                    <div class="blog__thumb">
                                        <a href="{{ route('blog-details') }}">
                                            <img src="{{asset('assets/images/blog/blog-big-1.jpg')}}" alt="blog thumbnail">
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
                                            <div class="blog-cat">
                                                <span><i class="fa-light fa-tags"></i>
                                                </span>
                                                <span><a href="#">Study Aboard</a></span>
                                            </div>
                                        </div>
                                        <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Unlocking Potential: Harnessing the Transformative Power of Education for Lifelong Learning.</a></h5>
                                        <p class="excerpt">
                                            Harnessing the Transformative Power of Education for Lifelong Learning" explores the profound impact of education as a catalyst for personal and societal transformation. This insightful work delves into the dynamic relationship between education and lifelong learning, emphasizing the boundless possibilities it creates.
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="rts-theme-btn primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single blog item end -->
                            <!-- single blog item -->
                            <div class="single-blog">
                                <div class="blog single-blog__content">
                                    <div class="blog__thumb">
                                        <a href="{{ route('blog-details') }}">
                                            <img src="{{asset('assets/images/blog/blog-big-2.jpg')}}" alt="blog thumbnail">
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
                                            <div class="blog-cat">
                                                <span><i class="fa-light fa-tags"></i>
                                                </span>
                                                <span><a href="#">Study Aboard</a></span>
                                            </div>
                                        </div>
                                        <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Empowering Minds: Unleashing the Revolutionary Force of Education for Lifelong Growth.</a></h5>
                                        <p class="excerpt">
                                            Empowering Minds: Unleashing the Revolutionary Force of Education for Lifelong Growth" stands as a beacon of enlightenment, beckoning individuals to embark on a transformative journey through the boundless realm of knowledge.
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="rts-theme-btn primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single blog item end -->
                            <!-- single blog item -->
                            <div class="single-blog">
                                <div class="blog single-blog__content">
                                    <div class="blog__thumb">
                                        <a href="{{ route('blog-details') }}">
                                            <img src="{{asset('assets/images/blog/blog-big-3.jpg')}}" alt="blog thumbnail">
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
                                            <div class="blog-cat">
                                                <span><i class="fa-light fa-tags"></i>
                                                </span>
                                                <span><a href="#">Study Aboard</a></span>
                                            </div>
                                        </div>
                                        <h5 class="blog__title"> <a href="{{ route('blog-details') }}">Unlocking Potential: Harnessing the Transformative Power of Education for Lifelong Learning.</a></h5>
                                        <p class="excerpt">
                                            Harnessing the Transformative Power of Education for Lifelong Learning" explores the profound impact of education as a catalyst for personal and societal transformation. This insightful work delves into the dynamic relationship between education and lifelong learning, emphasizing the boundless possibilities it creates.
                                        </p>
                                        <a href="{{ route('blog-details') }}" class="rts-theme-btn primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- single blog item end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  sticky-coloum-item">
                    <div class="rt__sidebar">
                        <div class="program-sidebar">
                            <!-- curriculum -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Category</h6>
                                <div class="program-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Course Curriculum</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Program Faculty</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Study Aboard</a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Scholarship </a></li>
                                        <li><a href="#"><span><i class="fa-light fa-arrow-right"></i></span>Education Expo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- contact info -->
                            <div class="program-info">
                                <h5>Department Contact Info</h5>
                                <p>B.A. in Africana Studies</p>
                                <div class="contact-info">
                                    <h5>Contact:</h5>
                                    <a href="mailto:barry.Unipix@info.com">barry.Unipix@info.com</a>
                                    <a href="callto:121">664-254-251</a>
                                </div>
                                <div class="social-info">
                                    <h5>Social Info:</h5>
                                    <div class="social-info-link">
                                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
    
                            <!-- join event -->
                            <div class="program-event">
                                <div class="program-event-content">
                                    <p>Joint New Event About
                                        African History
                                    </p>
                                   <h4 class="event-title">B.A. in Africana
                                    Studies</h4> 
                                    <div class="single-event-content-meta">
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                        <div class="event-place">
                                            <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                            <span>Yarra Park, UK</span>
                                        </div>
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>November 28, 2023</span>
                                        </div>
                                    </div>
                                    <a href="#" class="rts-theme-btn with-arrow btn-white lh-100">Joint Now <span><i class="fa-thin fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="rts-load-more-btn rt-center mt--60">
                <a href="#" class="rts-theme-btn primary primary lh-100">Load More</a>
            </div>
        </div>
    </div>
    <!-- university blog list end -->
     
    @include($footer . 'footer-v3', ['class' => 'v__1'])
@endsection