@extends('backendtemplate')
@section('content')

	<div class="container-fluid">
		<h2 class=" py-3 text-center">Order List (Table)</h2>
		{{-- <a href="{{route('items.create')}}" class="btn btn-success float-right my-3">Add Item</a> --}}
		
			<table class="table">
				<thead>
					<tr>
					<th>No.</th>
					<th>Voucher NO</th>
					<th>Order Date:</th>
					<th>Description:</th>
					<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php
						$i=1;
					@endphp
					@foreach($orders as $order)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$order->voucherno}}
							

						</td>
						<td>{{$order->orderdate}}</td>
						<td>{{$order->note}}</td>
							<td>{{$order->total}}</td>
						<td>
							
							<form method="POST" action="{{route('orders.update',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('PUT')
								<input type="hidden" name="status" value="1">
								<input type="submit" name="btnsubmit" value="Confirm" class="btn btn-dark">
							</form>


							<a href="{{route('orders.show',$order->id)}}">
							<button class="btn btn-outline-success">Detail</button>
							</a>
							
					</tr>
					@endforeach
				</tbody>
			</table>
		
	</div>

@endsection