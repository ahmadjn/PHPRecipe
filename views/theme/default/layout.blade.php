<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
		<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet" type="text/css">

		<style type="text/css">
			html,body{font-family:"Open Sans",Arial,sans-serif;font-size:14px;font-weight:400;background:#f3f3f3 url(@yield('bg')) no-repeat center center fixed;background-size:cover;height:100%}#title{font-family:"Mr Dafoe",Times,serif;font-size:34px;background:rgba(255,255,255,.8);margin-bottom:34px}.header{padding-bottom:13px;margin-bottom:13px;border-bottom:1px solid #eee}a{color:#26ADE4;text-decoration:none}#title a{color:#333;margin-left:21px}#title a:hover{text-decoration:none;color:#26ADE4}.sidebar ul{margin:0;padding:0}.sidebar ul li{list-style:none}.footer{margin-top:21px;padding-top:13px;border-top:1px solid #eee}.footer a{margin:0 15px}.navi{margin:13px 0 13px 0;padding:13px}.navi a{margin:5px 2px;font-size:95%}.main{margin-top: 6rem;}.form-inline .form-control{min-width: 300px;}			
		</style>

		@yield('head')
		@include('header')
	</head>
	<body>
		<header class="bg-white fixed-top">			
			<nav class="navbar navbar-light bg-white mb-0">
				<div class="container justify-content-center justify-content-sm-between">	
				  <a href="{{ home_url() }}" title="{{ site_name() }}" class="navbar-brand mb-1">{{ site_name() }}</a>
				  <form class="form-inline mb-1" action="{{home_url('search')}}" method="get">
				    <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search and hit enter.." aria-label="Search">
				  </form>	
				</div>			  
			</nav>				
		</header>
		<main class="main container bg-white">
			<div class="row header">
				<div class="col-sm-12 text-center p-2">

					@yield('header')
					@include('related')

				</div>
			</div>
			<div class="row content mb-4">
				<div class="col-md-12">
					
					@yield('content')
				</div>
			</div>
			<div class="row footer">
				<div class="col-md-12 text-center py-4">
					@foreach(pages() as $page)
					<a href="{{ page_url($page) }}">{{ ucwords(str_replace('-', ' ', $page)) }}</a>
					@endforeach

				</div>
			</div>
		</main>
		@include('bar')
		@include('footer')
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js" integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I=" crossorigin="anonymous"></script>
		
		@php
		$lazyload 	= LAZY_LOAD;
		$show_dwn 	= SHOW_DOWNLOAD;
		@endphp

		@if($lazyload == TRUE)
		<script async='async' src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/12.0.3/lazyload.min.js" integrity="sha256-07HbhWMzlSuhFpeiTy8zouvXxdqnEZ63A4KBLW2Efqc=" crossorigin="anonymous"></script>
		<script type='text/javascript'>
			(function() {
			  window.lazyLoadOptions = {elements_selector: ".lazyload"};      
			})();
		</script>
		@endif

		@if($show_dwn == TRUE)
		<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
		<script type='text/javascript'>
			$(document).ready(function()
		    {
				$(document).on('click','#image-download',function(e)
				{
					e.preventDefault();
					var url = $(this).data('url');
					var title = $(this).data('title');			
					var x=new XMLHttpRequest();
					x.open( "GET", url , true);
					x.responseType="blob";
					x.onload= function(e){download(e.target.response, title, "image/jpg");};
					x.send();
				});
		    });
		</script>
		@endif
	</body>
</html>