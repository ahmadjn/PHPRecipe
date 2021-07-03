{!! '<' . '?' . "xml version='1.0' encoding='UTF-8'?>" !!}
<urlset xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>
@foreach($arr_kw as $key => $keyword)
<url>
	<loc>{{image_url($keyword)}}</loc>
</url>
@endforeach
</urlset>