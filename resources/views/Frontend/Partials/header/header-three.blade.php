<!-- header area start -->
<header class="header header__sticky v__2">
    <div class="containers">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="header__wrapper">
                    {{-- <div style="display: flex; align-item:center; justify-content:center;" class="header__logo">
                            <a style="width: 100%;" href="{{ route('index') }}" class="header__logo--link">
                                <img style="width: 40%;" src="{{ asset('assets/images/logo/logo.png') }}" alt="unipix">
                            </a>
                        </div> --}}
                    <div class="header__menu">
                        @include($elements . 'nav__two')
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                           
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{ asset('assets/images/icon/menu__bar.svg') }}" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
