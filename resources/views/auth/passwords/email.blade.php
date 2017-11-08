@extends('master')

@section('content')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            {{--  <div class="col-md-7">
                <h1>New account / Sign in</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li>New account / Sign in</li>
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
                    <h2 class="text-uppercase">Reset Password</h2>

                    {{--  <p class="lead">Not our registered customer yet ?</p>  --}}
                    {{--  <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                    <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>  --}}

                    <hr>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-template-main">Send Password Reset Link</button>
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
