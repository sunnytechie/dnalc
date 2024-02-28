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
                        <p class="login-page__info__item">Welcome to DNA Learning center. <span>Have an Account?</span> <a href="{{ route('login') }}">Login</a></p>
                    @endif
                </div><!-- login-info -->
                    <div class="row">
                        <div class="col-lg-6 offset-md-3 login-page__inner wow fadeInUp animated" data-wow-delay="300ms">
                            <div class="login-page__wrap">
                                <h3 class="login-page__wrap__title">Register</h3>
                                <form class="login-page__form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="login-page__form-input-box">
                                        <input
                                        type="text"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autofocus
                                        autocomplete="name"
                                        placeholder="Your name*">

                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>

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

                                    <div class="login-page__form-input-box">
                                        <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password"
                                        placeholder="Password*">

                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="login-page__form-input-box">
                                        <input
                                        id="password_confirmation"
                                        type="password"
                                        name="password_confirmation"
                                        required
                                        placeholder="Repeat Password*">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>



                                    <div class="login-page__form-btn-box">
                                        <button type="submit" class="laboix-btn laboix-btn--secondary"><span>Login</span></button>
                                    </div>
                                </form>


                            </div><!-- login-form -->
                        </div>
                    </div>
            </div>
        </section>
        <!-- Login End -->
    </x-guest-layout>
