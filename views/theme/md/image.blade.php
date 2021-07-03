@php
//$backdate = isset($argv[2]) ? strtotime($argv[2]) : strtotime('-1 month');
$backdate = BACK_DATE;
$schedule = SCHEDULE_DATE;
@endphp
@php
$timestamp = date('Y-m-d\TH:i:s\Z', rand(strtotime($backdate), strtotime($schedule)));
$min = 4;
$max = 5;
@endphp
---
title: "{{do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')}}{{do_spintax('{Perfect|Ultimate|Favorite|Quick|Speedy|Homemade}')}} {{ $title }} {{do_spintax('{Tasty|Delicious}')}}"
slug: {{ $slug }}
description: "{{ $title }} Recipe - {{ $description }} {{do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')}}{{do_spintax('{Perfect|Ultimate|Favorite|Award-winning|Quick|Speedy|Super Quick Homemade|Homemade|Any-night-of-the-week}')}} {{ $title }} {{do_spintax('{Tasty|Delicious}')}}"
date: {{ $timestamp }}
image: {{ $image }}
thumbnail: {{ $image }}
cover: {{ $image }}
author: {{ $author = collect(['Tiara','Nadia','Pratiwi','Yulia','Agustina','Wulan','Utami','Ani','Suartini','Chelsea','Yuliarti','Keisha','Mardhiyah','Lili','Mandasari','Intan','Fujiati','Mala','Clara','Rika','Hastuti','Unjani','Puspasari'])->random() }}
ratingvalue: {{ rand($min*10,$max*10)/10 }}
reviewcount: {{ rand(99,999) }}
recipeingredient:
@foreach($ingredient as $bahan)
- "{{ $bahan }}"
@endforeach
recipeinstructions:
@foreach($instruction as $step)
- "{{ $step }}"
@endforeach
categories:
@foreach($category as $cat)
- "{{ preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat) }}"
@endforeach
- "Recipes"
tags: 
@foreach($category as $cat)
- "{{ strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat)) }}"
@endforeach
katakunci: {{ strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $title)) }}, @foreach($category as $cat){{ strtolower(preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat)) }}, @endforeach.
nutrition: {{ $nutrition }}
recipecuisine: Western
preptime: "{{ $preptime }}"
cooktime: "{{ $cooktime }}"
totaltime: "{{ $totaltime }}"
recipeyield: "{{ $yield }}"
recipecategory: 
@foreach($category as $cat)
- {{ preg_replace('/[^a-zA-Z0-9 -]+/', '', $cat) }}
@endforeach
quotes: {{do_spintax('{When you eat food with your family and friends, it always tastes better!|Take food as your medicine before you take medicine as your food.|Good food is the foundation of happiness.|Magic happens in the kitchen during lunch time and dinner time.|If you do not eat well, then you wont be able to think well, love well, and sleep well.|Who needs love when you can eat all the chocolate in the world.|Who needs inspirational quotes when you can just drink coffee?|If you combine good flavors, food turns into an orchestra.|There is no love more sincere than my love for food.|Food shared is happiness multiplied.}')}}
---
<!--ads/responsive.txt-->

<p class="py-2 md:text-lg">
<b>{{ $title }}</b> - {{do_spintax('{Hey everyone|Hello everybody}')}}, {{do_spintax('{I hope|hope}')}} {{do_spintax('{youre|you are}')}} having an {{do_spintax('{amazing|incredible}')}} day today. {{do_spintax('{Its|It is}')}} me again {{$author}} , welcome to {{do_spintax('{my|our}')}} recipe {{do_spintax('{website|site}')}}. Today, {{do_spintax('{Im gonna show you how|we are going|I will show you a way}')}} to {{do_spintax('{prepare|make}')}} a {{do_spintax('{special|distinctive}')}} dish, {{$title}}. {{do_spintax('{It is one|One}')}} of my favorites {{do_spintax('{food recipes|recipes}')}}. {{do_spintax('{For mine|This time}')}}, I{{do_spintax('{ will|m gonna| am going to}')}} make it a little bit {{do_spintax('{tasty|unique}')}}. This {{do_spintax('{will be really|is gonna smell and look}')}} delicious.
</p>

<!--ads/article.txt-->

<p class="ml-2 p-4 text-justify italic md:text-xl text-gray-800 border-l-8 border-gray-400 bg-gray-200">
{{$title}} is {{ $description }}
</p>

<!--ads/responsive.txt-->

