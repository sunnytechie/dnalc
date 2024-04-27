@extends('layouts.app')


@section('scripts')
<script>
 $(document).ready(function() {
  showSection('section1');
  toggleDivs('fullscholarship');

  // Monitor changes on the select element with id 'scholarship'
  $('#scholarship').change(function() {
    toggleDivs($(this).val());
  });
});

function toggleDivs(selectedItem) {
  if(selectedItem === 'fullscholarship') {
    $('#fullScholarship').show();
    $('#partialscholarship').hide();
  } else if(selectedItem === 'partialscholarship') {
    $('#fullScholarship').hide();
    $('#partialscholarship').show();
  }
}

// Monitor changes on the select element with id 'infoSource'
$('#infoSource').change(function() {
    // If the user selects 'Others', show the additional input field
    if($(this).val() === 'others') {
      $('#otherSource').show();
    } else {
      $('#otherSource').hide();
    }
  });

function showSection(section) {
  $('.section').hide();
  $('#' + section).show();
}

function nextSection(current, next) {
  // Perform validation for the current section
  if(validateSection(current)) {
    $('#' + current).hide();
    $('#' + next).show();
  } else {
    alert('Please fill out all required fields.');
  }
}

function previousSection(current, prev) {
  $('#' + current).hide();
  $('#' + prev).show();
}

function validateSection(section) {
  var isValid = true;
  $('#' + section + ' input[required]').each(function() {
    if ($(this).val() === '') {
      isValid = false;
    }
  });
  return isValid;
}
</script>

<script>
    function toggleDiv(isOffline) {
      var div = document.getElementById('offlinePaymentDiv');
      div.style.display = isOffline ? 'block' : 'none';
    }
</script>
@endsection

