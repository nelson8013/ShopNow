<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>



    <title>Now Shop</title>
</head>
<body>

    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
    <style>
        .custom-login{
            height: 500px;
            padding-top: 50px;
        }

        img.slider-img{
            height: 400px !important;
        }

        .custom-product{
            height: 620px;
        }

        .slider-text{
            background-color: #ff3700d6 !important;
            border-radius: 100px !important;
            width: 50rem !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .trending-image{
            height: 100px !important;
        }

        .trending-item{
            float: left;
            width: 25%;
            padding-bottom: 10px;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .trending-wrapper{
            margin: auto !important;
            margin-left: 15rem !important;
        }

        .trending-wrapper h3{
            text-align: center;
            margin-bottom: 5rem;
        }
        .detail-img{
            height: 300px;
        }

        .search-box{
            width: 500px !important;
        }
    </style>
</body>
</html>
