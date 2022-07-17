@extends('layouts.auth.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section id="signup">
    <div class="container">
      <div class="card my-5">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-center my-4">Sign Up</h2>
              <div class="d-block d-sm-none">
                <img
                  src="{{ asset('assets/img/signup.png') }}"
                  style="width: 90%; height: auto"
                  id="signupImage"
                  alt="Signup image"
                />
              </div>

              <form class="ml-2">
                <div class="row mb-4">
                  <div class="col-md-1">
                    <i class="fas fa-user fa-lg mt-3 d-none d-md-block"></i>
                  </div>
                  <div class="col-md-5">
                    <input
                      type="text"
                      id="firstName"
                      class="form-control"
                      placeholder="First Name"
                    />
                  </div>
                  <div class="d-block d-sm-none"><br /></div>
                  <div class="col-md-5">
                    <input
                      type="text"
                      id="lastName"
                      class="form-control"
                      placeholder="Last Name"
                    />
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-1">
                    <i class="fas fa-phone fa-lg mt-3 d-none d-md-block"></i>
                  </div>
                  <div class="col-md-10">
                    <input
                      type="number"
                      id="number"
                      class="form-control"
                      placeholder="Mobile Number"
                    />
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-1">
                    <i
                      class="fas fa-envelope fa-lg mt-3 d-none d-md-block"
                    ></i>
                  </div>
                  <div class="col-md-10">
                    <input
                      type="email"
                      id="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-1"></div>
                  <div class="col-md-10 form-check">
                    <input
                      class="form-radio-input"
                      type="radio"
                      name="personType"
                      id="radioButton"
                    />
                    <b>Driver</b>

                    <input
                      class="form-radio-input ml-4"
                      type="radio"
                      name="personType"
                      id="radioButton"
                    />
                    <b>Mechanic</b>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-1">
                    <i class="fas fa-lock fa-lg mt-3 d-none d-md-block"></i>
                  </div>
                  <div class="col-md-10">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      placeholder="Password"
                    />
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-1">
                    <i class="fas fa-lock fa-lg mt-3 d-none d-md-block"></i>
                  </div>
                  <div class="col-md-10">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      placeholder="Confirm Password"
                    />
                  </div>
                </div>

                <div class="row my-4">
                  <div class="col-md-1"></div>
                  <div class="col-md-10 ml-4 form-check">
                    <input
                      class="form-check-input mt-2"
                      type="checkbox"
                      id="password"
                      class="form-control"
                      placeholder="Confirm Password"
                    />I agree all statements in
                    <a href="#!">Terms of service</a>
                  </div>
                </div>

                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <button type="button" class="btn btn-primary btn-md">
                    Register
                  </button>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <img
                src="{{ asset('assets/img/signup.png') }}"
                style="width: 90%; height: auto"
                class="d-none d-md-block"
                id="signupImage"
                alt="Signup image"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
