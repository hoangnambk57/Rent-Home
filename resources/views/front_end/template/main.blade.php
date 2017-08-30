<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Real Home A Real Estate Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
{{-- <base href="{{asset('')}}"> --}}
<link href="public/front_end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/front_end/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="public/front_end/js/scripts.js"></script>
<link href="public/front_end/css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="public/front_end/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="public/front_end/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body >
{{-- navigation start--}}
{{-- @yield('navigation') --}}
@include('front_end.template.navgation')
{{-- navigation end --}}

{{-- header-top-start --}}
{{-- @yield('header_top') --}}
@include('front_end.template.header')
<!--end-header-top-->

{{-- baner start --}}
@yield('banner')

<!--banner-end/-->
{{-- banner-bottom-start --}}
@yield('header_bottom')
{{-- banner-bottom-end --}}




<!--//header-->
<!--content-page-start-->
@yield('content')
{{-- content-page-end --}}
<!--footer-->
{{-- @yield('footer') --}}
@include('front_end.template.footer')
<!--//footer-->
</body>
</html>
