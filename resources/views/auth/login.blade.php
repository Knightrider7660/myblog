@extends('layouts.admin.app')

@section('content')

    <!-- Advanced login -->
    <form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                <div class="form-control-feedback">
                    <i class="icon-envelop text-muted"></i>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password" required>
                <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group login-options">
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox-inline">
                            <input type="checkbox" class="styled" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember
                        </label>
                    </div>

                    <div class="col-sm-6 text-right">
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
            <a href="{{ route('register') }}" class="btn btn-default btn-block content-group">Sign up</a>
            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
        </div>
    </form>
    <!-- /advanced login -->

@endsection
