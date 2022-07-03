@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/login.css">

<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            @if (session()->has('ChangePass'))
            <div style="text-align:center;" class="alert alert-success">{{ session('ChangePass') }}</div>
            @endif
            
            <div class="col-lg-12 login-title">
                تسجيل دخول
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">رقم الهاتف</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">كلمة المرور</label>

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-success">
                                    {{ __('دخول') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-primary" style="margin-left: 20px"  onclick="window.location.href='/register'">إنشاء حساب!</button>    

                </div>
                <a class="btn btn-link" style="color: aliceblue" href="\forgot">
                    {{ __('نسيت كلمة المرور؟ ') }}
                </a>

            </div>

            <div  class="col-lg-3 col-md-2"></div>
        </div>
    </div>
    
</div>



@endsection

