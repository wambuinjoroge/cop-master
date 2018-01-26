

@extends('admin.panel')

@section('content-header')
	 <h1>
        USER MANAGEMENT
        <small>ecp</small>
    </h1>
@endsection

@include('layouts.alert')

@section('content')

<div class="container">
	<div class="row">

    	@include('layouts.alert')
		
		<div class="col-sm-12 col-md-6 col-md-offset-3">
			<form role="form" action="" method="POST">
			{{ csrf_field() }}

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
		     <div class="form-group">
                      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                      </div>
                        @if ($errors->first('password'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password')}} </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="inputConfirmPassword" name="password_confirmation" placeholder="Repeat Password" required>
                        </div>
                        @if ($errors->first('password_confirmation'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('password_confirmation')}}  </strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				         <label for="role">Role: </label>
					        <select name="role" title="Select Role">
					        	<option value="{{old('role')}}">Admin</option>
					        	<option value="{{old('role')}}">Agent</option>
					        	<option value="{{old('role')}}">Authority</option>
					        	<option value="{{old('role')}}">Clerk</option>
					        	<option value="{{old('role')}}">Finance</option>
					        	<option value="{{old('role')}}">Probation</option>
					        </select>
					            @if ($errors->has('first_name'))
					                <span class="help-block">
					                    <strong>{{ $errors->first('first_name') }}</strong>
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
			          <div class="box">
			                <div class="box-header">
			                  <h3 class="box-title">Users List</h3>
			                </div><!-- /.box-header -->
			                <div class="box-body">
			                  <table id="userstable" class="table table-bordered table-striped table-responsive">
			                    <thead>
			                      <tr>
			                        <th>ID</th>
			                        <th>EMAIL</th>
			                        <th>NAME</th>
			                        <th>ROLE</th>
			                        <th>STATUS</th>
			                        <th>ACTION</th>
			                      </tr>
			                    </thead>
			                    <tbody>
			                      
			                    </tbody>
			                    <tfoot>
			                     
			                    </tfoot>
			                  </table>
			                </div><!-- /.box-body -->
			              </div><!-- /.box -->
			    </div><!-- row -->
</div>

@endsection

@section('js')
<script src="{{ asset('assets/js/userspage.js') }}"></script>
@endsection