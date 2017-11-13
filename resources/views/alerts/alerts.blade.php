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
@endif