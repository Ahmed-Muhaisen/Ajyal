@extends('front.master')

@section('title', 'Homepage | '. env('APP_NAME'))

@section('content')

<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="page-header-content">
              <h1>Login</h1>
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a href="#">Home</a>
                </li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item">
                    Login
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </section>



  <main class="site-main page-wrapper woocommerce single single-product">
      <section class="space-3">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <div class="woocommerce-notices-wrapper"></div>
                      <h2 class="font-weight-bold mb-4">Login</h2>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label for="email"> email address </label>
                              <input id="email" type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control @error('email')is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </p>
                          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label for="password">Password</label>
                              <input id="password" type="password" class="woocommerce-Input woocommerce-Input--text input-text form-control @error('password')is-invalid @enderror" name="password"  required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </p>
                          <p class="form-row">
                              <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="a414dce984"><input type="hidden" name="_wp_http_referer" value="/my-account/">



                              <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                              <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                  <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>

                                </label>
                          </p>
                          <p class="woocommerce-LostPassword lost_password">
                              <a href="#">Lost your password?</a>
                          </p>
                      </form>
                  </div>
                  <div class="col-md-6">
                      <h2 class="font-weight-bold mb-4">Register</h2>
                      <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label>User Name</label>
                              <input type="text" id="name" class="woocommerce-Input woocommerce-Input--text input-text form-control @error('name')is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('user-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </p>
                          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label>Email address</label>
                              <input type="email" id="email" class="woocommerce-Input woocommerce-Input--text input-text form-control @error('email')is-invalid @enderror" name="email" id="" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </p>
                          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                              <label>Password</label>
                              <input type="password" id="password" class="woocommerce-Input woocommerce-Input--text input-text form-control @error('password')is-invalid @enderror" name="password"  required autocomplete="password" autofocus>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </p>
                          <p class="woocommerce-FormRow form-row">
                              <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="b1c661ab82"><input type="hidden" name="_wp_http_referer" value="/my-account/">



                              <button type="submit" class="woocommerce-Button button" name="register" value="Register">Register</button>
                          </p>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!--shop category end-->
  </main>

@stop
