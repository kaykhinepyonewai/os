@extends('frontendtemplate')
@section('content')

<div class="col-lg-9">
	<h2 class="py-5">Item Page Filter By Brand and SubCategory</h2>


 {{--  <div class="col-lg-6 col-md-6 col-sm-12 pt-5  img-fluid  w-100"> --}}
 			<div class="carousel slide pb-5" {{-- data-interval="2000" --}} data-ride="carousel">
 				<div class="carousel-inner">
 					<div class="carousel-item active flu">
 						<!--    <h1 class="text-center">Shopping With me</h1> -->
 						<img src="{{asset('backend/itemimg/1597224067.jpeg')}}" class="img-fluid w-100" style="height: 500px">
 					</div>
 					<div class="carousel-item">
 						<img src="{{asset('backend/itemimg/1597292185.jpeg')}}" class="img-fluid w-100" style="height: 500px">
 					</div>
 					<div class="carousel-item">
 						<img src="{{asset('backend/itemimg/1597288976.jpeg')}}" class="d-block w-100 ">
 					</div>
 				</div>

 			</div>

 	




<div class="row">
        @foreach($items as $item)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-fluid d-block" src="{{asset($item->photo)}}" alt="" style="width: 300px; height: 300px"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$item->name}}</a>
                </h4>
                <h5>{{$item->price}}</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                {{-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> --}}
                <a href="" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" class="btn btn-info addTo1">Add To Cart</a>
                
                <a href="{{route('detailpage',$item->id)}}" class="btn btn-dark">Detail</a>
              </div>
            </div>
          </div>
          @endforeach
         

        </div>
       </div>


@endsection


@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection