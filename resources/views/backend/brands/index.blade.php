@extends('backendtemplate')
@section('content')

<div class="container-fluid">
		<h2 class="d-inline-block py-3">Brands List (Table)</h2>
		<a href="{{route('brands.create')}}" class="btn btn-success float-right my-3">Add Brand</a>

		<table class="table">
			<thead>
					<tr>
					<th>No.</th>
					<th>Name:</th>
					<th>Photo:</th>
					<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Brand One
							<a href="{{route('brands.show',1)}}">
							<span class="badge badge-primary badge-pill">More</span>
							</a>
						</td>
						<td><img src="{{asset('backend\brandimg\c982e050add3b2367f4f25fb35c718fd.jpg')}}" class="w-25 h-25"></td>
						<td>
							<a href="{{route('brands.edit',1)}}">
							<button class="btn btn-outline-success">Edit</button>
							</a>
							
							<button class="btn btn-outline-secondary">Delete</button>
						
					</tr>
				</tbody>
			
		</table>

</div>





@endsection