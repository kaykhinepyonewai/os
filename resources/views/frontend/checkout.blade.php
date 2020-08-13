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
                    <th>Item Name:</th>
                    <th>Item Price:</th>
                    <th>Qty</th>
                    <th>Sub Total</th>
                  </tr>
                </thead>

                <tbody id="tbody" class="home">
                	<tr>
                		<td>1</td>
                		<td>Wedding Dress</td>
                		<td>1000000MMK</td>
                		<td>1</td>
                		<td>100000MMK</td>
                	</tr>
                	<tr>
                		<td colspan="4" class="float-right">Total</td>
                	</tr>

                </tbody>

            </table>

            <div class="form-group">
              <textarea class="form-control home notes" placeholder="Notes"></textarea>
              <input type="hidden" name="" class="total">
            </div>

            <a href="#" class="btn btn-outline-light text-dark home cont py-5">Continues Shopping</a>
            <a href="#" class="btn btn-outline-light text-dark home cont py-5">Order Now</a>
           
           
          </div>

        </div>
</div>


@endsection