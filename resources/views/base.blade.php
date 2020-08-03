<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .mg {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- <div class="mg">
        <a href="/products">Sản phẩm</a>
    </div>
    <div>
        <a href="/customers">Khách hàng</a>
    </div> -->
    <div class="container">
        @yield('main')
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
