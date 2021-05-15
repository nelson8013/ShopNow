@extends("master")

    @section("content")
        <div class="custom-product">
			<div class="row">
                <div class="col-sm-4">
                    <a href="#">Filter</a>
                </div>
                <div class="col-sm-4">
                    <div class="trending-wrapper">
                        <h2>Search Results</h2>
                      @foreach ($search as $product)
                          <div class="searched-item">
                              <a href="detail/{{$product['id']}}">
                                  <img class="trending-image" src="{{$product['gallery']}}">
                                  <div class="">
                                      <h2>{{$product['name']}}</h2>
                                      <h5>{{$product['description']}}</h5>
                                  </div>
                              </a>
                          </div>
                      @endforeach
                  </div>
                </div>
            </div>


        </div>
    @endsection




