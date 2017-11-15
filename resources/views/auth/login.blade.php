<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="connect | share | empower">
    <meta name="author" content="machini technologies">
    <link rel="icon" type="image/png" sizes="200x200" href="assets/bootstrap/img/ecp.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'e-community police') }}</title>

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/assets/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('/assets/ionicons-2.0.1/css/ionicons.css')}}">

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/agency.min.css')}}">
   
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="margin-top: 120px"> 

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
                                 <input class="form-control "  placeholder="Enter e-mail address" name="email" type="text" id="email" value="{{ old('email') }}" required autofocus >
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jQuery -->
    <script src="assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

     <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>
         
 