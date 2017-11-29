@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
            @if(Auth::guest())
                <div class="panel-body">
                    <p>Welcome to ecp</p>
                    <a href="/login" class="btn btn-success  ">Login</a>
                </div>

            @else

                <div class="panel-heading text-center"><h4>Dashboard</h4> </div>

                    <div class="panel-body text-center">
                      <p>  Welcome  {{ Auth::user()->name  }}  
                         <small>Member Since {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Auth::user()->created_at)->format('l j F Y') }}</small>
                      </p>
                    </div>

            @endif

            </div>
            
        </div>


    </div>
</div>
@endsection