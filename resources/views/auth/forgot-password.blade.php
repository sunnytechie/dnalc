<x-guest-layout>

        <!-- Login Start -->
        <section class="login-page">
            <div class="container">
                <div class="login-page__info  wow fadeInUp" data-wow-delay='500ms'>
                    @if (session('status'))
                        <p class="alert alert-danger alert-block">
                            <strong> {{ sesion('status') }} </strong>
                        </p>
                        @else
                        <p class="login-page__info__item">Welcome to DNA Learning center. <span>Don't Have an Account?</span> <a href="{{ route('register') }}">Register</a></p>
                    @endif
                </div><!-- login-info -->
                    <div class="row">
                        <div class="col-lg-6 offset-md-3 login-page__inner wow fadeInUp animated" data-wow-delay="300ms">
                            <div class="login-page__wrap">
                                <h3 class="login-page__wrap__title">Reset Password</h3>
                                <form class="login-page__form" method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="login-page__form-input-box">
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




                                    <div class="login-page__form-btn-box">
                                        <button type="submit" class="laboix-btn laboix-btn--secondary"><span>Request reset link</span></button>
                                    </div>
                                </form>

                            </div><!-- login-form -->
                        </div>
                    </div>
            </div>
        </section>
        <!-- Login End -->
    </x-guest-layout>
