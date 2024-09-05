@extends('layouts.dna')

@section('content')


<!-- About Us Start -->
<div id="rs-about-2" class="rs-about-2 sec-spacer">
    <div class="container">
        <div class="row rs-vertical-bottom">
            <div class="col-lg-7 col-md-12">
                <div class="sec-title mb-30">
                    <h2>Introduction to the DNA Science City, Nigeria.</h2>

                    <p>The DNALC Nigeria Science City is a premier research and training institution comprising five specialized centers:</p>

                    <ul>
                        <li><a target="_blank" href="{{ route('cetras') }}">Center for Training and Advanced Studies (CeTRAS)</a></li>
                        <li><a target="_blank" href="https://cedfoci.dnalcnigeria.org/">Center for DNA Forensics & Criminal Investigation (CeDFOCI)</a></li>
                        <li><a href="#">Center for Advanced Research & Innovation (CeFARAI)</a></li>
                        <li><a href="#">Center for Science Animation & Visual Media Studios (CeSAVIMS)</a></li>
                        <li><a href="#">Center for Startup Incubation, STEM Business Innovation & Entrepreneurship (CeSISTEN)</a></li>
                    </ul>

                    <p>Located at Godfrey Okoye University in Enugu State, the Science City aims to enhance innovative approaches in criminal investigations, paternity testing, food forensics, and other areas of DNA science, alongside research, training, and visual media curation.</p>

                    {{-- <p>As an affiliate of the DNA Learning Center New York, DNALC Nigeria bridges the bioscience education gap in Africa, promoting inquiry-based learning and hands-on lab experiences. Its mission is to train the next generation of scientists to address African medical, agricultural, and environmental challenges through modern genomics and biotechnology.</p> --}}
                </div>

                <div class="mb-5">
                    <a href="#" class="btn btn-success btn-md px-5 py-3">
                        <span class="mr-2">Read More..</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>

                {{-- <div class="row about-signature">
                    <div class="col-md-6">
                        <!--
                        <h4>Rashid Mahabub Shojib</h4>
                        <span>Vice Chancellor (vc)</span>
                    -->
                        DNALC
                    </div>
                    <div class="col-md-6 text-right">
                        Established In 1988
                        <!-- <img src="newassets/images/about/signature.png" alt="signature"> -->
                    </div>
                </div> --}}


            </div>
            <div class="col-lg-5 col-md-12">
                <div class="about-img rs-image-effect-shine">
                    <img src="newassets/images/about/bg666.jpg" alt="img02">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us End -->


{{--
<!-- Courses Start -->
<div id="rs-courses" class="rs-courses sec-color sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>POPULAR COURSES</h2>
                    <p>Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="mobile-mb-50">
                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                    .
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="rs-carousel owl-carousel rs-navigation-2" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="images/courses/1.jpg" alt="" />
                            <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                            <span class="course-value">$450</span>
                        </div>
                        <div class="course-body">
                            <a href="#" class="course-category">Science</a>
                            <h4 class="course-title"><a href="courses-details.html">Electrical Engineering</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">25 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Cras ultricies lacus consectetur, consectetur
                                    scelerisque arcu curabitur
                                </p>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-time">
                                <span class="label">Course Time</span>
                                <span class="desc">3 Year</span>
                            </div>
                            <div class="course-student">
                                <span class="label">Course Student</span>
                                <span class="desc">95</span>
                            </div>
                            <div class="class-duration">
                                <span class="label">Class Duration</span>
                                <span class="desc">8:30-4:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="images/courses/2.jpg" alt="" />
                            <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                            <span class="course-value">$450</span>
                        </div>
                        <div class="course-body">
                            <a href="#" class="course-category">Science</a>
                            <h4 class="course-title"><a href="courses-details.html">Computer Engineering</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">39 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Cras ultricies lacus consectetur, consectetur
                                    scelerisque arcu curabitur
                                </p>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-time">
                                <span class="label">Course Time</span>
                                <span class="desc">4 Years</span>
                            </div>
                            <div class="course-student">
                                <span class="label">Course Student</span>
                                <span class="desc">99</span>
                            </div>
                            <div class="class-duration">
                                <span class="label">Class Duration</span>
                                <span class="desc">8:30-4:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="cource-item">
                        <div class="cource-img">
                            <img src="images/courses/3.jpg" alt="" />
                            <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                            <span class="course-value">$450</span>
                        </div>
                        <div class="course-body">
                            <a href="#" class="course-category">Science</a>
                            <h4 class="course-title"><a href="courses-details.html">Civil Engineering</a></h4>
                            <div class="review-wrap">
                                <ul class="rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star-half-empty"></li>
                                </ul>
                                <span class="review">22 Reviews</span>
                            </div>
                            <div class="course-desc">
                                <p>
                                    Cras ultricies lacus consectetur, consectetur
                                    scelerisque arcu curabitur
                                </p>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-time">
                                <span class="label">Course Time</span>
                                <span class="desc">3.5 Years</span>
                            </div>
                            <div class="course-student">
                                <span class="label">Course Student</span>
                                <span class="desc">80</span>
                            </div>
                            <div class="class-duration">
                                <span class="label">Class Duration</span>
                                <span class="desc">8:30-4:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

<!-- Counter Up Section Start-->
<div class="rs-counter pt-100 pb-70 bg3">
    <div class="container">
        <div class="sec-title white-text mb-50 text-center">
            <h2>ACHEIVEMENTS</h2>
            <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <h2 class="counter-number plus">60</h2>
                    <h4 class="counter-desc">TEACHERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <h2 class="counter-number plus">40</h2>
                    <h4 class="counter-desc">COURSES</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <h2 class="counter-number plus">900</h2>
                    <h4 class="counter-desc">STUDENTS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="rs-counter-list">
                    <h2 class="counter-number plus">3675</h2>
                    <h4 class="counter-desc">Satisfied Client</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Up Section End -->

<!-- Events Start -->
<div id="rs-events" class="rs-events sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>UPCOMING EVENTS</h2>
                    <p>Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="mobile-mb-50">
                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                    .
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="rs-carousel owl-carousel rs-navigation-2" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="event-item">
                        <div class="event-img">
                            <img src="images/events/1.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 June 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">PRACTICE WORKSHOP 2018</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>12.30AM-05.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-img">
                            <img src="images/events/2.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 April 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">CAMPUS EXAMINATION ROOM</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10.30AM-03.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="event-item">
                        <div class="event-img">
                            <img src="images/events/3.jpg" alt="" />
                            <a class="image-link" href="events-details.html" title="University Tour 2018">
                                <i class="fa fa-link"></i>
                            </a>
                        </div>
                        <div class="events-details sec-color">
                            <div class="event-date">
                                <i class="fa fa-calendar"></i>
                                <span>28 June 2017</span>
                            </div>
                            <h4 class="event-title"><a href="events-details.html">BEST GRADUATION CEREMONY</a></h4>
                            <div class="event-meta">
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10.30AM-03.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-btn">
                                <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Events End -->

<!-- Team Start -->
<div id="rs-team" class="rs-team sec-color sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>EXPERIENCED STAFFS</h2>
                    <p>Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="mobile-mb-50">
                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                    .
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="rs-carousel owl-carousel rs-navigation-2" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/1.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">ABD Rashid Khan</h3>
                                <span class="subtitle">Vice Chancellor</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">ABD Rashid Khan</a></h3>
                                    <span class="team-title">Vice Chancellor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/2.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">Luyes Figery</h3>
                                <span class="subtitle">A. Professor</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                    <span class="team-title">A. Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="images/team/3.jpg" alt="team Image" />
                            <div class="normal-text">
                                <h3 class="team-name">Mr. Mahabub Alam</h3>
                                <span class="subtitle">Assistant Professor</span>
                            </div>
                        </div>
                        <div class="team-content">
                            <div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Mr. Mahabub Alam</a></h3>
                                    <span class="team-title">Assistant Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                                    <div class="team-social">
                                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Calltoaction Start -->
<div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
    <div class="container">
        <div class="rs-cta-inner text-center">
            <div class="sec-title mb-50 text-center">
                <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>
                <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
            </div>
            <a class="cta-button" href="#">Join Now</a>
        </div>
    </div>
</div>
<!-- Calltoaction End -->

<!-- Latest News Start -->
<div id="rs-latest-news" class="rs-latest-news sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>LASTEST NEWS</h2>
                    <p>Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="mobile-mb-50">
                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                    .
                </p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-9">
                        <div class="latest-news-slider">
                            <div>
                                <div class="news-normal-block">
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/blog/1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June  28,  2017</span>
                                    </div>
                                    <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
                                    <div class="news-desc">
                                        <p>
                                            Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                        </p>
                                    </div>
                                    <div class="news-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="news-normal-block">
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/blog/5.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June  28,  2017</span>
                                    </div>
                                    <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
                                    <div class="news-desc">
                                        <p>
                                            Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                        </p>
                                    </div>
                                    <div class="news-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="news-normal-block">
                                    <div class="news-img">
                                        <a href="#">
                                            <img src="images/blog/6.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="news-date">
                                        <i class="fa fa-calendar-check-o"></i>
                                        <span>June  28,  2017</span>
                                    </div>
                                    <h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
                                    <div class="news-desc">
                                        <p>
                                            Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
                                        </p>
                                    </div>
                                    <div class="news-btn">
                                        <a href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="latest-news-nav">
                            <div><img src="images/blog/t1.jpg" alt="" /></div>
                            <div><img src="images/blog/t2.jpg" alt="" /></div>
                            <div><img src="images/blog/t3.jpg" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest News End -->

<!-- Products Start -->
<div id="rs-products" class="rs-products sec-spacer sec-color">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2>OUR PUBLICATIONS</h2>
                    <p>Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="mobile-mb-50">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.
                </p>
            </div>
            <div class="col-lg-8  col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="images/products/1.jpg" alt="" />
                            </a>
                        </div>
                        <h4 class="product-title"><a href="shop-details.html">Book Packages V2</a></h4>
                        <span class="product-price">From: $85.00</span>
                        <div class="product-btn">
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="images/products/2.jpg" alt="" />
                            </a>
                        </div>
                        <h4 class="product-title"><a href="shop-details.html">Smart Tabs X18</a></h4>
                        <span class="product-price">From: $85.00</span>
                        <div class="product-btn">
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="images/products/3.jpg" alt="" />
                            </a>
                        </div>
                        <h4 class="product-title"><a href="shop-details.html">Modern Bags L17</a></h4>
                        <span class="product-price">From: $85.00</span>
                        <div class="product-btn">
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="#">
                                <img src="images/products/4.jpg" alt="" />
                            </a>
                        </div>
                        <h4 class="product-title"><a href="shop-details.html">Internet CC Camera</a></h4>
                        <span class="product-price">From: $85.00</span>
                        <div class="product-btn">
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="view-btn">
                    <a href="#">VIEW  ALL</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

<!-- Testimonial Start -->
<div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-4 col-md-12">
                <div class="sec-title mb-30">
                    <h2 class="white-color">WHAT PEOPLE SAYS</h2>
                    <p class="white-color">Fusce sem dolor inter in efficitur faucibus.</p>
                </div>
                <p class="white-color mobile-mb-50">
                    On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized
                </p>
            </div>
            <div class="col-lg-8  col-md-12">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true">
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="images/testimonial/1.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Luise Henrikes</h4>
                            <p>
                                Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="images/testimonial/2.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Aliana D’suza</h4>
                            <p>
                                Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="images/testimonial/3.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Aliana D’suza</h4>
                            <p>
                                Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="images/testimonial/4.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Aliana D’suza</h4>
                            <p>
                                Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testi-img">
                            <img src="images/testimonial/5.jpg" alt="Jhon Smith">
                        </div>
                        <div class="testi-desc">
                            <h4 class="testi-name">Aliana D’suza</h4>
                            <p>
                                Tempor non elit nec augue nec gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Partner Start -->
<div id="rs-partner" class="rs-partner pt-70 pb-70">
    <div class="container">
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
            <div class="partner-item">
                <a href="#"><img src="images/partner/1.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/2.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/3.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/4.png" alt="Partner Image"></a>
            </div>
            <div class="partner-item">
                <a href="#"><img src="images/partner/5.png" alt="Partner Image"></a>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->

--}}




@endsection
