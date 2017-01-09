 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App Name - @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="{{asset('public/adminasset/style.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{asset('public/adminasset/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('public/adminasset/js/main.js')}}">
	
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	@include('admin.layout.header')
	<section id="content">
	   <div class="row">
	   	<div class="col-md-2">
	   		@include('admin.layout.sidebar')

	   	</div>
	   	<div class="col-md-10">
	   		<div class="content-right">
	   			
	   			 @yield('content')
	   		</div>
	   	</div>
	   </div>

	</section>
	@yield('script')
</body>
</html>
