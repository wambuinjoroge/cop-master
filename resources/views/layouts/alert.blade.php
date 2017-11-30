@if(Session::has('danger'))
<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <p class="alert">{{ Session::get('danger') }}</p>
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <p class="alert">{{ Session::get('success') }}</p>
</div>
@endif


@if(Session::has('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <p class="alert">{{ Session::get('error') }}</p>
    </div>
@endif