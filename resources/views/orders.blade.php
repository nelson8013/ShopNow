@extends("master")
    @section("content")
        <div class="custom-product">
            <div class="container">
                <div class="row trending-wrapper">
                    <div class="col-sm-12">
                        <h4>My Orders</h4>
                        @foreach ($orders as $order)
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="/detail/{{$order->id}}">
                                        <img src="{{$order->gallery}}" alt="" class="trending-image">
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <div class="me">
                                        <h2>Name: {{$order->name}}</h2>
                                        <h5>Delivery Status: {{$order->status}}</h5>
                                        <h5>Address: {{$order->address}}</h5>
                                        <h5>Payment Method: {{$order->payment_method}}</h5>
                                        <h5>Payment Status: {{$order->payment_status}}</h5>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
