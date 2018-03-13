@extends('layouts.app')


@section('title')
{{ config('app.name', 'ecp') }}
@endsection

@section('navigation')
    @include('includes.auth-navbar')
@endsection

@section('sidebar')
    @include('includes.sidebar')
@endsection

@section('content')
    <form  method="POST" action="{{route('login') }}" accept-charset="UTF-8" class="default-form" data-role="form" class="login">
        {{ csrf_field()}}
        <div class="col-md-4 col-md-offset-4 ">
            @include('alerts/alerts')
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h2>Login</h2></div>
                <div class="panel-body">
                    <div class="form-section ">


                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address</label>
                            <input class="form-control "  placeholder="Enter Email Address" name="email" type="text" id="email" value="{{ old('email') }}" required autofocus >
                            @if ($errors->has('email'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} ">
                            <label for="password">Password</label>
                            <!--div class="col-md-6 "-->
                            <input id="password" type="password" class="form-control" name="password" required placeholder="Enter Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                        <!--/div-->
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                        <br>


                    </div>
                    <div class="form-submit-section">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                    </div>
                    <br>
                    <div class="form-group ">
                        <div class="pull-left">
                            <b>New Member ?  <a href="/register">Register</a></b>
                        </div>
                        <div class="pull-right">
                            <b><a href="{{ route('password.request') }}" >Forgot Password</a></b>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <hr>
            <div class="wrapper" align="center">
                <div class="row-fluid">
                    <div class="span12">
                        <div id="copyright">© <?=date('Y');?> - Machini Technologies . All Rights Reserved</div>
                    </div><!--span12-->
                </div><!--row-fluid-->
            </div><!--wrapper-->
        </div>
    </form>
@endsection

@section('script')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@stop
