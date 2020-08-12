@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="text-center py-3">Category Create</h2>
	<div class="row">
		<div class="offset-3 col-md-6">
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="
					form-control">
				</div>
				<div class="form-group">
					<label>Photo:</label>
					<input type="file" name="photo" class="form-control-file">
				</div>
				<button class="btn btn-dark" type="submit">Add Category</button>
			</form>
		</div>
	</div>
</div>



@endsection