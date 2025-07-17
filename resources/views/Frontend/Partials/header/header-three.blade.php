<!-- header area start -->
<header class="header header__sticky v__3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    {{-- <div class="header__social__link">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div> --}}
                    <div class="header__center__content">
                        <!-- menu left side -->
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="{{ route('index-three') }}"
                                                class="navigation__menu--item__link">Home</a>

                                        </li>

                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="{{ route('about') }}" class="navigation__menu--item__link">About
                                                Us</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('about') }}">Vision/Mission</a></li>
                                                <li><a href="{{ route('athletics') }}">Manager's Desk</a></li>
                                                {{-- <li class="has-child has-arrow">
                                                    <a href="{{ route('index') }}">Faculty</a>
                                                    <ul class="sub__style">
                                                        <li><a class="mobile-menu-link"
                                                                href="{{ route('faculty-sub') }}">Faculty</a></li>
                                                        <li><a class="mobile-menu-link"
                                                                href="{{ route('faculty-sub-details') }}">Faculty
                                                                Details</a></li>
                                                                href="{{ route('faculty-sub-details') }}">Faculty
                                                                Details</a></li>
                                                        <li><a href="{{ route('faculty') }}">Faculty Staff</a></li>
                                                        <li class="has-child"><a
                                                                href="{{ route('faculty-details') }}">Faculty Staff
                                                        <li class="has-child"><a
                                                                href="{{ route('faculty-details') }}">Faculty Staff
                                                                details</a></li>
                                                    </ul>
                                                </li> --}}
                                                <li><a href="{{ route('index-three') }}">Principal's Desk</a></li>
                                                <li><a href="{{ route('campus-life') }}">School Overview</a></li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Infrastructure</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('academic') }}">Campus Tour</a></li>
                                                <li><a href="{{ route('admission') }}">Library</a></li>
                                                <li><a href="{{ route('academic-area') }}">Computer Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Healthy Bay</a></li>
                                                <li><a href="{{ route('academic-area') }}">Physics Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Chemistry Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Biology Lab</a></li>
                                                <li><a href="{{ route('academic-area') }}">Music Room</a></li>
                                                <li><a href="{{ route('academic-area') }}">Music Room</a></li>
                                                <li><a href="{{ route('academic-area') }}">Sports Room</a></li>

                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Academics</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('academic') }}">Examinations</a></li>
                                                <li><a href="{{ route('admission') }}">School Calender</a></li>
                                                <li><a href="{{ route('academic-area') }}">Faculy</a></li>
                                                {{-- <li><a href="{{ route('campus-life') }}">Campus Life</a></li>
                                                <li><a href="{{ route('scholarship') }}">Scholarship</a></li>
                                                <li><a href="{{ route('tution-fee') }}">Tution Fee</a></li>
                                                <li><a href="{{ route('alumni') }}">alumni</a></li>
                                                <li><a href="{{ route('program-single') }}">Program Single</a></li>
                                                <li><a href="{{ route('department-details') }}">Department Details</a> --}}
                                        </li>
                                    </ul>
                                    </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- menu left side end -->
                        <div style="display:flex; align-item:center; justify-content:center" class="header__logo">
                            <a style="width:50%;" href="{{ route('index-three') }}" class="header__logo--link">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="unipix">
                            </a>
                        </div>

                        <!-- menu right side -->
                        <div class="header__menu">
                            <div class="navigation">
                                <nav class="navigation__menu">
                                    <ul>

                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Activities</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('event') }}">Sports</a></li>
                                                <li><a href="{{ route('event-details') }}">Co-Curricular</a></li>
                                                <li><a href="{{ route('event-details') }}">House System</a></li>
                                                <li><a href="{{ route('event-details') }}">Club</a></li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Admission</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('blog') }}">Information</a></li>
                                                {{-- <li><a href="{{ route('blog-grid') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('blog-list') }}">Blog List</a></li>
                                                <li><a href="{{ route('blog-details') }}">Blog Detaila</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Mandatory Public
                                                Disclosure</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('blog') }}">Mandatory Public Disclosure</a></li>
                                                <li><a href="{{ route('blog-grid') }}">SARAS-Mandatory Disclosure</a>
                                                </li>
                                                {{-- <li><a href="{{ route('blog-list') }}">Blog List</a></li>
                                                <li><a href="{{ route('blog-details') }}">Blog Detaila</a></li> --}}
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child has-arrow">
                                            <a href="#" class="navigation__menu--item__link">Gallery</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('blog') }}">Photo Gallery</a></li>
                                                <li><a href="{{ route('blog-grid') }}">Video Gallery</a></li>
                                                {{-- <li><a href="{{ route('blog-list') }}">Blog List</a></li>
                                                <li><a href="{{ route('blog-details') }}">Blog Detaila</a></li> --}}
                                            </ul>
                                        </li>
                                        {{-- <li class="navigation__menu--item">
                                            <a href="{{ route('contact') }}"
                                                class="navigation__menu--item__link">Contact</a>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <div id="langSwitcher" class="lang__trigger">
                                <span class="selected__lang">English</span>
                                <i class="fa-light fa-globe"></i>
                                <div class="translate__lang">
                                    <ul>
                                        <li><a href="#" class="active">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Romanian</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="search-btn" class="search__trigger">
                                <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                            </div>
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{ asset('assets/images/icon/menu__bar-3.svg') }}" alt="bar">
                                <img src="{{ asset('assets/images/icon/menu__bar-3.svg') }}" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->

