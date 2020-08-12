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
			<tr>
				<td>1</td>
				<td>Category One
					<a href="{{route('categories.show',1)}}">
						<span class="badge badge-primary badge-pill">More</span>
					</a>
				</td>
				<td>
					<img src="{{asset('backend/categoryimg/9c90d24c01678aa61754cfdc3c124eed.jpg')}}" class="w-25 h-25">
				</td>
				<td>
					<a href="{{route('categories.edit',1)}}">
						<button class="btn btn-danger">Edit</button>
					</a>
					<button class="btn btn-dark">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>







@endsection