@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2 class="text-center">Item Create (Form)</h2>
</div>
<div class="container">
	<div class="row">
		<div class="col-offset-2 col-md-3">
		</div>
		<div class="col-md-5">

			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			


			<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
				@csrf
				
				<div class="form-group">
					<label for="code">CodeNo:</label>
					<input type="text" id="code"  name="codeno" class="form-control">
				</div>
				<div class="form-group">

					<label for="name">Name:</label>
					<input type="text" id="name"  name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="discount">Discount:</label>
					<input type="number" id="discount"  name="discount" class="form-control">
				</div>
				<div class="form-group">
					<label for="discount">Price:</label>
					<input type="number" id="price"  name="price" class="form-control">
				</div>
				<div class="form-group">
					<label for="image">Photo:</label>
					<input type="file" name="photo" class="form-control-file">
				</div>
				<div class="form-group">
					<label for="brand">Brand:</label>
					<select name="brand" id="brand" class="form-control form-check">
						<optgroup label="Choose Brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<label for="subcate">SubCategory:</label>
					<select name="subcategory" id="subcate" class="form-control form-check">
						<optgroup label="Choose SubCategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						@endforeach
						</optgroup>

					</select>
				</div>
				<div class="form-group">
					<label for="des">Description:</label><br>
					<textarea name="description" class="form-control" id="des"></textarea>
				</div>

				<button type="submit" class="btn btn-outline-primary">Add Item</button>

			</form>
</div>
</div>
</div>

@endsection