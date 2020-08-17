@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	

<h2 class="text-center py-3">Category Edit (Form)</h2>
</div>

<div class="container">
	<div class="row">
		<div class="col-offset-2 col-md-3">
		</div>
		<div class="col-md-5">

			


			<form method="POST" action="{{route('categories.update',$categories->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				
				<div class="form-group">

					<label for="name">Name:</label>
					<input type="text" id="name" value="{{$categories->name}}"  name="name" class="form-control {{ $errors->first('name') ? 'border-danger' : '' }}">
					@error('name')
					
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>
				
				
				<div class="form-group">
					<label for="image">Photo:</label>
					<input type="file" value="" name="photo" class="form-control-file pb-3">
					<img src="{{asset($categories->photo)}}" style="width: 150px; height: 150px;">
					<input type="hidden" name="oldphoto" value="{{$categories->photo}}">
				</div>
				
				<button type="submit" class="btn btn-outline-primary">Update Categories</button>

			</form>
</div>
</div>
</div>




@endsection