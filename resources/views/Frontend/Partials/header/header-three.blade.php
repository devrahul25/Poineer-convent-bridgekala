<!-- header area start -->
<header class="header header__sticky v__2">
    <div class="containers">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="header__wrapper">
                    <!-- Mobile Header (only visible on mobile) -->
                    <div class="header__mobile d-lg-none"
                        style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                        <div class="header__mobile--logo" style="flex: 1; display: flex; align-items: center;">
                            <a href="{{ route('index') }}" class="header__logo--link">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Pioneer Convent"
                                    style="max-width: 150px; height: auto;">
                            </a>
                        </div>
                        <div class="header__mobile--menu" style="flex-shrink: 0; display: flex; align-items: center;">
                            <div id="menu-btn" class="menu__trigger"
                                style="cursor: pointer; padding: 8px; display: flex; align-items: center; justify-content: center;">
                                <img src="{{ asset('assets/images/icon/menu__bar.svg') }}" alt="menu"
                                    style="width: 24px; height: 24px;">
                            </div>
                        </div>
                    </div>

                    <!-- Desktop Header (only visible on desktop) -->
                    <div class="header__desktop d-none d-lg-block">
                        <div class="header__menu">
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
                                                <li><a href="{{ route('manager-desk') }}">Manager's Desk</a></li>
                                                <li><a href="{{ route('principal-desk') }}">Principal's Desk</a></li>
                                                <li><a href="{{ route('school-overview') }}">School Overview</a></li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Infrastructure</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('Infrastructure') }}#campus-tour">Campus Tour</a>
                                                </li>
                                                <li><a href="{{ route('Infrastructure') }}#library">Library</a></li>
                                                <li><a href="{{ route('Infrastructure') }}#computer-lab">Computer
                                                        Lab</a></li>
                                                <li><a href="{{ route('Infrastructure') }}#physics-lab">Physics Lab</a>
                                                </li>
                                                <li><a href="{{ route('Infrastructure') }}#chemistry-lab">Chemistry
                                                        Lab</a></li>
                                                <li><a href="{{ route('Infrastructure') }}#biology-lab">Biology Lab</a>
                                                </li>
                                                <li><a href="{{ route('Infrastructure') }}#music-room">Music Room</a>
                                                </li>
                                                <li><a href="{{ route('Infrastructure') }}#sports-room">Sports Room</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Academics</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('examinations') }}">Examinations</a></li>
                                                <li><a href="{{ route('school-calendar') }}">School Calendar</a></li>
                                                <li><a href="{{ route('faculty') }}">Faculty</a></li>
                                            </ul>
                                        </li>

                                        <div style="display: flex; align-item:center; justify-content:center;"
                                            class="header__logo">
                                            <a style="width: 100%;" href="{{ route('index') }}"
                                                class="header__logo--link">
                                                <img style="width: 100%;"
                                                    src="{{ asset('assets/images/logo/logo.png') }}" alt="unipix">
                                            </a>
                                        </div>

                                        <li class="navigation__menu--item has-child">
                                            <a href="#" class="navigation__menu--item__link">Activities</a>
                                            <ul class="submenu sub__style">
                                                <li><a href="{{ route('athletics') }}">Sports</a></li>
                                                <li><a href="{{ route('co-curricular') }}">Co-Curricular</a></li>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
