@php
shuffle($sentences);
$show_download = SHOW_DOWNLOAD;
$max_image = MAX_IMAGE_RESULT;
@endphp

---
title: "{{ ucwords($keyword) }}"
description: "Kumpulan contoh surat lamaran kerja terbaru 2020."
date: "2020-05-16"
categories:
  - "Uncategorized"
images: 
  - "{{ collect($images)->random()['url'] }}"
featuredImage: "{{ collect($images)->random()['url'] }}"
featured_image: "{{ collect($images)->random()['url'] }}"
image: "{{ collect($images)->random()['url'] }}"
---

@if(!empty($sentences))
<p style="text-align:justify"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}.</p>
@endif

@if(empty($sentences))
<p style="text-align:justify">
	<strong>{{ ucwords($keyword) }}</strong> {{ collect(['have some','involve some'])->random() }} pictures that related {{ collect(['each other','one another'])->random() }}. Find out {{ collect(['the most recent','the newest'])->random() }} pictures of {{ ucwords($keyword) }} here, {{ collect(['and also you','so you'])->random() }} can {{ collect(['get the','obtain the','have the','receive the','find the'])->random() }} picture here simply. {{ ucwords($keyword) }} picture {{ collect(['posted','published','submitted','placed','put up','uploaded'])->random() }} and {{ collect(['uploaded','published','submitted'])->random() }} by Admin that {{ collect(['saved','preserved','kept'])->random() }} {{ collect(['in our','inside our'])->random() }} collection.
	<br></p>
@endif

@foreach(collect($images)->shuffle()->take($max_image) as $key => $image)
<p style="text-align:center">
	<a href="{{ cdn_image($image['url']) }}" target="_blank">
		<img class="img-fluid" src="{{ cdn_image($image['url']) }}" width="100%"></a>
	<center><strong>{{ $image['title'] }}</strong></center>
</p>

@if($loop->first)
<p style="text-align:justify">
	<strong>{{ ucwords($keyword) }}</strong> have {{ collect(['an image','a graphic'])->random() }} {{ collect(['associated with the','from the'])->random() }} other. <strong>{{ ucwords($keyword) }}</strong> {{ collect(['It also','In addition, it'])->random() }} will {{ collect(['feature a','include a'])->random() }} picture of {{ collect(['a kind','a sort'])->random() }} {{ collect(['that could be','that may be','that might be'])->random() }} {{ collect(['seen in','observed in'])->random() }} the gallery of {{ ucwords($keyword) }}. The collection that {{ collect(['consisting of','comprising'])->random() }} chosen picture and the best {{ collect(['among others','amongst others'])->random() }}.
	<br></br>
	{{ collect(['These are','They are'])->random() }} so many great picture list that {{ collect(['may become','could become'])->random() }} your {{ collect(['inspiration','motivation','ideas','creativity','enthusiasm'])->random() }} and informational {{ collect(['purpose of','reason for'])->random() }} <em>{{ ucwords($keyword) }}</em> design ideas {{ collect(['for your own','on your own'])->random() }} collections. {{ collect(['we hope','hopefully','really is endless'])->random() }} you {{ collect(['are all','are'])->random() }} enjoy {{ collect(['and finally','and lastly'])->random() }} {{ collect(['can find','will get'])->random() }} the best picture from our collection that {{ collect(['posted','published','submitted','placed','put up','uploaded'])->random() }} here and also use for {{ collect(['suitable','appropriate','ideal','suited'])->random() }} needs for personal use. The team also {{ collect(['provides the','supplies the'])->random() }} picture in {{ collect(['High Quality','TOP QUALITY'])->random() }} Resolution (HD {{ collect(['Resolution','Quality','Image resolution'])->random() }}) {{ collect(['that can be','that may be'])->random() }} downloaded {{ collect(['by simply','simply by'])->random() }} way.
</p>

<h3>{{ @array_pop($sentences) }}</h3>
<img src="{{ collect($images)->random()['url'] }}" width="100%"> @foreach(collect($sentences)->chunk(3) as $chunked_sentences)
<p style="text-align:justify">
	@if($loop->first) <strong>{{ ucfirst($keyword) }}</strong>. @endif @foreach($chunked_sentences as $chunked_sentence){{ $chunked_sentence }} @endforeach
</p>
@endforeach
<!--more-->
@endif

@endforeach

<p style="text-align:justify"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}.</p>

<hr>
<p style="text-align:justify">
	All the images that appear here are the pictures we collect from various media on the internet. If there is a pictures that violates the rules or you want to give criticism and suggestions about <strong>{{ ucwords($keyword) }}</strong> please contact us on Contact Us page. Thanks.
</p>
<hr>