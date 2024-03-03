<header class="main-header sticky-header main-header--two sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo logo-laboix">
                <a href="/">
                    <img src="{{ asset('assets/images/dna/logo.png') }}" alt="DNA Learning Center Nigeria" width="130">
                </a>
            </div><!-- /.main-header__logo -->

            <nav class="main-header__nav main-menu">
                <ul class="main-menu__list">

                    <li>
                        <a href="/">Home</a>
                    </li>



                    <li class="dropdown">
                        <a href="#">About us</a>
                        <ul>
                            <li><a href="{{ route('historycshl') }}">History of CSHL-DNALC</a></li>
                            <li><a href="{{ route('parentcenter') }}">Including the parent Center-DNALC New York, USA</a></li>
                            <li class="sub-menu"><a href="#">The Host Institution-Godfrey Okoye University, Enugu</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('missiongou') }}">Mission of GOU</a></li>
                                    <li><a href="{{ route('visiongou') }}">Vision of GOU</a></li>
                                    <li><a href="{{ route('philosophygou') }}">Philosophy of GOU</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu"><a href="#">DNA-Learning Center Nigeria</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('aboutdnalc') }}">About DNALC Nigeria</a></li>
                                    <li><a href="{{ route('historystory') }}">History-Our story</a></li>
                                    <li><a href="{{ route('missionvision') }}">Our Mission & Vision</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu"><a href="#">Leadership</a>
                                <ul class="dropdown">
                                        <li><a href="{{ route('boarddirectors') }}">Board of Directors</a></li>
                                        <li><a href="{{ route('adminstaff') }}">Administrative staff</a></li>
                                        <li><a href="{{ route('teachingstaff') }}">Teaching Staff</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('mediacenter') }}">Our Media Center</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Trainings</a>
                        <ul>
                            <li class="sub-menu"><a href="#">Workshop & Courses</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('signaturecourse') }}">Signature Courses</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu"><a href="#">School Field Trips</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('dnafacility') }}">DNA Facility Tour</a></li>
                                    <li><a href="{{ route('saturdaydna') }}">Saturday DNA World classes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">Research</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('sssinternship') }}">Senior Seconday School Internship</a></li>
                            <li><a href="{{ route('urex') }}">Undergraduate Research Experience(UREx)</a></li>
                            <li><a href="{{ route('postgraduate') }}">Postgraduate Research Opporturnity</a></li>
                            <li><a href="{{ route('drde') }}">Doctoral Research Designs & Experience</a></li>
                            <li><a href="{{ route('pdrp') }}">Post Doctoral Research Prospects</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('blog') }}">
                            Blog
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#">Multimedia & Resources</a>
                        <ul>
                            <li class="sub-menu"><a href="#">Multimedia</a>
                                <ul class="dropdown">
                                    {{-- <li class="sub-menu"><a href="#">DNA Event</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Workshop</a></li>
                                            <li><a href="#">Conference</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="{{ route('workshop') }}">Workshop</a></li>
                                    <li><a href="{{ route('gallery') }}">Conference</a></li>
                                    <li><a href="{{ route('conference') }}">Gallery</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#">More</a>
                        <ul>
                            {{-- <li><a href="#">Membership & Partnership Program</a></li> --}}
                            {{-- <li><a href="#">Collaborations & Partnerships</a></li> --}}
                            <li><a href="{{ route('employment') }}">Employment</a></li>
                            <li><a href="{{ route('faq') }}">Faqs</a></li>
                            <li><a href="{{ route('contact') }}">Contact us</a></li>
                        </ul>
                    </li>

                    {{-- <li class="dropdown megamenu">
                        <a href="#">More</a>
                        <ul>
                            <li>
                                <section class="home-showcase">
                                    <div class="container">
                                        <div class="home-showcase__inner">
                                            <div class="row">

                                                <div class="col-md-6 col-lg-4">
                                                    <div>
                                                        <h5 class="fs-14" style="font-size: 15px; font-weight:500">Membership & Partnership Program</h5>

                                                        <li>
                                                            <ul>
                                                                <li>Hello</li>
                                                            </ul>
                                                        </li>
                                                    </div>
                                                </div>


                                            </div><!-- /.row -->

                                        </div><!-- /.home-showcase__inner -->
                                    </div><!-- /.container -->
                                </section>
                            </li>
                        </ul>
                    </li> --}}

                </ul>
            </nav><!-- /.main-header__nav -->

            <div class="main-header__right">
                <a href="tel:{{ $aboutInfo['phone'] }}" class="main-header__right__call">
                    <div class="main-header__right__icon">
                        <i class="icon-telephone-call-1"></i>
                    </div>
                    <div class="main-header__right__content">
                        <span class="main-header__right__content__text">Call to Anytime</span>
                        <h6 class="main-header__right__content__number">{{ $aboutInfo['phone'] }}</h6>
                    </div>
                </a>
                <div class="main-header__right__info">
                    <a href="#" class="search-toggler main-header__right__info__item"> <i class="icon-search" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                    <a href="{{ route('admin.dashboard') }}" class="main-header__right__info__item"> <i class="icon-user" aria-hidden="true"></i> <span class="sr-only">Search</span> </a>
                </div>
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span><span></span><span></span>
                </div><!-- /.mobile-nav__toggler -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header -->
