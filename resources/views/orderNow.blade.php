@extends("master")
	@section("content")
		<div class="custom-product">
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
                    <form action="/action_page.php">
                        <div class="form-group">
                          <textarea type="email" class="form-control" placeholder="Enter Your Address"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Payment Method</label> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px"><span>PayStack</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px"><span>Flutter Wave</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px"><span>Bank Transfer</span> <br><br>
                          <input type="radio" name="payment" style="margin-right: 5px"><span>USSD</span>
                        </div>
                        <button type="submit" class="btn btn-default">Order Now</button>
                      </form>
                  </div>
            </div>
        </div>
	@endsection
