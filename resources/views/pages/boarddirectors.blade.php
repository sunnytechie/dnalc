@extends('layouts.app')
<title>{{ $pageTitle }}</title>
@section('content')
<style>
    .page-header {
        padding-top: 140px;
        padding-bottom: 100px;
        text-align: center;
        background-size: cover;
        background-position: center;
    }

    .staff-btn {
        background-color: #27CD3A;
        color: #FFFFFF;
        border: none;
        padding: 10px 20px;
        text-align: left;
        cursor: pointer;
        width: 100%;
        transition: 0.3s;
        border-radius: 0px;
    }

    .staff-btn:hover {
        background-color: #0C4960;
        color: #FFFFFF;
    }

    .info-card-bg {
        background-color: #031b4e;
        color: #FFFFFF;
        padding: 30px 20px;
        margin-top: 20px;
    }

    .in-page-link .active {
        background-color: #0C4960;
        color: #FFFFFF;
    }
</style>
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/dna/85.jpg') }});"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">{{ $pageTitle }}</h2>
        <ul class="nionx-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>{{ $pageLink }}</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="about-two">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="about-two__left">
                    <div class="about-two__thumb in-page-link">
                        <a href="{{ route('boarddirectors') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'boarddirectors') active @endif">The board of directors</a>

                        <a href="{{ route('adminstaff') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'adminstaff') active @endif">Administrative staff</a>

                        <a href="{{ route('teachingstaff') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'teachingstaff') active @endif">Teaching staff</a>

                        <a href="{{ route('researchstaff') }}" class="mb-3 w-100 btn staff-btn @if(Route::currentRouteName() == 'researchstaff') active @endif">research Staff</a>
                    </div>

                    <div class="info-card-bg">
                        <h4 style="color: #FFFFFF">How Can We Help?</h4>

                        <div class="mt-3">
                            <p>If you need any helps,please feel free to contact us.</p>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <div style="margin-right: 5px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                </svg>
                            </div>
                            <div>+234-806-264-4472</div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <div style="margin-right: 5px">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg>
                            </div>
                            <div>info@dnalcnigeria.org</div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="col-md-9">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">About Us</h6><!-- /.sec-title__tagline -->
                            <h3 class="sec-title__title">The Board of Directors
                            </h3><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">The Governing Board of the DNA Learning Center Nigeria will be known as the Board of Directors or the DNALC Board. The role of the Board is to ensure the Center’s long term sustainable development and growth, contributing value-adding initiatives to the science research and educational sectors, all stakeholders within an appropriate framework of governance, accounting, finance and further effective controls and policies.</p>

                        <div>
                            <h4>The Board of Directors are collectively responsible and accountable for:</h4>
                            <ol>
                                <li>Strategic direction and policies that take business risks, resources and opportunities into account
                                </li>
                                <li>The framework of control and accountability systems and reporting thereon
                                </li>
                                <li>The framework for risk assessment and management
                                </li>
                                <li>The proper management of company resources to achieve corporate and business goals and objectives
                                </li>
                                <li>The financing needs of the Center
                                </li>
                                <li>Financial control, use of financial resources, acquisitions and divestures and the monitoring and reporting thereon
                                </li>
                                <li>Governance structures, policies and procedures
                                </li>
                                <li>Value creation and alignment of Stakeholder relationships
                                </li>
                            </ol>
                        </div>

                        <div>
                            <h4>The Statutory Membership of the DNALC Board is as follows and Led by:
                            </h4>
                            <ol>
                                <li>Prof. George Ude - CHAIRMAN</li>
                                <li>Representative of GOU BOT Chair - MEMBER</li>
                                <li>Representative of GOU VC - MEMBER</li>
                                <li>Representative of The Federal Ministry of Education - MEMBER</li>
                                <li>Representative of The State Ministry of Education - MEMBER</li>
                                <li>Representative of DNALC, New York - MEMBER</li>
                                <li>Representative of IITA, Nigeria - MEMBER</li>
                                <li>Representative of NABDA, Nigeria - MEMBER</li>
                                <li>Representative of a youth NGO - MEMBER</li>
                                <li>Legal Adviser, DNALC Nigeria - MEMBER</li>
                                <li>Ass. Director, DNALC Nigeria  - SECRETARY</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-two__shape">
        <img src="{{ asset('assets/images/shapes/about-shape-2-1.png') }}" alt>
    </div>
</section>


@endsection
