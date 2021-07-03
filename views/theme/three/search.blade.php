@extends($layout)

@section('head')
<title>List of {{ $query }}</title>
@endsection

@section('bg')
@endsection

@section('header')
	<h1>List of : {{ $query }}</h1>
	<div class="navi text-center">
		<p>There are any result for {{ $query }}. Click one of them for view details.</p>
		@foreach(collect($list)->shuffle()->take(5) as $r)
			@if($r !== $query)
			<a class="badge badge-{{ collect(['primary', 'secondary', 'success', 'info', 'danger', 'warning', 'light', 'dark'])->random() }}" href="{{ image_url($r) }}">{{ $r }}</a>
			@endif
		@endforeach
	</div>

@endsection

@section('content')
	@php
		$lazyload 		= LAZY_LOAD;
	@endphp

		@foreach(collect($list)->shuffle()->take(20)->chunk(5) as $chunked) 
				@foreach($chunked as $n => $keyword)
				@php
					$is_cover = ($n % 5 == 0)?'posts-image-big':'';
				@endphp
				<div class="posts-image {{$is_cover}}">
					<div class="posts-image-content">
						<h2><a href="{{ image_url($keyword) }}">
							{{ ucwords($keyword) }}
						</a></h2>
						<a href="{{ image_url($keyword) }}">
							@if($lazyload == TRUE)
								<img src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ image_url($keyword, true) }}" alt="{{ ucwords($keyword) }}" class="img-fluid lazyload" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
							@else
								<img src="{{ image_url($keyword, true) }}" alt="{{ ucwords($keyword) }}" class="img-fluid" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
							@endif	
						</a> 
					</div>
				</div>
				@endforeach 
		@endforeach 
		
@endsection
