@extends('layouts.auth.app')

@section('content')

<section id="signup">
    <div class="container">
        <div class="card my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 loginImageUpper my-auto">
                        <h2 class="text-center my-4">Login</h2>
                        <div class="d-block d-sm-none">
                            <img
                            src="{{ asset('assets/img/login.png') }}"
                            style="width: 90%; height: auto"
                            id="loginImage"
                            alt="Login image"
                            />
                        </div>

                        <form class="ml-2" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-4 mx-md-2">
                                <div class="col-md-1">
                                    <i class="fas fa-envelope fa-lg mt-3 d-none d-md-block"></i>
                                </div>
                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4 mx-md-2">
                                <div class="col-md-1">
                                    <i class="fas fa-lock fa-lg mt-3 d-none d-md-block"></i>
                                </div>
                                <div class="col-md-10">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                                <button type="submit" class="btn btn-primary btn-md">
                                    {{ __('Login') }}
                                </button>

                                <a href="/register" class="btn btn-link">Don't have an account?</a>
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/img/login.png') }}" style="width: 90%; height: auto" class="d-none d-md-block" id="loginImage" alt="Login image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
