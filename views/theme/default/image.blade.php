@extends($layout)

@section('head')
<title>{{ ucwords($keyword) }}</title>
@endsection

@section('bg')
{{ collect($images)->random()['url'] }}
@endsection

@section('header')
	<h1>{{ ucwords($keyword) }}</h1>

	@php
		shuffle($sentences);
	@endphp

	<div class="navi text-center">
		@if(!empty($sentences))
			<p>{{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} <br>				
			</p>
		@endif
		@foreach(collect(random_related())->shuffle()->take(8) as $r)
			@if($r !== $keyword)
			<a class="badge badge-{{ collect(['primary', 'secondary', 'success', 'info', 'danger', 'warning', 'light', 'dark'])->random() }}" href="{{ image_url($r) }}">{{ $r }}</a>
			@endif
		@endforeach
	</div>

@endsection

@section('content')

	@php
		$show_download 	= SHOW_DOWNLOAD;
		$max_image 		= MAX_IMAGE_RESULT;
		$lazyload 		= LAZY_LOAD;
	@endphp

	<div class="card-columns">
	@foreach($images as $key => $image)
	@if($key === $max_image)
		@break
	@endif			
	  <div class='card'>
	  	<a href="{{ cdn_image($image['url']) }}" data-lightbox="roadtrip" data-title="{{ $image['title'] }}">
			@if($lazyload == TRUE)
	    	<img class="card-img lazyload" src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ cdn_image($image['url']) }}" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
			@else
			<img class="card-img" src="{{ cdn_image($image['url']) }}" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
			@endif	
	    </a>
	    @if($show_download)	
	    <div class="d-block text-center my-2 p-2">	       	
	       	<button id='image-download' class="btn btn-sm btn-outline-primary" data-url="{{hotlink_url($keyword,$key)}}" data-title="{{ $image['title'] }}.jpg">Save Image<i class="fas fa-cloud-download-alt ml-1"></i></button>
	   	</div> 
	   	@endif
		<p class='blockquote-footer py-1 px-2'>
			<i>
				<small class='text-muted'>
				{{ $image['title'] }}
				</small>
			</i>        
		</p>
	  </div>

		@if($key == 5)
		<div class='card'>	
			@if($lazyload == TRUE)
	    	<img class="card-img lazyload" src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ cdn_image(collect($images)->random()['url']) }}" width="34%" align="left" style="margin-right: 8px;margin-bottom: 8px;">
			@else
			<img class="card-img" src="{{ cdn_image(collect($images)->random()['url']) }}" width="34%" align="left" style="margin-right: 8px;margin-bottom: 8px;">
			@endif			  	
		  	<h3 class="h6 p-2"><b>{{ @array_pop($sentences) }}</b></h3>
			@foreach(collect($sentences)->chunk(3) as $chunked_sentences)
				<p class="p-2" align="justify">
					@if($loop->first)
						<strong>{{ ucfirst($keyword) }}</strong>. 
					@endif

					@foreach($chunked_sentences as $chunked_sentence)
						{{ $chunked_sentence }} 
					@endforeach
				</p>
			@endforeach
		</div>
		@endif

	@endforeach	
	</div>

	@php
	$SOURCE_URL = SOURCE_URL;
	$SOURCE_NAME = SOURCE_NAME;
	@endphp
	@if($SOURCE_NAME) 
		<div class="d-block mt-4 p-3">

			Source : <a href="{{$SOURCE_URL}}" rel="nofollow noopener">{{$SOURCE_NAME}}</a>
		</div>
	@endif
	
@endsection
