<!DOCTYPE html>
<html lang="ja">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<title>
    Nay Min Thar Empire Myanamr
    Myanmar Human Resource Center
    @yield('title')
</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="../use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/html5reset-1.6.1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/zoomslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/themes/mu/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/themes/mu/css/top_new.css') }}">

    <link rel='stylesheet' id='addtoany-css' href='{{ asset('assets/plugins/add-to-any/addtoany.min.css') }}'
        type='text/css' media='all' />

    <script type='text/javascript' src='{{ asset('assets/js/jquery/jquery.min.js') }}' id='jquery-core-js'></script>

    <script type='text/javascript' src='{{ asset('assets/js/jquery/jquery-migrate.min.js') }}' id='jquery-migrate-js'>
    </script>
</head>

<body class="home drawer drawer--right" id="top">

    @include('layouts.menu')


    @yield('content')


    <script src="{{ asset('assets/themes/mu/js/footerFixed.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_zoom_image.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/jquery.lazyload.min.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_smooth_scroll.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_parallax.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/jquery.zoomslider.min.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/slider.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_sp_slider_selectable.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_slider.js') }}"></script>
    <script src="{{ asset('assets/themes/mu/js/config_to_top.js') }}"></script>

    <script async data-noptimize="1" src='{{ asset('assets/plugins/autoptimize/lazysizes.min.js') }}'></script>
</body>

</html>
