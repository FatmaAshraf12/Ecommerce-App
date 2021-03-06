<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce App</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    .custom-login {
    margin: auto;
    height: 500px;
    margin-top: 90px;
}

.carousel-caption {
    color: #000;
}
img.slider-img {
    height: 400px;
}
.container.custom-products {
    background-color: #d6d6d6;
    WIDTH: 100%;
    max-width: 100%;
    padding: 0px;
}

.bg-light {
    background-color: #ffff;
}
.container.custom-products2 {
    padding: 0;
    margin: 0;
    width: 100%;
    max-width: 100%;
}

.trend-item img {
    width: 200px;
}

.trend-item {
    width: 24%;
    display: inline-block;
    text-align: center;
    margin: auto;
}
.trend-item .caption {
    margin-top: 28px;
}
h3.custom-title {
    margin-left: 30px;
    margin-top: 30px;
    margin-bottom: 0px;
}


.container.detail-page .caption {
    padding-top: 50px;
}

.container.detail-page img {
    height: 300px;
}

.cart-wrapper a {
    text-decoration: none;
}




.cart img {
    height: 65px;
    width: 100px;
    display: inline-block;
}

.cart .caption {
    display: inline-block;
    margin-left: 20px;
}
.cart .caption h5 {
    font-size: 18px;
    font-weight: 300;
    color: #000;
}

.container.cart .row {
    margin: 50px 30px;
}
</style>
</html>