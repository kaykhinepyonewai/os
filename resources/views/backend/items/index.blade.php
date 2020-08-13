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
					@php
						$i=1;
					@endphp
					@foreach($items as $item)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$item->codeno}}
							<a href="{{route('items.show',$item->id)}}">
							<span class="badge badge-primary badge-pill">More</span>
							</a>
							<a href="#" class="box" data-target="#mymodal"  data-toggle="modal" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
							<span class="badge badge-primary badge-pill">Model</span>
							</a>

						</td>
						<td>{{$item->name}}</td>
						<td>{{$item->price}}</td>
						<td>
							<a href="{{route('items.edit',$item->id)}}">
							<button class="btn btn-outline-success">Edit</button>
							</a>
							<form method="POST" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" value="Delete" class="btn btn-dark">
							</form>
							
					</tr>
					@endforeach
				</tbody>
			</table>
		
	</div>


  <div class="modal fade" tabindex="-1" id="mymodal">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title home animate">Item Detail</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
             <img src="" class="img-fluid w-75 h-50">
          </div>
          <div class="col-md-7 home text-justify">
            <p>Price: <span class="pprice d-inline-block"> MMK</span></p>
        
            <p>Description:  <sapn class="pdes d-inline-block"></span></p>
            
          </div>
        </div>
       
        
      </div>
      {{-- <div class="modal-footer"> --}}
       <!--  <button type="button" class="btn btn-outline-light" >Buy Now</button> -->
      {{--   <button type="button" class="btn  text-light home addTo">ADD To Cart</button>
      </div> --}}
    </div>
  </div>
@endsection


@section('script')

<script type="text/javascript">
	
	$(document).ready(function()
	{
		$('.box').click(function()
		{
			var name = $(this).data('name');
			var photo = $(this).data('photo');
			var price = $(this).data('price');
			var desc = $(this).data('desc');

			$('.img-fluid').attr('src',photo);
			$('.pprice').text(price);
			$('.modal-title').text(name);
			$('.pdes').text(desc);



			// $('#mymodal').modal('show');
		})
	})
</script>




@endsection