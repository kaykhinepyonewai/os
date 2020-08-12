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
			<tr>
				<td>1</td>
				<td>SubCategory One
					<a href="{{route('subcategories.show',1)}}">
						<span class="badge badge-primary badge-pill">More</span>
					</a>
				</td>
				<td>
					Category One
				</td>
				<td>
					<a href="{{route('subcategories.edit',1)}}">
						<button class="btn btn-danger">Edit</button>
					</a>
					<button class="btn btn-dark">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>
</div>







@endsection