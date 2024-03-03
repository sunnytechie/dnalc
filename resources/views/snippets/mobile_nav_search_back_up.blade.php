<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="DNALC"><img src="{{ asset('assets/images/dna/logo.png') }}" width="155" alt="labiox"></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:{{ $aboutInfo['email'] }}">{{ $aboutInfo['email'] }}</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:{{ $aboutInfo['phone'] }}">{{ $aboutInfo['phone'] }}</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="{{ $aboutInfo['twitter'] }}"> <i class="fab fa-twitter" aria-hidden="true"></i> <span class="sr-only">Twitter</span> </a>
            <a href="{{ $aboutInfo['facebook'] }}"> <i class="fab fa-facebook-f" aria-hidden="true"></i> <span class="sr-only">Facebook</span> </a>
            <a href="{{ $aboutInfo['linkedin'] }}"> <i class="fab fa-linkedin" aria-hidden="true"></i> <span class="sr-only">LinkdIn</span></a>
            <a href="{{ $aboutInfo['instagram'] }}"> <i class="fab fa-instagram" aria-hidden="true"></i> <span class="sr-only">Instagram</span></a>
        </div><!-- /.mobile-nav__social -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here...">
            <button type="submit" aria-label="search submit" class="laboix-btn laboix-btn--submite">
                <span><i class="icon-search"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>
