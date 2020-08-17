@extends('frontendtemplate')
@section('sidebar')

  @include ('frontend.sidebar')


@endsection
@section('content')

<div class="col-lg-9">
	<h2 class="py-5">Item Page Filter By Category Name </h2>


 {{-- {
 	 --}}
{{-- <div class="row">
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
                
                <a href="" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" class="btn btn-info addTo1">Add To Cart</a>
                
                <a href="{{route('detailpage',$item->id)}}" class="btn btn-dark">Detail</a>
              </div>
            </div>
          </div>
          @endforeach
         

        </div>
     --}}

  <div id="myItems" class="row">




   </div>



</div>





@endsection


@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>


    {{-- Ajax --}}


    <script type="text/javascript">
      $(document).ready(function()
      {


        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });


        showItems(0);

        function showItems(id)
        {
          $.post("{{route('getitems')}}",{sid:id},function(res)
        {
            // console.log(res);
            var html = '';
            $.each(res,function(i,v)
            {
                var url= 'detailpage/'+v.id;
                html +=`

                
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <a href="#"><img class="card-img-top img-fluid d-block" src="${v.photo}" alt="" style="width: 300px; height: 300px"></a>
                <div class="card-body">
                <h4 class="card-title">
                <a href="#">${v.name}</a>
                </h4>
                <h5>${v.price}</h5>
                <p class="card-text">${v.description}</p>
                </div>
                <div class="card-footer">
                
                <a href="" data-id="${v.id}" data-name="${v.name}" data-photo="${v.photo}" data-price="${v.price}" data-discount="${v.discount}" class="btn btn-info addTo1">Add To Cart</a>
                
                <a href="${url}" class="btn btn-dark">Detail</a>
                </div>
                </div>
        </div>
                `
            })

            $('#myItems').html(html);

        })
        }


        $('.filter').click(function()
        {
          var id = $(this).data('id');
          showItems(id);
        })
        
      })
    </script>

@endsection




