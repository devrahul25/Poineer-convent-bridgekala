<!-- footer start -->
<footer class="rts-footer {{ $class ?? '' }}">
    <div class="container">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="rts-footer-widget w-320">
                    <a href="{{ route('index') }}" class="d-block rts-footer-logo mb--40">
                        <img style="height: 100px; width:100px;" src="{{ asset('assets/images/logo/logo.png') }}"
                            alt="Unipix">
                    </a>
                    <p>
                        We are passionate education dedicated to providing high-quality
                        resources learners all backgrounds.
                    </p>
                    <div class="rts-contact-link">
                        <a href="mailto:contact@reacthemes.com"><i class="fa-sharp fa-light fa-location-dot"></i>
                            Lok Nayak Puram, Bakkarwala, Delhi, 110041 </a>
                        <a href="callto:121"><i class="fa-thin fa-phone"></i> 09555589555</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center">
                <div class="rts-footer-widget ">
                    <h6 class="rt-semi">Quick Links</h6>
                    <div class="rts-footer-menu">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('academic') }}">Infrastructure</a></li>
                            <li><a href="examinations">Academics</a></li>
                            <li><a href="{{ route('athletics') }}">Activities</a></li>
                            <li><a href="{{ route('admission') }}">Admission</a></li>
                            <li><a href="{{ route('blog') }}">Disclosure</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-4" style="text-align: center">
                <div class="rts-footer-widget ml--30">
                    <h6 class="rt-semi">Admission Process</h6>
                    <div class="rts-footer-menu">
                        <ul>
                            <li><a href="{{ route('admission') }}">Admission Information </a></li>
                            <li><a href="{{ route('tution-fee') }}">Fee Structure</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="rts-footer-widget ml--30">
                    <h6 class="rt-semi">Recent Post</h6>
                    <div class="rts-post-widget">
                        <ul class="list-unstyled">
                            <li class="single-post">
                                <a href="{{ route('blog-details') }}" class="blog-thumb">
                                    <img src="{{ asset('assets/images/blog/w-1.jpg') }}" alt="latest post">
                                </a>
                                <div class="post-content">
                                    <span class="rt-date">October 29, 2023</span>
                                    <a href="{{ route('blog-details') }}">
                                        Avoid These 4 Common When Managing Remote Teams
                                    </a>
                                </div>
                            </li>
                            <li class="single-post">
                                <a href="{{ route('blog-details') }}" class="blog-thumb">
                                    <img src="{{ asset('assets/images/blog/small-thumb-1.jpg') }}" alt="latest post">
                                </a>
                                <div class="post-content">
                                    <span class="rt-date">October 29, 2023</span>
                                    <a href="{{ route('blog-details') }}">
                                        Avoid These 4 Common When Managing Remote Teams
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</footer>
<div class="rts-footer-copy-right {{ $cclass ?? '' }}">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p class="--p-xs">Copyright &copy; {{ date('Y') }} Pioneer Convent Designed & Developed by <a
                        target="_blank" href="https://www.bridgekala.com/">BridgeKala</a></p>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