@section('content')
<style>
    .page-header {
        padding-top: 140px;
        padding-bottom: 100px;
        text-align: center;
        background-size: cover;
        background-position: center;
    }

    .about-two__left img {
        width: 100%;
        height: 549px;
        object-fit: cover;
    }

    .hide {
        display: none;
    }

    .nav-link {
        color: #000;
    }

    .nav-link.hover {
        color: #27CD3A;
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
            <div class="col-md-4">
                <div class="about-two__left">
                    <img src="{{ asset('storage/' . $workshop->flyer) }}" alt="{{ $workshop->title }}">
                </div>
            </div>


            <div class="col-md-8">
                <div class="about-two__right">
                    <div class="about-two__top">
                        <div class="sec-title text-start wow fadeInUp" data-wow-duration='1500ms'>
                            <h6 class="sec-title__tagline"><img src="{{ asset('assets/images/shapes/sec-title-s-1.png') }}" alt="About Us" class="sec-title__img">Workshop</h6><!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title" style="font-size: 30px">Workshop form requirement
                            </h2><!-- /.sec-title__title -->
                        </div><!-- /.sec-title -->
                        <p class="about-text">Venue: {{ $workshop->venue }}</p>
                        <div class="mb-4">Scheduled: {{ \Carbon\Carbon::parse($workshop->start_date)->format('j M Y') }} to {{ \Carbon\Carbon::parse($workshop->end_date)->format('j M Y') }}</div>

                        <div class="card">
                            <h5 class="card-title text-danger pb-2" style="font-weight: 400; font-size: 16px;">* All applicants are required to ensure that all information entered below are valid and accurate!</h5>
                            <form class="login-page__form" id="multiStepForm" action="{{ route('workshop.application.store', $workshop->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div id="section1" class="section">
                                    <h2>Section 1</h2>
                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-12">
                                            <input
                                            type="text"
                                            name="fullname"
                                            value="{{ old('fullname') }}"
                                            required
                                            autofocus
                                            autocomplete="fullname"
                                            placeholder="Your fullname Name*">

                                            @if ($errors->has('fullname'))
                                                <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-6">
                                            <input
                                            type="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                            required
                                            autofocus
                                            autocomplete="email"
                                            placeholder="Your email address*">

                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="login-page__form-input-box col-md-6">
                                            <input
                                            type="tel"
                                            name="phone"
                                            value="{{ old('phone') }}"
                                            required
                                            autofocus
                                            autocomplete="phone"
                                            placeholder="Your Mobile Number*">

                                            @if ($errors->has('phone'))
                                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-6">
                                            <select class="form-control" name="country" id="country">
                                                <option disabled selected>Country</option>
                                                <option>Nigeria</option>
                                                <option>Others</option>
                                            </select>

                                            @if ($errors->has('country'))
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                            @endif
                                        </div>

                                        <div class="login-page__form-input-box col-md-6">
                                            <input
                                            type="text"
                                            name="institution"
                                            value="{{ old('institution') }}"
                                            autofocus
                                            autocomplete="institution"
                                            placeholder="Institution or Affiliate*">

                                            @if ($errors->has('institution'))
                                                <span class="text-danger">{{ $errors->first('institution') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-12">
                                            <select class="form-control" name="infoSource" id="infoSource" required>
                                                <option disabled selected>How did you hear about us?</option>
                                                <option>Through our flyer</option>
                                                <option>Oline search engine</option>
                                                <option>Social media</option>
                                                <option>Word of mouth</option>
                                                <option value="others">Others</option>
                                            </select>

                                            @if ($errors->has('infoSource'))
                                                <span class="text-danger">{{ $errors->first('infoSource') }}</span>
                                            @endif
                                        </div>

                                        {{-- otherSource --}}
                                        <div class="login-page__form-input-box col-md-12 hide" id="otherSource">
                                            <input
                                            type="text"
                                            name="othersource"
                                            value="{{ old('otherSource') }}"
                                            placeholder="Please specify others.">

                                            @if ($errors->has('otherSource'))
                                                <span class="text-danger">{{ $errors->first('otherSource') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-12">
                                            <select class="form-control" name="scholarship" id="scholarship">
                                                <option disabled selected>Choose Scholarship</option>
                                                <option value="fullscholarship">Full Scholarship</option>
                                                <option value="partialscholarship">Partial Scholarship</option>
                                            </select>

                                            @if ($errors->has('scholarship'))
                                                <span class="text-danger">{{ $errors->first('country') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div id="fullScholarship" class="login-page__form-input-box col-md-12">
                                            <a class="btn btn-primary rounded-0 border-0" style="background: #27CD3A;" target="_blank" href="{{ asset('assets/pdf/DNALC_Scholarship_Application_Form.pdf') }}">Download Scholarship pdf</a>
                                        </div>
                                    </div>

                                    <div class="row" id="partialscholarship">
                                            <div class="login-page__form-input-box col-md-6">
                                                <input
                                                type="text"
                                                name="scholarshiprequestamount"
                                                value="{{ old('scholarshiprequestamount') }}"
                                                autofocus
                                                autocomplete="scholarshiprequestamount"
                                                placeholder="Reason for Scholarship">

                                                @if ($errors->has('scholarshiprequestamount'))
                                                    <span class="text-danger">{{ $errors->first('scholarshiprequestamount') }}</span>
                                                @endif
                                            </div>

                                            <div class="login-page__form-input-box col-md-6">
                                                <input
                                                type="text"
                                                name="scholarshipreason"
                                                value="{{ old('scholarshipreason') }}"
                                                autofocus
                                                autocomplete="scholarshipreason"
                                                placeholder="Reason for Partial Scholarship">

                                                @if ($errors->has('scholarshipreason'))
                                                    <span class="text-danger">{{ $errors->first('scholarshipreason') }}</span>
                                                @endif

                                            </div>
                                    </div>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-12">
                                            <input
                                            type="text"
                                            name="referral"
                                            value="{{ old('referral') }}"
                                            autofocus
                                            autocomplete="referral"
                                            placeholder="Referral Fullname (optional)">

                                            @if ($errors->has('referral'))
                                                <span class="text-danger">{{ $errors->first('referral') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-lg btn-primary border-0 rounded-0" onclick="nextSection('section1', 'section2')">Continue</button>
                                </div>

                                <div id="section2" class="section" style="display: none;">
                                    <h2>Section 2</h2>

                                    <div class="row">
                                        <div class="login-page__form-input-box col-md-12">
                                            <input
                                            type="text"
                                            name="role"
                                            value="{{ old('role') }}"
                                            required
                                            placeholder="Your Current role *">

                                            @if ($errors->has('role'))
                                                <span class="text-danger">{{ $errors->first('role') }}</span>
                                            @endif
                                        </div>

                                        <div class="login-page__form-input-box col-md-12">
                                            <input
                                            type="text"
                                            name="address"
                                            value="{{ old('address') }}"
                                            required
                                            placeholder="Your resident address*">

                                            @if ($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                            @endif
                                        </div>

                                        <div class="login-page__form-input-box col-md-12">
                                            <input
                                            type="text"
                                            name="area"
                                            value="{{ old('area') }}"
                                            required
                                            placeholder="Area of specialization*">

                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link p-3 active" id="first-tab" data-bs-toggle="tab" data-bs-target="#first" type="button" role="tab" aria-controls="first" aria-selected="true">Question 1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link p-3" id="second-tab" data-bs-toggle="tab" data-bs-target="#second" type="button" role="tab" aria-controls="second" aria-selected="false">Question 2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link p-3" id="third-tab" data-bs-toggle="tab" data-bs-target="#third" type="button" role="tab" aria-controls="third" aria-selected="false">Question 3</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link p-3" id="fourth-tab" data-bs-toggle="tab" data-bs-target="#fourth" type="button" role="tab" aria-controls="fourth" aria-selected="false">Question 4</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link p-3" id="fifth-tab" data-bs-toggle="tab" data-bs-target="#fifth" type="button" role="tab" aria-controls="fifth" aria-selected="false">Question 5</button>
                                                </li>
                                            </ul>

                                            <!-- Tab panes -->
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                                                    <div class="login-page__form-input-box col-md-12">
                                                        <textarea class="p-4" name="question1" id="question1" cols="30" rows="10" placeholder="What skill(s) do you need in this workshop and which skill(s) do you have?"></textarea>

                                                        @if ($errors->has('question1'))
                                                            <span class="text-danger">{{ $errors->first('question1') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="second" role="tabpanel" aria-labelledby="second-tab">
                                                    <div class="login-page__form-input-box col-md-12">
                                                        <textarea class="p-4" name="question2" id="question2" cols="30" rows="10" placeholder="Why do you want to attend this workshop?"></textarea>

                                                        @if ($errors->has('question2'))
                                                            <span class="text-danger">{{ $errors->first('question2') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="third" role="tabpanel" aria-labelledby="third-tab">
                                                    <div class="login-page__form-input-box col-md-12">
                                                        <textarea class="p-4" name="question3" id="question3" cols="30" rows="10" placeholder="Have you attended any previous molecular biology workshop(s) if yes, which one(s)?"></textarea>

                                                        @if ($errors->has('question3'))
                                                            <span class="text-danger">{{ $errors->first('question3') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="fourth" role="tabpanel" aria-labelledby="fourth-tab">
                                                    <div class="login-page__form-input-box col-md-12">
                                                        <textarea class="p-4" name="question4" id="question4" cols="30" rows="10" placeholder="Have you attended any previous workshop at GOU or DNALC Nigeria, if yes which one(s)?"></textarea>

                                                        @if ($errors->has('question4'))
                                                            <span class="text-danger">{{ $errors->first('question4') }}</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="fifth" role="tabpanel" aria-labelledby="fifth-tab">
                                                    <div class="login-page__form-input-box col-md-12">
                                                        <textarea class="p-4" name="question5" id="question5" cols="30" rows="10" placeholder="How are you funding your participation?"></textarea>

                                                        @if ($errors->has('question5'))
                                                            <span class="text-danger">{{ $errors->first('question5') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-12 d-flex">
                                            <div class="form-check">
                                                <input style="margin-top: 0.4em" type="radio" class="form-check-input" id="onlinePayment" name="paymentMethod" value="online" onclick="toggleDiv(false)">
                                                <label class="form-check-label" for="onlinePayment">Online Payment</label>
                                            </div>

                                            <div class="form-check mx-3">
                                                <input style="margin-top: 0.4em" type="radio" class="form-check-input" id="offlinePayment" name="paymentMethod" value="offline" onclick="toggleDiv(true)" checked>
                                                <label class="form-check-label" for="offlinePayment">Offline Payment</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4" id="offlinePaymentDiv">
                                        <div class="col-md-12">
                                            <h2>Evidence of Payment</h2>
                                            <button type="button" class="btn btn-info border-0 rounded-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Account details
                                            </button>
                                        </div>
                                        <div class="col-md-12 mt-4">
                                            <label for="receipt">Payment Receipt</label>
                                            <input type="file" name="receipt" class="form-control dropify">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-group">
                                                <button class="btn border-0 btn-lg rounded-0 btn-primary"  onclick="previousSection('section2', 'section1')">Previous</button>
                                                <button class="btn border-0 btn-lg rounded-0 btn-primary" type="submit" style="background: #27CD3A">Submit application</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: #031B4E">
          <h5 class="modal-title text-center text-white" id="exampleModalLabel">MAKE YOUR PAYMENT TO THE FOLLOWING ACCOUNT DETAILS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="justify-content-center text-center mb-4">
                <img style="width: 100px; height: 100px; object-fit: contain" src="{{ asset('assets/images/zenithbanklogo.png') }}" alt="">
            </div>
          <p>ACCOUNT NAME: DNA LEARNING CENTER AFRI. PRJ.</p>
          <p>ACCOUNT NUMBER: 1016283735</p>
          <p>BANK NAME: ZENITH BANK</p>
          <p>AMOUNT IN FIGURE: <strong>₦{{ number_format($workshop->fee, 2) }}</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>

@endsection
