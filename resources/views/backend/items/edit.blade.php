@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2 class="text-center pb-5 pt-2">Item Edit</h2>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="offset-1 col-md-9">

			{{-- @if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif --}}

			


			<form method="POST" action="{{route('items.update',$item->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				
				<div class="form-group row">

					<label for="code" class="col-md-2">CodeNo:</label>
					<input type="text" id="code" value="{{$item->codeno}}"  name="codeno" class="form-control col-md-9 {{ $errors->first('codeno') ? 'border-danger' : '' }}" readonly="">
					@error('codeno')
					
					<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group row">

					<label for="name" class="col-md-2">Name:</label>
					<input type="text" id="name" value="{{$item->name}}"  name="name" class="form-control col-md-9 {{ $errors->first('name') ? 'border-danger' : '' }}">
					@error('name')
					
					<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group row">
					<label for="discount" class="col-md-2">Discount:</label>
					<input type="number" id="discount" value="{{$item->discount}}"  name="discount" class="form-control col-md-9 {{ $errors->first('discount') ? 'border-danger' : ''}}">
					@error('discount')
					
					<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group row">
					<label for="discount" class="col-md-2">Price:</label>
					<input type="number" id="price" value="{{$item->price}}"  name="price" class="form-control col-md-9 {{ $errors->first('price') ? 'border-danger' : ''}}">
					@error('price')
					
					<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
					@enderror
				</div>

				<div class="form-group row">
					<label for="image" class="col-md-2">Photo:</label>
					<input type="file" name="photo" class="form-control-file col-md-9">
					<div class="col-md-2"></div>
					<img src="{{asset($item->photo)}}" style="width: 150px; height: 150px;">
					<input type="hidden" name="oldphoto" value="{{$item->photo}}">
				</div>

				<div class="form-group row">
					<label for="brand" class="col-md-2">Brand:</label>
					<select name="brand" id="brand" class="form-control form-check col-md-9">
						<optgroup label="Choose Brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}"
							@if($brand->id == $item->brand_id)
							{{'selected'}}
							@endif
							>{{$brand->name}}</option>
						@endforeach
						</optgroup>
					</select>
				</div>

				<div class="form-group row">
					<label for="subcate" class="col-md-2">SubCategory:</label>
					<select name="subcategory" id="subcate" class="form-control form-check col-md-9">
						<optgroup label="Choose SubCategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}"

							@if($subcategory->id == $item->subcategory_id)
							{{'selected'}}
							@endif

							>{{$subcategory->name}}</option>
						@endforeach
						</optgroup>

					</select>
				</div>
				
				<div class="form-group row">
					<label for="des" class="col-md-2">Description:</label><br>
					<textarea name="description" class="form-control col-md-9 {{ $errors->first('description') ? 'border-danger' : ''}}" id="des">{{$item->description}}</textarea>
					@error('description')
					
					<div class="alert alert-danger offset-2 col-md-9 form-control">{{ $message }}</div>
					@enderror
				</div>
				<div class="form-group row">
				<div class="col-md-2"></div>
				<button type="submit" value="update" class="btn btn-outline-primary">Update Item</button>
				</div>

			</form>
</div>
</div>
</div>

@endsection