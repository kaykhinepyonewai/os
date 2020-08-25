@extends('frontendtemplate')
@section('content')

<div class="col-lg-9">
	<h2 class="py-5">Customer Checkout Page</h2>


	      <div class="container">
            <div class="table-responsive">
              <table class="table">
                <thead class="home">
                  <tr>
                    <th>No.</th>
                    <th>Photo</th>
                    <th>Item Name:</th>
                    <th>Item Price:</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                  </tr>
                </thead>

                <tbody id="tbody" class="home">
                
                </tbody>

            </table>

            <div class="form-group">
              <textarea class="form-control home notes" i placeholder="Notes"></textarea>
              <input type="hidden" name="" class="total">
            </div>

            
            <a href="{{route('itempage')}}" class="btn btn-outline-light text-dark home cont py-5">Continues Shopping</a>


            @role('customer')
            <a href="" class="btn btn-outline-light text-dark home py-5 buy_now">Order Now</a>
            
            @else
            <a href="{{route('login')}}" class="btn btn-outline-light text-dark home py-5 buy_now">Order Now To Login</a>
            @endrole
           
           
          </div>

        </div>
</div>


@endsection


@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection