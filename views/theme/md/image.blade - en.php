@php
//$backdate = isset($argv[2]) ? strtotime($argv[2]) : strtotime('-1 month');
$backdate = BACK_DATE;
$schedule = SHEDULE_DATE;
@endphp
@php
$timestamp = date('Y-m-d\TH:i:s\Z', rand(strtotime($backdate), strtotime($schedule)));
@endphp
---
title: "{{ collect(['14+','15+','16+','17+','18+','19+', '20+'])->random() }} {{ ucwords($keyword) }}"
description: "@foreach($images as $key => $image)@if($key === 7)@break @endif{{ucwords($image['title'])}} @endforeach"
date: "{{ $timestamp }}"
categories:
- "Paint Color"
images:
- "{{ collect($images)->random()['url'] }}"
featuredImage: "{{ collect($images)->random()['url'] }}"
featured_image: "{{ collect($images)->random()['url'] }}"
image: "{{ collect($images)->random()['url'] }}"
author: "{{ collect(['Faisal Dora','Wilford Sigmundr','Mislav Shridevi','Rajni Juantxo','Mirthe Isay','Jeanine Arezu','Clark Euclid','Galla Zlata','Madoc Danielle','Mladenka Kuzman'])->random() }}"
keyword: "{{ strtolower($keyword) }}"
---
@php
shuffle($sentences);
@endphp

@php
$show_download = SHOW_DOWNLOAD;
$max_image = MAX_IMAGE_RESULT;
$lazyload = LAZY_LOAD;
@endphp

<!--ads/article.txt-->
@if(!empty($sentences))
<p class="px-4 py-2 text-justify text-gray-700"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} <u>{{ ucwords($keyword) }}</u> {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} </p>
<!--ads/responsive.txt-->
<p class="px-4 py-2 text-justify text-gray-700"><i>{{ ucwords($keyword) }}</i> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}</p>
@endif
@if(empty($sentences))
<p class="px-4 py-2 text-justify text-gray-700"><strong>{{ ucwords($keyword) }}</strong> - {{ collect(['Hi','Hey','Hello'])->random() }}, in {{ collect(['this particular','this specific','this kind of'])->random() }} article {{ collect(['we are going to','you will'])->random() }} provide {{ collect(['a few','several','many'])->random() }} interesting pictures of {{ ucwords($keyword) }}. We found many {{ collect(['fascinating','exciting','intriguing'])->random() }} and extraordinary {{ ucwords($keyword) }} {{ collect(['pictures','photos'])->random() }} that can be {{ collect(['suggestions','concepts','tips'])->random() }}, input and information {{ collect(['with regard to','regarding','intended for'])->random() }} you. In addition {{ collect(['in order to','to be able to'])->random() }} the {{ ucwords($keyword) }} main {{ collect(['picture','graphic','photo'])->random() }}, we also collect {{ collect(['some other','additional','various other'])->random() }} related images. Find {{ collect(['the particular','typically the'])->random() }} latest and best {{ ucwords($keyword) }} images here that {{ collect(['all of us','we all','many of us'])->random() }} get selected from {{ collect(['100s','lots','plenty'])->random() }} of other images.</p>
<!--ads/responsive.txt-->
<p class="px-4 py-2 text-justify text-gray-700">{{ collect(['All of us','We all','Many of us'])->random() }} hope you can {{ collect(['discover','locate','get'])->random() }} actually looking for {{ collect(['regarding','concerning'])->random() }} {{ ucwords($keyword) }} here. There {{ collect(['will be','is usually','is definitely'])->random() }} a large selection {{ collect(['associated with','regarding','involving'])->random() }} interesting image ideas {{ collect(['that will','of which'])->random() }} can provide information {{ collect(['in order to','to be able to'])->random() }} you. You can {{ collect(['down load','get','obtain'])->random() }} the pictures here {{ collect(['with regard to','regarding','intended for'])->random() }} free and save {{ collect(['all of them','these people'])->random() }} to be used {{ collect(['because','since','while'])->random() }} reference material or {{ collect(['utilized','applied','employed'])->random() }} as collection images {{ collect(['with regard to','regarding','intended for'])->random() }} personal use. Our {{ collect(['innovative','imaginative'])->random() }} team provides large {{ collect(['dimension','sizing','dimensions'])->random() }} images with high {{ collect(['quality','image resolution'])->random() }} or HD.</p>
@endif

