@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	

<h2 class="text-center py-3">SubCategory Edit (Form)</h2>
</div>

<div class="container">
	<div class="row">
		<div class="col-offset-2 col-md-3">
		</div>
		<div class="col-md-5">

			
{{-- {{dd(config('auth.defaults')guard['guard'])}} --}}

			<form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				
				<div class="form-group">

					<label for="name">Name:</label>
					<input type="text" id="name" value="{{$subcategory->name}}"  name="name" class="form-control {{ $errors->first('name') ? 'border-danger' : '' }}">
					@error('name')
					
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>



				<div class="form-group ">
					<label for="subcat" >Category:</label>
					<select name="subcat" id="subcat" class="form-control form-check col-md-9">
						<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}"
							@if($category->id == $subcategory->category_id)
							{{'selected'}}
							@endif
							>{{$category->name}}</option>
						@endforeach
						</optgroup>
					</select>
				</div>
				
				
				
				
				<button type="submit" class="btn btn-outline-primary">Update Brands</button>

			</form>
</div>
</div>
</div>




@endsection