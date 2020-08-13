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
					@php
						$i=1;
					@endphp
					@foreach($brands as $brand)
					<tr>
						<td>1</td>
						<td>{{$brand->name}}
						</td>
						<td><img src="{{asset($brand->photo)}}" class="" style="width: 200px; height: 200px"></td>
						<td>
							<a href="{{route('brands.edit',$brand->id)}}">
							<button class="btn btn-outline-success">Edit</button>
							</a>
							
							<form method="POST" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" value="Delete" class="btn btn-dark">
							</form>
						
					</tr>
					@endforeach
				</tbody>
			
		</table>

</div>





@endsection