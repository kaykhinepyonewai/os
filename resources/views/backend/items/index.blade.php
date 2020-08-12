@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="d-inline-block py-3">Item List (Table)</h2>
		<a href="{{route('items.create')}}" class="btn btn-success float-right my-3">Add Item</a>
		
			<table class="table">
				<thead>
					<tr>
					<th>No.</th>
					<th>Codeno</th>
					<th>Name:</th>
					<th>Price:</th>
					<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>001
							<a href="{{route('items.show',1)}}">
							<span class="badge badge-primary badge-pill">More</span>
							</a>
						</td>
						<td>Item One</td>
						<td>Price</td>
						<td>
							<a href="{{route('items.edit',1)}}">
							<button class="btn btn-outline-success">Edit</button>
							</a>
							<button class="btn btn-outline-secondary">Delete</button></td>
					</tr>
				</tbody>
			</table>
		
	</div>

@endsection