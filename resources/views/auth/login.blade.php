@extends('layouts.app_nguoi_mua')

@section('title')
    chodatso.com | Đăng nhập
@stop

@section('description')
    Đăng nhập tài khoản chodatso.com.
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Đăng nhập</h1>
            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">Thư điện tử</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Đăng nhập
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Quên mật khẩu?</a>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="g-signin2" data-onsuccess="onSignIn">Login</div>
                        <a href="#" onclick="signOut();">Sign out</a>
                        <script>
                            function signOut() {
                              var auth2 = gapi.auth2.getAuthInstance();
                              auth2.signOut().then(function () {
                                console.log('User signed out.');
                              });
                            }
                          </script>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection