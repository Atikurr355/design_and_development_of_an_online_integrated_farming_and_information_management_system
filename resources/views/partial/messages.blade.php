@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert mt-2 text-center alert-danger">
	{{$error}}
</div>
@endforeach
@endif

@if(session('success'))
<div class="container">
<div class="alert mt-2 text-center alert-success">
	{{session('success')}}
</div>
</div>
@endif

@if(session('error'))
<dov class="container">
<div class="alert mt-2 text-center alert-danger">
	{{session('error')}}
</div>
</dov>
@endif
