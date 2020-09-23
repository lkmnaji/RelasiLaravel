@extends('layouts.app')

@section('content')
<body class="bg-login" style="background-image: url(./img/login.jpg);">
    
    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card cd-login">
                    <div class="text-center"><strong id="p1-login">{{ __('Login Admin  Aji Corporation') }}</strong></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="silahkan isi alamat email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="current-password" placeholder="silahkan isi password email">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <div class="row" >
                                        <p style="text-align: center">Not a Member ?<span>&nbsp;<a href="{{ route('register') }}">Register</a></span></p><br>
                                    </div>
                                    <div class="row">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
