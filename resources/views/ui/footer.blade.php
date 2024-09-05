<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            No1. Ugwuomu Nike<br>
                            Enugu State, Nigeria
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            {{ $aboutInfo['phone'] ?? '' }}<br>
                            {{ $aboutInfo['phone_2'] ?? '' }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            {{ $aboutInfo['email'] ?? '' }}<br>
                            {{ $aboutInfo['email_2'] ?? '' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="{{ asset('assets/images/dna/logo.png') }}" alt="Footer Logo">
                        <p>{!! \Illuminate\Support\Str::limit($aboutInfo['description'], 400) !!}</p>
                        <p class="margin-remove">DNA Learning center, Science City, Nigeria</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">RECENT POSTS</h5>
                    <div class="recent-post-widget">
                        @foreach ($footerposts as $post)
                        <div class="post-item mb-2">
                            <div class="post-date">
                                <span>{{ $post->created_at->format('j') }}</span>
                                <span>{{ $post->created_at->format('M') }}</span>
                            </div>
                            <div class="post-desc">
                                <h5 class="post-title"><a href="{{ route('blog.post', [$post->id]) }}">{{ Str::limit($post->title, 20) }}</a></h5>
                                <span class="post-category">{{ $post->postcategory->title }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li ><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact us</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Faq</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Events</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Latest News</a></li>
                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h3 class="footer-title">Gallery</h3>
                    <ul class="flickr-feed">
                        @foreach ($galleries as $gallery)
                        <li><a href="#"><img style="height: 50px; width:50px; object-fit:cover" height="50px" width="50px" src="{{ '/storage/' . $gallery->image }}" alt="Image"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© {{ date('Y') }} <a href="/">DNALC</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Canvas Menu start -->
<nav class="right_menu_togle">
    <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
    <div class="canvas-logo">
        <a href="index.html"><img src="newassets/images/logo-white.png" alt="logo"></a>
    </div>
    <ul class="sidebarnav_menu list-unstyled main-menu">
        <!--Home Menu Start-->
        <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="index.html">Home One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index2.html">Home Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index3.html">Home Three<span class="icon"></span></a></li>
                <li class="sub-nav active" class="sub-nav"><a href="index4.html">Home Four<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Home Menu End-->

        <!--About Menu Start-->
        <li class="menu-item-has-children"><a href="#">About Us</a>
            <ul class="list-unstyled">
                <li class="sub-nav active"><a href="index.html">About One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index2.html">About Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="index3.html">About Three<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--About Menu End-->

        <!--Pages Menu Start-->
        <li class="menu-item-has-children"><a href="#">Pages</a>
            <ul class="list-unstyled">
                <li class="sub-nav active"><a href="teachers.html">Teachers<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="teachers-without-filter.html">Teachers Without Filter<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="teachers-single.html">Teachers Single<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery.html">Gallery One<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery2.html">Gallery Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="gallery3.html">Gallery Three<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop-details.html">Shop Details<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="cart.html">Cart<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="shop.html">Shop<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="error-404.html">Error 404<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Pages Menu End-->

        <!--Courses Menu Star-->
        <li class="menu-item-has-children"><a href="#">Courses</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="courses.html">Courses<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="courses2.html">Courses Two<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="courses-details.html">Courses Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Courses Menu End-->

        <!--Events Menu Star-->
        <li class="menu-item-has-children"><a href="#">Events</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="events.html">Events<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="events-details.html">Events Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--Events Menu End-->

        <!--blog Menu Star-->
        <li class="menu-item-has-children"><a href="#">Blog</a>
            <ul class="list-unstyled">
                <li class="sub-nav"><a href="blog.html">Blog<span class="icon"></span></a></li>
                <li class="sub-nav"><a href="blog-details.html">Blog Details<span class="icon"></span></a></li>
            </ul>
        </li>
        <!--blog Menu End-->
        <li><a href="contact.html">Contact<span class="icon"></span></a></li>
    </ul>
    <div class="search-wrap">
        <label class="screen-reader-text">Search for:</label>
        <input type="search" placeholder="Search..." name="s" class="search-input" value="">
        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
    </div>
</nav>
<!-- Canvas Menu end -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
      <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="eg: Computer Technology" type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