@{{< relatedpost >}}

<div class="overflow-hidden">
    <div class="relative">
        <img class="object-cover w-full h-full lazyload" src="https://cdn.statically.io/img/raw.githubusercontent.com/ahmadjnweb/img/7f713174028fcde64cfd688300bf94d8f1e49d0f/loading.min.svg" data-src="{{ collect($images)->random()['url'] }}" data-srcset="{{ collect($images)->random()['url'] }}, {{ collect($images)->random()['url'] }} 1x, {{ collect($images)->random()['url'] }} 2x" data-sizes="auto" alt="{{ $image['title'] }}" onerror="this.onerror=null;this.src='https://cdn.statically.io/img/raw.githubusercontent.com/ahmadjnweb/img/7f713174028fcde64cfd688300bf94d8f1e49d0f/loading.min.svg';">
        <div class="absolute inset-x-0 bottom-0">
            <div>
                <div class="p-2 mb-2 text-sm font-semibold text-center text-white capitalize bg-indigo-600 bg-opacity-75 hover:bg-opacity-90">
                    <h2>{{ collect(['14+','15+','16+','17+','18+','19+', '20+'])->random() }} {{ collect(['Pictures','Images'])->random() }} {{ ucwords($keyword) }} (Free Download)</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ads/article.txt-->
@if(!empty($sentences))
<p class="px-4 py-2 text-justify text-gray-700"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} <u>{{ ucwords($keyword) }}</u> {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} </p>
<!--ads/responsive.txt-->
<p class="px-4 py-2 text-justify text-gray-700"><i>{{ ucwords($keyword) }}</i> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}</p>
@endif

@foreach($images as $key => $image)
@if($key === $max_image)
@break
@endif

<div class="w-11/12 mx-auto my-4 overflow-hidden border-2 border-indigo-500 shadow-md">
    <h3 class="p-4 text-lg font-semibold leading-5 tracking-tight text-center text-white uppercase bg-indigo-500">
        {{ $image['title'] }}
    </h3>
    <div class="overflow-hidden">
        <img class="object-cover w-full h-auto duration-200 ease-in-out transform scale-110 hover:scale-100 lazyload" src="https://cdn.statically.io/img/raw.githubusercontent.com/ahmadjnweb/img/7f713174028fcde64cfd688300bf94d8f1e49d0f/loading.min.svg" data-src="{{ cdn_image($image['url']) }}" data-srcset="{{ cdn_image($image['url']) }}, {{ cdn_image($image['url']) }} 1x, {{ cdn_image($image['url']) }} 2x" data-sizes="auto" alt="{{ $image['title'] }}" onerror="this.onerror=null;this.src='https://cdn.statically.io/img/raw.githubusercontent.com/ahmadjnweb/img/7f713174028fcde64cfd688300bf94d8f1e49d0f/loading.min.svg';">
    </div>
</div>

@if($loop->iteration == 6)

<p class="px-4 py-2 text-justify text-gray-700">
    <strong>{{ ucfirst($keyword) }}</strong> - To {{ collect(['observe','notice','discover'])->random() }} the image more {{ collect(['obviously','plainly','evidently'])->random() }} in this article, {{ collect(['you are able to','you may','you could'])->random() }} click on the {{ collect(['preferred','wanted'])->random() }} image {{ collect(['to see','to watch','to look at'])->random() }} the {{ collect(['picture','graphic','photo'])->random() }} in its original {{ collect(['dimension','sizing','dimensions'])->random() }} or in full. {{ collect(['A person','An individual'])->random() }} can also {{ collect(['see the','look at'])->random() }} {{ ucwords($keyword) }} image gallery that {{ collect(['all of us','we all','many of us'])->random() }} get prepared to {{ collect(['discover','locate','get'])->random() }} the image {{ collect(['you are searching for','you are interested in'])->random() }}.
