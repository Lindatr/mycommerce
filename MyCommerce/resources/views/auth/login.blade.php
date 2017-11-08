@extends('master')

@section('title', '| Login')

@section('content')

<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            {{--  <div class="col-md-7">
                <h1>LOGIN</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="/">Home</a>
                    </li>
                    <li>Login</li>
                </ul>
            </div>  --}}
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h2 class="text-uppercase">Login</h2>
                        <p class="lead">Already our customer ?</p>
                        {{--  <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                            ultricies mi vitae est. Mauris placerat eleifend leo.</p>  --}}
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label" >E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label" >Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-template-main"><i class="fa fa-sign-in"></i> Login</button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#content -->
@endsection
