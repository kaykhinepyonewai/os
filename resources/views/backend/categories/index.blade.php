@extends('backendtemplate')
@section('content')

<div class="container-fluid">
	<h2 class="d-inline-block py-3">Categories List</h2>
	<a href="{{route('categories.create')}}" class="btn btn-dark float-right my-3">Add Category</a>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name.</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
				@php
					$i=1;
				@endphp
				@foreach($categories as $category)
				<tr>
				<td>{{$i++}}</td>
				<td>{{$category->name}}
					<a href="{{route('categories.show',$category->id)}}">
						<span class="badge badge-primary badge-pill">More</span>
					</a>
				</td>
				<td>
					<img src="{{asset($category->photo)}}" class="w-25 h-25">
				</td>
				<td>
					<a href="{{route('categories.edit',$category->id)}}">
						<button class="btn btn-danger">Edit</button>
					</a>
					<form method="POST" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" value="Delete" class="btn btn-dark btn-sm">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>







@endsection