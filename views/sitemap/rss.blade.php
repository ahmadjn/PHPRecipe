@php

$site_name  = site_name();

$desc     = "Get Article news from ".$site_name;

$base_url   = home_url();
$current_url= current_url();
$domain_url = domain_url();

$category   = 'wallpaper';

$domain   = str_replace(['https://','http://','/'],'',$base_url);

$years    = date('Y');

$editor   = 'admin@'.$domain_url;
$webmaster  = 'webmaster@'.$domain_url;

$max_rss  = MAX_RSS;

@endphp

{!! '<' . '?' . "xml version='1.0' encoding='UTF-8'?>" !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>{{$site_name}} - RSS Feed</title>
    <description>{{$desc}}</description>
    <link>{{$base_url}}</link>
    <atom:link href="{{$current_url}}" rel="self" type="application/rss+xml"/>
    <category domain="{{$domain}}">{{$category}}</category>
    <copyright>Copyright {{$years}} {{$site_name}}, Inc.</copyright>
    <docs>{{$current_url}}</docs>
    <language>en-us</language>
    <lastBuildDate>Mon, 1 Nov 2004 13:17:17 -0500</lastBuildDate>
    <managingEditor>{{$editor}} (editor)</managingEditor>
    <pubDate>Tue, 26 Oct 2004 14:06:44 -0500</pubDate>
    <webMaster>{{$webmaster}} (webmaster)</webMaster>
    <generator>Shuriken MOD</generator>
  @foreach(collect($list)->shuffle()->take($max_rss) as $keyword)
  @php
  $title    = ucwords($keyword);

  $post_url   = image_url($keyword);

  $desc     = "";

  $arr_desc = sentences_fromdata($keyword); 

  $arr_desc = array_slice($arr_desc, 0, 4);

  if($arr_desc)
  {
    $desc   = implode('. ',$arr_desc);
  }
  
  $link   = "<a href='".$post_url."'>view details</a>";
  $desc   .= "You can look new details of ".$title." by click this link : ".$link;
  
  $desc     = $desc;
  
  $post_date  = date('r', time());
  @endphp

    <item>
      <title>{{$title}}</title>
      <description>{{$desc}}</description>
      <link>{{$post_url}}</link>
      <pubDate>{{$post_date}}</pubDate>
      <guid>{{$post_url}}</guid>
    </item>
    @endforeach

  </channel>
</rss>