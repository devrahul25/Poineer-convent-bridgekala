<!-- header style two -->
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img style="height: 100px; width:100px" src="{{ asset('assets/images/logo/logo.png') }}"
                alt="Unipix-university">
        </div>
        <div class="inner-content">
            <p class="disc">
                A modern campus fostering excellence, leadership, and compassion through a child-centric curriculum
                based on CBSE Class 12, all streams.
            </p>
            <!-- offcanvase banner -->
            <div class="offcanvase__banner mt--50">
                <div class="offcanvase__banner--content">
                    <img src="{{ asset('assets/images/offcanvase.jpg') }}" alt="offcanvase">
                    <a href="{{ route('admission') }}" class="rts-theme-btn">Apply Now</a>
                </div>
            </div>
            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>09555589555</a>
                    <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Lok Nayak Puram,
                        Bakkarwala, Delhi, 110041</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                <li>
                    <a href="{{ route('index') }}" class="main">Home</a>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">About Us</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('about') }}">Vision/Mission</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('faculty-details') }}">Manager's Desk</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('principal-desk') }}">Principal's Desk</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('campus-life') }}">School Overview</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Infrastructure</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#campus-tour">Campus Tour</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#library">Library</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#computer-lab">Computer Lab</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#physics-lab">Physics Lab</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#chemistry-lab">Chemistry Lab</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#biology-lab">Biology Lab</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#music-room">Music Room</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('academic') }}#sports-room">Sports Room</a></li>
                    </ul>
                </li>

                <li class="has-droupdown">
                    <a href="#" class="main">Academics</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('examinations') }}">Examinations</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('academic-calender') }}">School Calender</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('faculty') }}">Faculty</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Activities</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('athletics') }}">Sports</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('co-curricular') }}">Co-Curricular</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Admission</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('admission') }}">Adm. Information</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('tution-fee') }}">Fee Structure</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Disclosure</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('blog') }}">Mandatory Public Disclosure</a>
                        </li>
                        <li><a class="mobile-menu-link" href="{{ route('blog-grid') }}">SARAS-Mandatory
                                Disclosure</a></li>
                    </ul>
                </li>
                <li class="has-droupdown">
                    <a href="#" class="main">Gallery</a>
                    <ul class="submenu mm-collapse">
                        <li><a class="mobile-menu-link" href="{{ route('image-gallery') }}">Photo Gallery</a></li>
                        <li><a class="mobile-menu-link" href="{{ route('video-gallery') }}">Video Gallery</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="offcanvase__info--content mt--30">
            <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>09555589555</a>
            <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>Lok Nayak Puram,
                Bakkarwala, Delhi, 110041</a>
            <div class="offcanvase__info--content--social">
                <p class="title">Follow Us:</p>
                <div class="social__links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->
