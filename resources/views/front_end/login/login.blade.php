<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Real Home A Real Estate Category Flat Bootstarp Resposive Website Template | Login :: w3layouts</title>
<link href="public/front_end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/front_end/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="public/front_end/js/scripts.js"></script>
<link href="public/front_end/css/styles.css" rel="stylesheet">
<!--//menu-->
<meta charset="utf-8">
<link rel="stylesheet" href="public/css/custom_style.css">
<!--theme-style-->
<link href="public/front_end/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
@include('front_end.template.navgation')

@include('front_end.template.header')
@include('front_end.template.banner',['title1'=>'Log','title2'=>'in'])
<!--contact-->
<div class="login-right">
	<div class="container">
		<h3>Login</h3>

		<div class="login-top">
			@if(count($errors)>0)
			 <div class="alert alert-danger">
					 @foreach($errors->all() as $error)
							{{$error}} <br>
					 @endforeach
			 </div>
		 @endif
		 @if(session('mess'))
			 <div class="alert alert-dangers">
					 {{session('mess')}}
			 </div>
		 @endif
				<ul class="login-icons">
					<li><a href="#" ><i class="facebook"> </i><span>Facebook</span></a></li>
					<li><a href="#" class="twit"><i class="twitter"></i><span>Twitter</span></a></li>
					<li><a href="#" class="go"><i class="google"></i><span>Google +</span></a></li>
					<li><a href="#" class="in"><i class="linkedin"></i><span>Linkedin</span></a></li>
					<div class="clearfix"> </div>
				</ul>
				<div class="form-info">
					<form action = "login" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="text" class="text" placeholder="Email Adress" required="" name="email">
						<input type="password"  placeholder="Password" required="" name = "pass">
						 <label class="hvr-sweep-to-right">
				           	<input type="submit" value="Submit">
				     </label>
					</form>
				</div>
			<div class="create">
				<h4>New To Real Home?</h4>
				<a class="hvr-sweep-to-right" href="register.html">Create an Account</a>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
</div>
<!--//contact-->
@include('front_end.template.footer')
</body>
</html>
