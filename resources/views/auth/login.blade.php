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
                            <h3 class="login-page__wrap__title">Login</h3>
                            <form class="login-page__form" method="POST" action="{{ route('login') }}">
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

                                <div class="login-page__checked-box">
                                    <div class="login-page__checked-inner">
                                        <input
                                        type="checkbox"
                                        name="remember"
                                        id="remember_me">

                                        <label for="remember_me"><span></span>Remember me?</label>
                                    </div>

                                    <div class="login-page__form-forgot-password">
                                        <a href="{{ route('password.request') }}" class="login-page__form-forgot-password__item">Forget password?</a>
                                    </div>
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
