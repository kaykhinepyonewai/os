@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="d-inline-block py-3">Order List (Table)</h2>
		<a href="{{route('items.create')}}" class="btn btn-success float-right my-3">Add Item</a>
		
			<table class="table">
				<thead>
					<tr>
					<th>No.</th>
				{{-- 	<th>Voucher NO</th> --}}
					<th>Name:</th>
					<th>Price:</th>
					<th>Qualtity:</th>
					<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php
						$i=1;
					@endphp
					@foreach($items as $item)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$item->name}}
							{{-- <a href="{{route('items.show',$item->id)}}">
							<span class="badge badge-primary badge-pill">More</span>
							</a> --}}
							{{-- <a href="#" class="box" data-target="#mymodal"  data-toggle="modal" data-name="{{$item->name}}" data-photo="{{asset($order->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}">
							<span class="badge badge-primary badge-pill">Model</span>
							</a> --}}

						</td>
						{{-- <td>{{$item->orderdate}}</td> --}}
						<td>{{$item->price}}</td>
						{{-- <td>{{$item->orders->order_detail->qty}}</td> --}}

					{{-- 	<td>{{$item->pivot->order_detail}}</td> --}}
					{{-- 		<td>{{$item->total}}</td> --}}
						<td>
							{{-- <a href="{{route('orders.update',$order->id)}}">
							<button class="btn btn-outline-success">Confirm</button>
							</a> --}}
							{{-- <form method="POST" action="{{route('orders.update',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('PUT')
								<input type="hidden" name="status" value="1">
								<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-dark">
							</form>


							<a href="{{route('orders.show',$order->id)}}">
							<button class="btn btn-outline-success">Detail</button>
							</a> --}}
							
					</tr>
					@endforeach
				</tbody>
			</table>
		
	</div>

@endsection