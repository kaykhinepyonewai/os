@extends('frontendtemplate')

@section('content')

 <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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
                <a href="#" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" class="btn btn-info addTo1">Add To Cart</a>


                <a href="{{route('detailpage',$item->id)}}" class="btn btn-dark">Details</a>
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