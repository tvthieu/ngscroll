@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="social">
                            <h3>Đăng nhập dùng tài khoản mạng xã hội</h3>
                            <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-facebook btn-block">Đăng nhập với Facebook</a>
                            <a href="{{ url('/auth/redirect/google') }}" class="btn btn-google btn-block">Đăng nhập với Google</a>

                          </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email </label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mật khấu') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                        {{ __('Ghi nhớ') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng nhập') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    
                    </form>
                </div>
            </div>


            <div class="centered form">      

                <form class="live_form form" id="login_form" method="post" action="{{ route('login') }}"> 

                  <div class="social">
                    <h3>Đăng nhập dùng tài khoản mạng xã hội</h3>
                    <a href="{{ url('/auth/redirect/facebook') }}" class="btn btn-facebook btn-block">Đăng nhập với Facebook</a>
                    <a href="{{ url('/auth/redirect/google') }}" class="btn btn-google btn-block">Đăng nhập với Google</a>

                  </div>

                  <div class="form-group">
                    <label for="email">Email hoặc tên tài khoản  
                      <a href="{{ url('/dang-ki') }}" class="pull-right">(Tạo tài khoản)</a>
                    </label>
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="pass">Mật khẩu <a href="#forgot" class="pull-right" id="forgot-password">(Quên mật khẩu)</a></label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="password">
                  </div>
                  <p></p>
                  <div class="form-group row">
                                        <div style="padding-left: 20px">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Ghi nhớ') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                  <button type="submit" class="btn btn-primary">{{ __('Đăng Nhập') }}</button>
                </form>   
    </div>
  </div>
        </div>



    </div>
</div>
@endsection
