@extends("master")

    @section("content")
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img class="detail-img" src="{{$product['gallery']}}" alt="">
					</div>
					<div class="col-sm-6" >
                        <a href="/" class="btn btn-primary" type="button" style="margin-bottom: 50px;">
                            Go Back <span class="badge"><</span>
                          </a>
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading lead">{{$product['name']}}</div>
                                    <div class="panel-body">
                                        <h4>Price: <b>{{$product['price']}}</b></h4>
                                        <h4>Details: {{$product['description']}}</h4>
                                        <h4>Category: {{$product['category']}}</h4>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="row" style="margin-bottom: 10px; margin-left: -2px">
                                        <div class="col-sm-2" style="margin-right: 1rem">
                                            <form action="/add_to_cart" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product['id']}}" name="product_id">
                                                <button type="submit" class="btn btn-danger">Add To Cart</button>
                                            </form>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success">Buy Now</button>
                                        </div>
                                    </div>
                                </div>


					</div>
				</div>

			</div>
    @endsection


