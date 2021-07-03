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
	<div class="card-columns">
	@foreach(collect($list)->shuffle()->take(20)->chunk(5) as $chunked)

			@foreach($chunked as $keyword)
				<div class='card'>
					<a href="{{ image_url($keyword) }}">
						@if($lazyload == TRUE)
							<img class="card-img lazyload" src="{{ home_url('assets/img/loading.jpg') }}" data-src="{{ image_url($keyword, true) }}" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
						@else
							<img class="card-img" src="{{ image_url($keyword, true) }}" onerror="this.onerror=null;this.src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh_l3eQ5xwiPy07kGEXjmjgmBKBRB7H2mRxCGhv1tFWg5c_mWT';">
						@endif
					</a>
					<div class='py-1 px-2 text-center'>						
						<h3 class='h5 text-muted'><i>{{ $keyword }}</i></h3>						               
					</div>
				</div>
			@endforeach
			
	@endforeach
	</div>
@endsection
