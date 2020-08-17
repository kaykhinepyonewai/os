@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class="d-inline-block py-3">Order Detail (Table)</h2>
		<p>Voucherno: {{$order->voucherno}}</p>
		
			<table class="table">
				<thead>
					<tr>
					<th>No.</th>
				{{-- 	<th>Voucher NO</th> --}}
					<th>Name:</th>

					<th>Price:</th>
					<th>Discount:</th>
					<th>Qualtity:</th>
					<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php
						$i=1;
					@endphp
					@foreach($order->items as $item)

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
						<td>{{$item->discount}}</td>
						{{-- <td><img src="{{asset($items->price)}}"></td> --}}
						{{-- <td>{{$item->orders->order_detail}}</td> --}}
						{{-- <td>{{$item->orders->order_detail->qty}}</td> --}}

					{{-- 	<td>{{$item->pivot->order_detail}}</td> --}}
					{{-- 		<td>{{$item->total}}</td> --}}
						<td>{{$item->pivot->qty}}</td>
						<td>{{$item->pivot->qty*$item->price}}</td>

							
					</tr>
					<tr>
						{{-- <td class="">Total</td> --}}
					</tr>
					@endforeach
				</tbody>
			</table>
		
	</div>

@endsection