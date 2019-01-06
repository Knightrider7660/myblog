@extends('layouts.admin.app')

@section('content')

    <!-- Advanced login -->
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="panel panel-body login-form">
            <div class="text-center">
                <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
            </div>

            <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" placeholder="User Name" name="name" value="{{ old('name') }}" required autofocus>
                <div class="form-control-feedback">
                    <i class="icon-user-check text-muted"></i>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Your email" name="email" value="{{ old('email') }}" required>
                <div class="form-control-feedback">
                    <i class="icon-mention text-muted"></i>
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Create password" name="password" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback has-feedback-left">
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                <div class="form-control-feedback">
                    <i class="icon-user-lock text-muted"></i>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
            </div>

            <div class="content-divider text-muted form-group"><span>Allready have an account?</span></div>
            <a href="{{ route('login') }}" class="btn btn-default btn-block content-group">Sign in</a>

        </div>
    </form>
    <!-- /advanced login -->


@endsection
