@extends("master")
	@section("content")
		<div class=" container custom-product">
            <div class="col-sm-10">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Amount</td>
                        <td> $ {{$total}}</td>
                      </tr>
                      <tr>
                        <td>Tax</td>
                        <td>$ 0</td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>$ 10</td>
                      </tr>
                      <tr>
                        <td>Total</td>
                        <td>$ {{$total +10}}</td>
                      </tr>
                    </tbody>
                  </table>
                  <div>
                    <form action="/placeorder" method="POST">
                        @csrf
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Enter Your Address" name="address" required/>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Payment Method</label> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px" value="paystack"><span>PayStack</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px" value="flutterWave"><span>Flutter Wave</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px" value="transfer"><span>Bank Transfer</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px" value="cash"><span>Cash</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px" value="ussd"><span>USSD</span>
                        </div>
                        <button type="submit" class="btn btn-default">Order Now</button>
                      </form>
                  </div>
            </div>
        </div>
	@endsection
