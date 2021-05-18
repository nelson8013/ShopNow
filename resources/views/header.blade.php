<?php

use App\Http\Controllers\ProductController;
$total = 0;
if(Session()->has('user')){
    $total = ProductController::cartItem();
}


?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">nowShop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li class=""><a href="/orders">Orders</a></li>
      </ul>

      <form class="navbar-form navbar-left" action="/search">
        <div class="form-group">
          <input type="text" class="form-control search-box" name="query" placeholder="Search for a product">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>

      <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;">
        <li><a href="/cartlist"><span class="glyphicon glyphicon-shopping-cart">({{$total}})</span></a></li>
        @if (Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle"  data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="border-radius: 10px;">
                    <li ><a href="/logout">Logout</a></li>
                </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endif
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
