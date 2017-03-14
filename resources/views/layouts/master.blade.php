<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{Html::style('css/bootstrap.min.css')}}
	<style type="text/css">
	body{
		background:url('images/background.jpg');
		background-size: 100% auto ;
		}
	header{opacity: 0.7;}
	footer{background-color: #fff ; opacity:0.9; text-align: center;}	

	</style>
</head>
<body>
<header class="jumbotron">
	<div class="container">
		<h1>THE Book store </h1>
		<p>Reading a goood book </p>
	</div>
</header>

@yield('content')

<footer class="conaainer">
 &copy; All Right Reserved for Mazen Bdewi - 2017
	
</footer>

</body>
</html>