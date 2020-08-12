@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="text-center py-3">Sub Category Create</h2>
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

			<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="
					form-control">
				</div>
				<div class="form-group">
					<label>Category:</label>
					<select name="category" class="form-control form-check">
						<optgroup label="Choose Category">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<button class="btn btn-dark" type="submit">Add Category</button>
			</form>
		</div>
	</div>
</div>



@endsection