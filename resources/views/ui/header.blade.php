<!--Full width header Start-->
<div class="full-width-header">

    <!-- Toolbar Start -->
    <div class="rs-toolbar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="rs-toolbar-left">
                        <div class="welcome-message">
                            <i class="fa fa-bank"></i><span>Welcome to DNALC</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rs-toolbar-right">
                        <div class="toolbar-share-icon">
                            <ul>
                                <li><a href="{{ $aboutInfo['facebook'] ?? '#' }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $aboutInfo['twitter'] ?? '#' }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $aboutInfo['instagram'] ?? '#' }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $aboutInfo['linkedin'] ?? '#' }}"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <a href="{{ route('workshop') }}" class="apply-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Toolbar End -->

    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Header Top Start -->
        <div class="rs-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo-area">
                            <a href="/"><img id="logo" src="{{ asset('assets/images/dna/logo.png') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="phone-details" class="widget-text">
                                        <i class="glyph-icon flaticon-phone-call"></i>
                                        <div class="info-text">
                                            <a href="tel:{{ $aboutInfo['phone'] ?? '' }}" style="font-size: 13px">
                                                <span>Call Us</span>
                                                {{ $aboutInfo['phone'] ?? '' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
                                        <div class="info-text">
                                            <a href="mailto:{{ $aboutInfo['email'] }}" style="font-size: 13px">
                                                <span>Mail Us</span>
                                                {{ $aboutInfo['email'] }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="header-contact">
                                    <div id="address-details" class="widget-text">
                                        <i class="glyph-icon flaticon-placeholder"></i>
                                        <div class="info-text" style="font-size: 13px">
                                            <span>Location</span>
                                            {{ $aboutInfo['address'] ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="main-menu">
                    <div class="row">
                        <div class="col-sm-12">

                            <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                            <nav class="rs-menu">
                                <ul class="nav-menu">
                                    <!-- Home -->
                                    <li class="{{ Route::currentRouteName() == 'index.welcome' ? 'current-menu-item current_page_item' : '' }} menu-item-has-children"> <a href="/" class="home">Centers</a>
                                    <ul class="sub-menu">
                                        <li class="{{ Route::currentRouteName() == 'cetras' ? 'active' : '' }}"><a target="_blank" href="{{ route('cetras') }}">CeTRAS</a> </li>
                                      <li><a target="_blank" href="https://cedfoci.dnalcnigeria.org/">CeDFOCI</a> </li>
                                      <li><a target="_blank" href="#">CeFARAI</a> </li>
                                      <li><a target="_blank" href="#">CeSAVIMS</a> </li>
                                      <li><a target="_blank" href="#">CeSISTEN</a> </li>
                                    </ul>
                                    </li>
                                    <!-- End Home -->

                                    <!--About Menu Start-->
                                    <li class="rs-mega-menu mega-rs {{ Route::currentRouteName() == 'center.about' ? 'active' : '' }}"> <a href="{{ route('center.about') }}">About us</a>
                                        {{-- <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">History of CSHL-DNALC</a></li>
                                                            <li><a href="#">Including the parent Center-DNALC New York, USA</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li>The Host Institution-Godfrey Okoye University, Enugu</li>
                                                            <li> <a href="#">Mission of GOU</a> </li>
                                                            <li> <a href="#">Vision of GOU</a> </li>
                                                            <li> <a href="#">Philosophy of GOU</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">Gallery One</a> </li>
                                                            <li> <a href="#">Gallery Two</a> </li>
                                                            <li> <a href="#">Gallery Three</a> </li>
                                                            <li><a href="error-#">Error 404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">Shop</a> </li>
                                                            <li> <a href="#">Shop Details</a> </li>

                                                            <li><a href="#">Cart</a></li>
                                                            <li><a href="#">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <!--About Menu End-->

                                    <!-- Drop Down Pages Start -->
                                    <li class="rs-mega-menu mega-rs {{ Route::currentRouteName() == 'center.vacancy' ? 'active' : '' }}"> <a href="{{ route('center.vacancy') }}">Vacancy</a>
                                        {{-- <ul class="mega-menu">
                                            <li class="mega-menu-container">
                                                <div class="mega-menu-innner">
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">About One</a></li>
                                                            <li><a href="#">About Two</a></li>
                                                            <li><a href="#">Blog</a></li>
                                                            <li><a href="blog-#">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">Teachers</a> </li>
                                                            <li> <a href="#">Teachers Without Filter</a> </li>
                                                            <li> <a href="#">Teachers Single</a> </li>
                                                            <li> <a href="#">Contact</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">Gallery One</a> </li>
                                                            <li> <a href="#">Gallery Two</a> </li>
                                                            <li> <a href="#">Gallery Three</a> </li>
                                                            <li><a href="error-#">Error 404</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="single-magemenu">
                                                        <ul class="sub-menu">
                                                            <li> <a href="#">Shop</a> </li>
                                                            <li> <a href="#">Shop Details</a> </li>

                                                            <li><a href="#">Cart</a></li>
                                                            <li><a href="#">Checkout</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <!--Drop Down Pages End -->

                                    <!--Courses Menu Start-->
                                    <li class="menu-item-has-children {{ Route::currentRouteName() == 'center.organizations' ? 'active' : '' }}"> <a href="{{ route('center.organizations') }}">Organizations</a>
                                      {{-- <ul class="sub-menu">
                                        <li><a href="#">Courses One</a></li>
                                        <li><a href="#">Courses Two</a></li>
                                        <li><a href="#">Courses Details</a></li>
                                          <li><a href="#">Courses Details 2</a></li>
                                      </ul> --}}
                                    </li>
                                    <!--Courses Menu End-->

                                    <!--Events Menu Start-->
                                    <li class="menu-item-has-children {{ Route::currentRouteName() == 'center.management' ? 'active' : '' }}"> <a href="{{ route('center.management') }}">Management</a>
                                        {{-- <ul class="sub-menu">
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Events Details</a></li>
                                        </ul> --}}
                                    </li>
                                    <!--Events Menu End-->

                                    <!-- Drop Down -->
                                    <li class="menu-item-has-children {{ Route::currentRouteName() == 'center.organogram' ? 'active' : '' }}"> <a href="{{ route('center.organogram') }}">Organogram</a>
                                        {{-- <ul class="sub-menu">
                                            <li class="menu-item-has-children"> <a href="#">Teachers</a>
                                              <ul class="sub-menu">
                                                <li> <a href="#">Teachers</a> </li>
                                                <li> <a href="#">Teachers Without Filter</a> </li>
                                                <li> <a href="#">Teachers Single</a> </li>
                                              </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">More</a>
                                              <ul class="sub-menu">
                                                <li> <a href="#">Gallery One</a> </li>
                                                <li> <a href="#">Gallery Two</a> </li>
                                                <li> <a href="#">Gallery Three</a> </li>
                                              </ul>
                                            </li>

                                            <li class="menu-item-has-children"> <a href="#">Shop</a>
                                              <ul class="sub-menu">
                                                <li> <a href="#">Shop</a> </li>
                                                <li> <a href="#">Shop Details</a> </li>
                                              </ul>
                                            </li>

                                            <li><a href="#">Cart</a></li>
                                            <li><a href="#">Checkout</a></li>

                                            <li><a href="#">Error 404</a></li>
                                        </ul> --}}
                                    </li>
                                    <!--End Icons -->

                                    <!--blog Menu Start-->
                                    {{-- <li class="menu-item-has-children"> <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <!--blog Menu End-->

                                    <!--Contact Menu Start-->
                                    {{-- <li> <a href="{{ route('workshop') }}">Workshops</a></li> --}}
                                    <!--Contact Menu End-->
                                </ul>
                            </nav>
                            <div class="right-bar-icon rs-offcanvas-link text-right">
                                <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target=".search-modal" style="width: 80px"><i class="fa fa-search"></i></a>
                                {{-- <a class="rs-search" href="{{ route('workshop') }}" class="hidden-xs">Workshops</a> --}}
                                {{-- <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
    </header>
    <!--Header End-->

</div>
<!--Full width header End-->
