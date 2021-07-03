@extends($layout)

@section('head')
<title>{{ site_name() }}</title>
@endsection

@section('content')
<div class="grid md:grid-cols-2 gap-4 mt-6 mb-6 p-2">
    @foreach(collect(keywords())->shuffle()->take(20)->chunk(5) as $chunked)
    @foreach($chunked as $n => $keyword)
    <div class="border-2 bg-white rounded-lg overflow-hidden shadow-lg">
        <div class="h-64 overflow-hidden">
            <a href="{{ image_url($keyword) }}">
                <img src="https://i.pinimg.com/originals/e3/f6/2f/e3f62f9caff119965b4f54aae69f9eb3.gif" data-src="{{ image_url($keyword, true) }}" class=" object-cover h-64 w-full transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-125" onerror="this.onerror=null;this.src='https://i.pinimg.com/originals/e3/f6/2f/e3f62f9caff119965b4f54aae69f9eb3.gif';" alt="{{ ucwords($keyword) }}" />
            </a>
        </div>
        <div class="p-4 text-center font-semibold hover:font-bold hover:text-blue-500 overflow-hidden">
            <h2>
                <a href="{{ image_url($keyword) }}">{{ ucwords($keyword) }}</a>
            </h2>
        </div>
    </div>
    @endforeach
    @endforeach
</div>
@endsection