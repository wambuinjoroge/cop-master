@if (Session::has('verify-email'))
	<div class="alert alert-warning">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('verify-email') }}
	</div>
@elseif (Session::has('confirmed'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('confirmed') }}		
	</div>
@elseif (Session::has('change-role'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('change-role') }}		
	</div>
@elseif (Session::has('new-role'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('new-role') }}		
	</div>
@elseif (Session::has('update-role'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('update-role') }}		
	</div>
@elseif (Session::has('new-permission'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('new-permission') }}		
	</div>
@elseif (Session::has('update-permission'))
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ Session::get('update-permission') }}		
	</div>
@endif