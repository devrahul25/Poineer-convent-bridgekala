<!-- header area start -->
<header class="header header__sticky v__3">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12">
                <div class="header__wrapper">

                    <div class="header__center__content">

                        <!-- LEFT MENU -->
                        <div class="header__menu header__menu--left">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item has-child">
                                            <a href="{{ route('index') }}" class="navigation__menu--item__link">Home</a>
                                        </li>

                                        <li class="navigation__menu--item has-child">
                                            <a href="{{ route('about') }}" class="navigation__menu--item__link">About
                                                Us</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('about') }}">Vision/Mission</a></li>
                                                <li><a href="{{ route('faculty-details') }}">Manager's Desk</a></li>
                                                <li><a href="{{ route('principal-desk') }}">Principal's Desk</a></li>
                                                <li><a href="{{ route('campus-life') }}">School Overview</a></li>
                                            </ul>
                                        </li>

                                        <li class="navigation__menu--item has-child ">
                                            <a href="#" class="navigation__menu--item__link">Infrastructure</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('academic') }}">Campus Tour</a></li>
                                                <li><a href="{{ route('admission') }}">Library</a></li>
                                                <li><a href="{{ route('academic-area') }}">Computer Lab</a></li>
                                                {{-- <li><a href="{{ route('academic-area') }}">Healthy Bay</a></li> --}}
                                                <li><a href="{{ route('academic-area') }}">Physics Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Chemistry Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Biology Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Music Room</a></li>
                                                <li><a href="{{ route('academic-area') }}">Sports Room</a></li>
                                            </ul>
                                        </li>

                                        <li class="navigation__menu--item has-child ">
                                            <a href="#" class="navigation__menu--item__link">Academics</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('examinations') }}">Examinations</a></li>
                                                <li><a href="{{ route('academic-calender') }}">School Calendar</a></li>
                                            <li><a href="{{ route('academic-area') }}">Faculty</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- LEFT MENU END -->

                        <!-- LOGO CENTER -->
                        <div style="display: flex; align-item:center; justify-content:center;" class="header__logo">
                            <a style="width: 50%;" href="{{ route('index') }}" class="header__logo--link">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="unipix">
                            </a>
                        </div>
                        <!-- LOGO END -->

                        <!-- RIGHT MENU -->
                        <div class="header__menu header__menu--right">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Activities</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('athletics') }}">Sports</a></li>
                                                <li><a href="{{ route('co-curricular') }}">Co-Curricular</a></li>
                                                {{-- <li><a href="{{ route('event-details') }}">House System</a></li>
                                                <li><a href="{{ route('event-details') }}">Club</a></li> --}}
                                            </ul>
                                        </li>

                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Admission</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('admission') }}">Adm. Information</a></li>
                                                <li><a href="{{ route('tution-fee') }}">Fee Structure</a></li>
                                            </ul>
                                        </li>

                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Disclosure</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('blog') }}">Mandatory Public Disclosure</a></li>
                                                <li><a href="{{ route('blog-grid') }}">SARAS-Mandatory Disclosure</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Gallery</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('image-gallery') }}">Photo Gallery</a></li>
                                                <li><a href="{{ route('video-gallery') }}">Video Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- RIGHT MENU END -->

                    </div><!-- header__center__content END -->

                    <!-- MOBILE MENU / BURGER ICON -->
                    {{-- <div class="header__right">
                        <div class="header__right--item">
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{ asset('assets/images/icon/menu__bar-3.svg') }}" alt="bar">
                                <img src="{{ asset('assets/images/icon/menu__bar-3.svg') }}" alt="bar">
                            </div>
                        </div>
                    </div> --}}

                </div><!-- header__wrapper -->
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

