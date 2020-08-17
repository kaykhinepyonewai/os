@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block py-3">SubCategories List</h2>
	<a href="{{route('subcategories.create')}}" class="btn btn-dark float-right my-3">Add Category</a>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name.</th>
				<th>Category Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php
			$i=1;
			@endphp
				@foreach($subcategories as $subcategory)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$subcategory->name}}
					<a href="{{route('subcategories.show',$subcategory->id)}}">
						<span class="badge badge-primary badge-pill">More</span>
					</a>
				</td>
				<td>
					{{-- @foreach($category as $category) --}}
					{{$subcategory->category->name}}
					{{-- @endforeach
 --}}
				</td>
				<td>
					<a href="{{route('subcategories.edit',$subcategory->id)}}">
						<button class="btn btn-danger">Edit</button>
					</a>
					<button class="btn btn-dark">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>







@endsection