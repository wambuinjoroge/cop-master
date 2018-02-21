@extends('layouts.master')

@include('layouts.alert')

@section('content')

<div class="container">
	<div class="row">

    	@include('layouts.alert')
		
		<div class="col-sm-12 col-md-6 col-md-offset-3">
			<form role="form" action="" method="POST">
			{{ csrf_field() }}

			<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				<label for="role">Role: </label>
		        <select name="role" title="Select Role">
		        	<option value="{{old('role')}}">Admin</option>
		        	<option value="{{old('role')}}">Others</option>
		        </select>
		            @if ($errors->has('first_name'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('first_name') }}</strong>
		                </span>
		            @endif
		    </div>

		    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="email">Email Address: </label>
		        <input type="email" name="email" class="form-control uname" placeholder="Email" value="{{old('email')}}" />
		            @if ($errors->has('email'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('email') }}</strong>
		                </span>
		            @endif
		    </div>

		    <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
		    	<label for="fname">First Name: </label>
		        <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}" />
		            @if ($errors->has('first_name'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('first_name') }}</strong>
		                </span>
		            @endif
		    </div>

		    <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
		    	<label for="lname">Last Name: </label>
		        <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" />
		            @if ($errors->has('last_name'))
		                <span class="help-block">
		                    <strong>{{ $errors->first('last_name') }}</strong>
		                </span>
		            @endif
		    </div>
			
			<label for="status">Status: </label>
		    <label class="radio-inline">
		  		<input type="radio" name="status" id="active"  value="{{old('status')}}"> Active
			</label>
			<label class="radio-inline">
		  		<input type="radio" name="status" id="inactive" value="{{old('status')}}"> Inactive
			</label>

		    <button class="btn btn-success btn-block">Save</button>
		</form>
		</div>
        
    </div><!-- row -->
</div>

@stop