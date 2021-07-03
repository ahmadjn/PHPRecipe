@extends($layout)

@section('head')
<title>{{ site_name() }}</title>
@endsection

@section('bg')
@endsection

@section('content')
	@php
		$lazyload 		= LAZY_LOAD;
	@endphp

	<div class="card-columns">
	@foreach(collect(keywords())->shuffle()->take(16)->chunk(4) as $chunked)

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
