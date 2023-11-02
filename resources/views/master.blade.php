<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <base href="{{asset('')}}"></base>
    <!-- Css Styles -->
    <link rel="stylesheet" href="Template/Template/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Template/Template/css/style.css" type="text/css">
</head>

<body>

    @include('header')

    <!-- Product Shop Section Begin -->
    @yield('content')
    <!-- Product Shop Section End -->


    @include('footer')

    @include('script')
</body>

</html>