</p>
<p class="px-4 py-2 text-justify text-gray-700">
    {{ collect(['All of us','We all','Many of us'])->random() }} provide many pictures {{ collect(['associated with','linked to','relevant to'])->random() }} {{ ucwords($keyword) }} because our {{ collect(['web site concentrates on','web site targets','web site is targeted on','site concentrates on','site targets','site is targeted on','internet site concentrates on','internet site targets','internet site is targeted on'])->random() }} articles or {{ collect(['articles','content','discussions'])->random() }} {{ collect(['associated with','linked to','relevant to'])->random() }} {{ ucwords($keyword) }}. Please {{ collect(['examine','verify','check out'])->random() }} our latest article {{ collect(['upon','about','in'])->random() }} the side if {{ collect(['a person','an individual'])->random() }} don't {{ collect(['discover the','get the','obtain the'])->random() }} {{ ucwords($keyword) }} {{ collect(['picture','graphic','photo'])->random() }} you are looking {{ collect(['with regard to','regarding','intended for'])->random() }}. {{ collect(['There are numerous','There are several','There are various'])->random() }} keywords related {{ collect(['in order to','to be able to'])->random() }} and {{ collect(['associated with','linked to','relevant to'])->random() }} {{ ucwords($keyword) }} {{ collect(['right here','in this article','below'])->random() }} that you can {{ collect(['search','surf'])->random() }} our main page {{ collect(['or even','or perhaps'])->random() }} homepage.
</p>
<p class="px-4 py-2 text-justify text-gray-700">
    Hopefully you {{ collect(['discover','locate','get'])->random() }} the image you {{ collect(['are usually','will be','happen to be'])->random() }} looking for and {{ collect(['all of us','we all','many of us'])->random() }} hope {{ collect(['you prefer','you want','you enjoy'])->random() }} the {{ ucwords($keyword) }} images {{ collect(['which are','which can be','which might be'])->random() }} here, {{ collect(['therefore','thus','consequently'])->random() }} that maybe {{ collect(['they could be','they may be','they might be'])->random() }} {{ collect(['a good','a great','the'])->random() }} inspiration or ideas {{ collect(['within','inside','throughout'])->random() }} the future.
</p>
<p class="px-4 py-2 text-justify text-gray-700">
    All {{ ucwords($keyword) }} images that we {{ collect(['existing','provide','found'])->random() }} in this article {{ collect(['are usually','will be','happen to be'])->random() }} sourced from the {{ collect(['web','world wide web','net'])->random() }}, so if you {{ collect(['discover','locate','get'])->random() }} images with copyright {{ collect(['problems','concerns'])->random() }}, please send your {{ collect(['statement','record','review'])->random() }} on the contact {{ collect(['web page','webpage','site'])->random() }}. Likewise with problematic {{ collect(['or even','or perhaps'])->random() }} damaged image links {{ collect(['or even','or perhaps'])->random() }} images that don't {{ collect(['show up','seem','look'])->random() }}, {{ collect(['then you can certainly','then you could','then you can definitely'])->random() }} report this {{ collect(['as well','also'])->random() }}. {{ collect(['We now have','We certainly have'])->random() }} provided {{ collect(['a type','a contact form','a kind'])->random() }} for you to {{ collect(['complete','fill in','submit'])->random() }}.
</p>
@foreach(collect($sentences)->chunk(3) as $chunked_sentences)
<p class="px-4 py-2 text-justify text-gray-700">
    @if($loop->first)
    <strong>{{ ucfirst($keyword) }}</strong> -
    @endif

    @foreach($chunked_sentences as $chunked_sentence)
    {{ $chunked_sentence }}
    @endforeach
</p>

@endforeach


@endif

@endforeach


@if(!empty($sentences))
<p class="px-4 py-2 text-justify text-gray-700"><strong>{{ ucwords($keyword) }}</strong> - {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }} {{ @array_pop($sentences) }}</p>
@endif

@if(empty($sentences))
<p class="px-4 py-2 text-justify text-gray-700"><strong>{{ ucwords($keyword) }}</strong> - The pictures related {{ collect(['in order to','to be able to'])->random() }} {{ ucwords($keyword) }} {{ collect(['in this post','in the following paragraphs','on this page'])->random() }}, hopefully {{ collect(['these people','they will','that they'])->random() }} can be useful {{ collect(['and may','and will'])->random() }} increase your knowledge. {{ collect(['Say thanks to','Give thanks to','Appreciate'])->random() }} you for {{ collect(['making the effort','finding the time','spending some time'])->random() }} {{ collect(['in order to','to be able to'])->random() }} visit our website {{ collect(['plus','in addition to','and even'])->random() }} read our articles. {{ collect(['Cya','Bye'])->random() }} ~.</p>
@endif