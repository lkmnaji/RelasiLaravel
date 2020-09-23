@extends('layouts.app')

@section('content')
<body class="bg-login" style="background-image: url(./img/register.jpg);">
<div class="container" style="margin-top: 60px">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                
                <div class="card-body">
                    <div class="text-center"><strong id="p1-login">{{ __('Register Admin') }}</strong></div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                placeholder="silahkan isi nama anda">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email"
                                placeholder="silahkan isi alamat email">

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
                                name="password" required autocomplete="new-password"
                                placeholder="silahkan isi password anda">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" 
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="ulangi password anda">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                        </div>
                    </form>
                    <a class="nav-link text-center" href="{{ route('login') }}"><-back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
