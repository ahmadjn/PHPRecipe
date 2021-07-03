@extends($layout)

@section('head')
<title>{{ ucwords(str_replace('-', ' ', $page)) }}</title>
@endsection

@section('content')
<div class="p-5 text-center m-5">
	@include('pages.' . $page)
</div>
@endsection