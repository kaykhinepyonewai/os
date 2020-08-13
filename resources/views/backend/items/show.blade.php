@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="text-center">Item Detail</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="w-100 h-100">
			</div>
			<div class="col-md-8">
				<hr>
				<div class="row">
					<div class="col-md-4">Product Name</div>
					<div class="col-md-4">{{$item->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Code</div>
					<div class="col-md-4">{{$item->codeno}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Price</div>
					<div class="col-md-4">{{$item->price}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Descrption</div>
					<div class="col-md-4">{{$item->description}}</div>
				</div>
			</div>
		</div>
	</div>

@endsection