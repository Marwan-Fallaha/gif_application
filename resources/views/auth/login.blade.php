<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name') }}</title>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Tajawal" rel="stylesheet">
        <link href="{{ asset("css/login.css") }}" type="text/css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class=" {{ \Cookie::get('displayType') ?? ''}}" style="font-family: 'Comfortaa', 'Tajawal' !important">
        <div id="back">
            <canvas id="canvas" class="canvas-back"></canvas>
            <div class="backRight">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ config('app.name') }}</h2>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="backLeft">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ config('app.name') }}</h2>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
        <div id="slideBox">
            <div class="topLayer">
            <div class="left">
                <div class="content">
                    <h2>{{ __('app.SIGN_UP') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-element form-stack">
                    <label for="name" class="form-label">{{ __('app.NAME') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-element form-stack">
                        <label for="email-signup" class="form-label">{{ __('app.EMAIL') }}</label>
                    <input id="email-signup" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-element form-stack">
                    <label for="password-signup" class="form-label">{{ __('app.PASSWORD') }}</label>
                    <input id="password-signup" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-element form-stack">
                        <label for="password-confirm" class="form-label">{{ __('app.CONFIRM_PASSWORD') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-element form-submit">
                    <button id="signUp" class="signup" type="submit" name="signup">{{ __('app.SIGN_UP') }}</button>
                    <div class="movePageDiv">
                            <span class="loginColor">{{ __('app.ALREADY_HAVE_ACCOUNT?') }}</span>
                            <button id="goLeft" type="button" class="signup off">{{ __('app.LOGIN') }}</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="right">
                <div class="content">
                <h2>{{ __('app.LOGIN') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-element form-stack">
                    <label for="email-login" class="form-label">{{ __('app.EMAIL') }}</label>
                    <input id="email-login" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-element form-stack">
                    <label for="password-login" class="form-label">{{ __('app.PASSWORD') }}</label>
                    <input id="password-login" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-element form-submit">
                        <button id="logIn" class="login" type="submit" name="login">{{ __('app.LOGIN') }}</button>
                        <div class="movePageDiv">
                            <span class="signupSpan">{{ __('app.DONT_HAVE_ACCOUNT?') }}</span>
                            <button id="goRight" type="button" class="login off" name="signup">{{ __('app.SIGN_UP') }}</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        <script src="{{ asset("lib/jquery/jquery.min.js") }}"></script>
        <script src="{{ asset("js/login.js") }}"></script>
    </body>
</html>
