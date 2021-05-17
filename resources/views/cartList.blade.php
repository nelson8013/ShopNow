@extends("master")
    @section("content")
        <div class="custom-product">
            <h4>Some Text</h4>
            <div class="container" style="width: 700px">
                @foreach ($products as $item)
                <div class="panel panel-default">
                    <div class="panel-heading"><h6>{{$item->name}}</h6></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="jumbotron">
                                        <img class="trending-image" src="{{$item->gallery}}">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="lead" style="text-align: center; margin-top: 70px"><h4>{{$item->description}}</h4></h4>
                                </div>
                                <div class="col-sm-4">
                                    <div class="btn-group" role="group" aria-label="..." style=" margin-top: 70px">
                                        <input type="button" class="btn btn-default" value="-">
                                        <input class="btn btn-default" min="0" name="quantity" value="1" type="button">
                                        <input type="button" class="btn btn-default" value="+">
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left: 220px;">
                                <a href="#!"  style="margin-right: 7px; text-decoration: none;" class="card-link-secondary small text-uppercase mr-3 btn btn-warning"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove item </a>
                                <a href="#!"  style="margin-right: 50px; text-decoration: none;" class="card-link-secondary small text-uppercase"><span class="glyphicon glyphicon-heart"></span> Move to wish list </a>
                                <a href="#!" style="margin-right: 7px; text-decoration: none;" class="card-link-secondary small text-uppercase badge"><h6> {{$item->price}} </h6></a>
                           </div>
                        </div>
                  </div>
                  @endforeach

            </div>
        </div>
    @endsection


    {{-- <div class="custom-product">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
            <div class="col-sm-4">
                <div class="trending-wrapper">
                    <h2>Search Results</h2>
                  @foreach ($products as $item)
                      <div class="searched-item">
                          <a href="detail/{{$item->id}}">
                              <img class="trending-image" src="{{$item->gallery}}">
                              <div class="">
                                  <h2>{{$item->name}}</h2>
                                  <h5>{{$item->description}}</h5>
                              </div>
                          </a>
                      </div>
                  @endforeach
              </div>
            </div>
        </div>


    </div> --}}








      {{-- <div class="row">
        <div class="col-sm-4"><h4>Product Image</h4></div>
        <div class="col-sm-4"><h4>Product Description</h4></div>
        <div class="col-sm-4"><h4>Increment Tab</h4></div>
    </div> --}}
