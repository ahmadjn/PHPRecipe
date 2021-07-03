@extends($layout)

@section('head')
<title>{{ ucwords($keyword) }}</title>
@endsection

@section('bg')
{{ collect($images)->random()['url'] }}
@endsection

@section('header')
<h1>{{ ucwords($keyword) }}</h1>
<!--ads/responsive.txt-->

@php
shuffle($sentences);
@endphp

<div class="navi">
	@if(!empty($sentences))
	<div style="display: block; float: left; margin: 0px 20px 0px 0px;">
		<!--ads/336.txt-->
	</div>
	<p align="justify"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}</p>
	<br>
	<!--ads/responsive.txt-->
	<p align="justify"><i>{{ ucwords($keyword) }}</i> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}</p>
	@endif
	<!--ads/article.txt-->
	<div class="card text-center">
		<h3 class="my-2">Related of {{ ucwords($keyword) }} :</h3>
		<!--ads/link.txt-->
		@foreach(collect(random_related())->shuffle()->take(8) as $r)
		@if($r !== $keyword)
		<a class="btn btn-{{ collect(['primary', 'secondary', 'success', 'info', 'danger', 'warning', 'dark'])->random() }}" href="{{ image_url($r) }}">{{ ucwords($r) }}</a>
		@endif
		@endforeach
	</div>
</div>
@endsection

@section('content')

@php
$show_download = SHOW_DOWNLOAD;
$max_image = MAX_IMAGE_RESULT;
$lazyload = LAZY_LOAD;
@endphp

<div class="row">
	@foreach($images as $key => $image)
	@if($key === $max_image)
	@break
	@endif
	<div class="col-md-4 mb-4">
		<div class="card h-100">
			<a href="{{ cdn_image($image['url']) }}" data-lightbox="roadtrip" data-title="{{ $image['title'] }}">
				@if($lazyload == TRUE)
				<img class="card-img v-image lazyload" src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ cdn_image($image['url']) }}" onerror="this.onerror=null;this.src='https://lh3.googleusercontent.com/proxy/mslgtC5KdMi3f_8H28ULlmSoPpRyYo-SU1xhGAUAJ0clgFwPWcNKzarVhMVOWx4Cyj6YugxcV1_c5gCtZB4GxaQdCJYJ2838VkhI7dr9OmJeQVY';" alt="{{ $image['title'] }}">
				@else
				<img class="card-img v-image" src="{{ cdn_image($image['url']) }}" onerror="this.onerror=null;this.src='https://lh3.googleusercontent.com/proxy/mslgtC5KdMi3f_8H28ULlmSoPpRyYo-SU1xhGAUAJ0clgFwPWcNKzarVhMVOWx4Cyj6YugxcV1_c5gCtZB4GxaQdCJYJ2838VkhI7dr9OmJeQVY';" alt="{{ $image['title'] }}">
				@endif
			</a>
			<div class="card-body text-center">
				@if($show_download)
				<div class="d-block mb-2">
					<button id='image-download' class="btn btn-sm btn-outline-primary" data-url="{{hotlink_url($keyword,$key)}}" data-title="{{ $image['title'] }}.jpg">Save Image<i class="fas fa-cloud-download-alt ml-1"></i></button>
				</div>
				@endif
				<h3 class="h6">{{ $image['title'] }}</h3>
			</div>
		</div>
	</div>

	@if($loop->iteration == 6)
	<div class="col-12 mb-4">
		<div class="card">
			<h2 class="my-2">
				<center>{{ collect(['20+','21+','22+','23+','24+','25+','26+','27+','28+','29+', '30+'])->random() }} {{ collect(['Pictures','Images'])->random() }} {{ ucwords($keyword) }}</center>
			</h2>
			<!--ads/article.txt-->
			@if($lazyload == TRUE)
			<img class="card-img-top v-cover lazyload" src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ collect($images)->random()['url'] }}" onerror="this.onerror=null;this.src='https://lh3.googleusercontent.com/proxy/mslgtC5KdMi3f_8H28ULlmSoPpRyYo-SU1xhGAUAJ0clgFwPWcNKzarVhMVOWx4Cyj6YugxcV1_c5gCtZB4GxaQdCJYJ2838VkhI7dr9OmJeQVY';" alt="{{ $image['title'] }}">
			@else
			<img class="card-img-top v-cover" src="{{ collect($images)->random()['url'] }}" onerror="this.onerror=null;this.src='https://lh3.googleusercontent.com/proxy/mslgtC5KdMi3f_8H28ULlmSoPpRyYo-SU1xhGAUAJ0clgFwPWcNKzarVhMVOWx4Cyj6YugxcV1_c5gCtZB4GxaQdCJYJ2838VkhI7dr9OmJeQVY';" alt="{{ $image['title'] }}">
			@endif

			<div class="card-body">
				<h4 class="h5"><b>{{ @array_pop($sentences) }}</b></h4>
				<!--ads/responsive.txt-->
				@foreach(collect($sentences)->chunk(4) as $chunked_sentences)
				<p class="p-2" align="justify">
					@if($loop->first)
					<strong>{{ ucfirst($keyword) }}</strong> -
					@endif

					@foreach($chunked_sentences as $chunked_sentence)
					{{ $chunked_sentence }}
					@endforeach
				</p>
				@endforeach
			</div>
		</div>
		<br>
		<h3>
			<center>
				Gallery of {{ ucwords($keyword) }}
			</center>
		</h3>

	</div>
	@endif

	@endforeach
</div>

<div class="clearfix"></div>
<div class="col-12 mb-4">
	<p align="justify"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}<br></p>
</div>

@endsection