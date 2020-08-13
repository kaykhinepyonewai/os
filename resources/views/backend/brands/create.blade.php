@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	

<h2 class="text-center py-3">Brand Create (Form)</h2>
</div>

<div class="container">
	<div class="row">
		<div class="col-offset-2 col-md-3">
		</div>
		<div class="col-md-5">

			{{-- @if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif --}}

			


			<form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">

					<label for="name">Name:</label>
					<input type="text" id="name"  name="name" class="form-control {{ $errors->first('name') ? 'border-danger' : '' }}">
					@error('name')
					
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
				</div>
				
				
				<div class="form-group">
					<label for="image">Photo:</label>
					<input type="file" name="photo" class="form-control-file {{ $errors->first('photo') ? 'border border-danger' : '' }}">
					@error('photo')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					
				</div>
				
				<button type="submit" class="btn btn-outline-primary">Add Brands</button>

			</form>
</div>
</div>
</div>




@endsection