<p class="py-2 md:text-lg">{{$title}} is one of the most {{do_spintax('{popular|favored|well liked}')}} of {{do_spintax('{current|recent}')}} trending {{do_spintax('{meals|foods}')}} {{do_spintax('{in the world|on earth}')}}. {{do_spintax('{its|It is}')}} {{do_spintax('{easy|simple}')}}, {{do_spintax('{its|it is}')}} {{do_spintax('{fast|quick}')}}, it tastes {{do_spintax('{delicious|yummy}')}}. {{do_spintax('{its|It is}')}} {{do_spintax('{enjoyed|appreciated}')}} by millions {{do_spintax('{every day|daily}')}}. {{do_spintax('{its|It is}')}} {{do_spintax('{easy|simple}')}}, {{do_spintax('{its|it is}')}} {{do_spintax('{fast|quick}')}}, it tastes {{do_spintax('{delicious|yummy}')}}. {{$title}} is something {{do_spintax('{that|which}')}} {{do_spintax('{I ve|I have}')}} loved my {{do_spintax('{entire|whole}')}} life. {{do_spintax('{They re|They are}')}} {{do_spintax('{nice|fine}')}} and they look {{do_spintax('{wonderful|fantastic}')}}. {{do_spintax('{They re|They are}')}} {{do_spintax('{nice|fine}')}} and they look {{do_spintax('{wonderful|fantastic}')}}. {{$title}} is something {{do_spintax('{that|which}')}} {{do_spintax('{I ve|I have}')}} loved my {{do_spintax('{entire|whole}')}} life.</p>

<!--ads/article.txt-->

<div class="border-2 border-green-800 rounded-xl shadow-md my-2 overflow-hidden">
    <h2 class="text-green-800 text-center font-bold text-lg md:text-xl p-2">
    {{do_spintax('{{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare|Cook} |Recipe of |{How|Easiest Way|Steps|Simple Way|Step-by-Step Guide} to {Make|Prepare} }')}}{{do_spintax('{Perfect|Ultimate|Favorite|Award-winning|Quick|Speedy|Super Quick Homemade|Homemade|Any-night-of-the-week}')}} {{ $title }} {{do_spintax('{Tasty|Delicious}')}}
	</h2>
    <img src="{{ $image }}" alt="Donat Killer Soft Bread" class="object-cover w-full border-t-2 border-green-800 lazyload">
</div>

<p class="ml-2 p-4 text-justify italic md:text-xl text-gray-800 border-l-8 border-gray-400 bg-gray-200">
To {{do_spintax('{get started|begin}')}} with {{do_spintax('{this|this particular}')}} recipe, we {{do_spintax('{have to|must}')}} first prepare a few {{do_spintax('{ingredients|components}')}}. You can {{do_spintax('{cook|have}')}} {{$title}} using {{count($ingredient)}} ingredients and {{count($instruction)}} steps. Here is how you {{do_spintax('{cook|can achieve}')}} {{do_spintax('{that|it}')}}.
</p>

<!--ads/article.txt-->

<h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2">The ingredients needed to make {{ $title }}:</h2>

<ul class="list-disc list-inside">
@foreach($ingredient as $bahan)
<li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
{{do_spintax('{Prepare|Take|Get|Make ready}')}} {{ $bahan }}
</li>
@endforeach
</ul>

<!--ads/responsive.txt-->

<h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2">{{do_spintax('{Steps|Instructions|Step by Step}')}} to {{do_spintax('{make|create|cook}')}} {{ $title }}:</h2>

<ol class="list-inside">
@foreach($instruction as $step)
<li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
{{ $step }}
</li>
@endforeach
</ol>

<!--ads/article.txt-->

<p class="py-2 md:text-lg">
So {{do_spintax('{thats|that is}')}} going to wrap {{do_spintax('{it|this}')}} up {{do_spintax('{for|with}')}} this {{do_spintax('{special|exceptional}')}} food {{$title}} recipe. {{do_spintax('{Thanks so much|Thank you very much}')}} for {{do_spintax('{your time|reading}')}}. {{do_spintax('{Im|I am}')}} {{do_spintax('{sure|confident}')}} {{do_spintax('{you|that you}')}} {{do_spintax('{can|will}')}} make this at home. {{do_spintax('{There is|Theres}')}} gonna be {{do_spintax('{more|another}')}} interesting food {{do_spintax('{at|in}')}} home recipes coming up. {{do_spintax('{Remember|Dont forget}')}} to {{do_spintax('{save|bookmark}')}} this page {{do_spintax('{on|in}')}} your browser, and share it to your {{do_spintax('{family|loved ones}')}}, {{do_spintax('{friends and colleague|colleague and friends}')}}. {{do_spintax('{Thanks again|Thank you}')}} for reading. Go on get cooking!
</p>

<!--ads/responsive.txt-->

@if(!empty($review))
    <h2 class="text-green-800 font-bold text-lg md:text-xl py-4 pl-2 border-t-2 border-b-2 border-green-800 mt-6 mb-2">Reviews of {{ $title }}:</h2>
    <ul class="list-disc list-inside">
    @foreach($review as $rev)
    <li class="pl-4 py-2 text-gray-800 bg-green-100 font-medium md:text-lg rounded-3xl mb-2">
    <b>{{ $rev['name'] }}</b> - {{ $rev['body'] }}
    </li>
    @endforeach
    </ul>
@endif
