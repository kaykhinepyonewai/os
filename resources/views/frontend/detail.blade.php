@extends('frontendtemplate')
@section('content')

<div class="col-lg-9 py-5">
	<div class="container-fluid">
		<h2 class="text-center">Item Detail</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="w-100 h-100 photo">
			</div>
			<div class="col-md-8">
				  <input type="hidden" value="{{$item->id}}" name="" class="pid">
				<hr>
				<div class="row">
					<div class="col-md-4">Product Name</div>
					<div class="col-md-4 pname">{{$item->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Code</div>
					<div class="col-md-4">{{$item->codeno}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Price</div>
					<div class="col-md-4 pprice">{{$item->price}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Descrption</div>
					<div class="col-md-4">{{$item->description}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Brand</div>
					<div class="col-md-4">{{$item->brand->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Product Sub Category</div>
					<div class="col-md-4">{{$item->subcategory->name}}</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4">Qualtity</div>
					<div class="col-md-4">
						<button class="btn-light min">-<button id="qty" class="btn-light">1<button class="btn-light max">+</button>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4"><button class="btn-light addTo">Add To Cart</button></div>
				</div>
				
			</div>
		</div>
	</div>
</div>


@endsection


@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection