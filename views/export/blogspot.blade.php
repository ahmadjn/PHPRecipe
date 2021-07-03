@php
	//$backdate = isset($argv[2]) ? strtotime($argv[2]) : strtotime('-1 month');
	$backdate 	= BACK_DATE;
	$schedule 	= SHEDULE_DATE;
@endphp
{!! '<' . '?' . "xml version='1.0' encoding='UTF-8'?>" !!}
<ns0:feed xmlns:ns0="http://www.w3.org/2005/Atom">
<ns0:title type="html">wpan.com</ns0:title>
<ns0:generator>Blogger</ns0:generator>
<ns0:link href="http://localhost/wpan" rel="self" type="application/atom+xml" />
<ns0:link href="http://localhost/wpan" rel="alternate" type="text/html" />
<ns0:updated>2016-06-10T04:33:36Z</ns0:updated>
@foreach($keywords as $id => $keyword)
	@php
	$data = get_data(new_slug($keyword));
	if(empty($data['images'])){ continue; }
	$timestamp = date('Y-m-d\TH:i:s\Z', rand(strtotime($backdate), strtotime($schedule)));
	$data['keyword'] = $keyword;
	@endphp
	<ns0:entry>
		@foreach($data['related'] as $r)
		<ns0:category scheme="http://www.blogger.com/atom/ns#" term="{{ $r }}" />
		@endforeach
		<ns0:category scheme="http://schemas.google.com/g/2005#kind" term="http://schemas.google.com/blogger/2008/kind#post" />
		<ns0:id>post-{{ $id }}</ns0:id>
		<ns0:author>
		<ns0:name>admin</ns0:name>
		</ns0:author>
		<ns0:content type="html">@php
		$content = str_replace("\n", ' ', export('export.post', $data));
		@endphp {{ Minify_Html($content) }}
		</ns0:content>
		<ns0:published>{{ $timestamp }}</ns0:published>
		<ns0:title type="html">{{ ucwords($keyword) }}</ns0:title>
		<ns0:link href="http://localhost/wpan/{{ $id }}/" rel="self" type="application/atom+xml" />
		<ns0:link href="http://localhost/wpan/{{ $id }}/" rel="alternate" type="text/html" />
	</ns0:entry>
@endforeach
</ns0:feed>