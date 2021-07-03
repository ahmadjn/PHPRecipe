@php
$default_author = 'Admin';
$site_url = 'http://example.com/';
//$backdate = isset($argv[1]) ? strtotime($argv[1]) : strtotime('-1 month');
$backdate 	= BACK_DATE;
$schedule 	= SHEDULE_DATE;
$wp_cat 	= WP_CATEGORY;
$category 	= isset($argv[2]) ? $argv[2] : $wp_cat;
@endphp
{!! '<' . '?' . "xml version='1.0' encoding='UTF-8'?>" !!}
<rss version="2.0"
	xmlns:excerpt="http://wordpress.org/export/1.0/excerpt/"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:wp="http://wordpress.org/export/1.0/"
>

<channel>
	<title>My Site</title>
	<link>http://example.com/</link>
	<description></description>
	<pubDate>Thu, 28 May 2009 16:06:40 +0000</pubDate>
	<wp:author><wp:author_id>1</wp:author_id><wp:author_login><![CDATA[admin]]></wp:author_login><wp:author_email><![CDATA[buchin@dropsugar.com]]></wp:author_email><wp:author_display_name><![CDATA[admin]]></wp:author_display_name><wp:author_first_name><![CDATA[]]></wp:author_first_name><wp:author_last_name><![CDATA[]]></wp:author_last_name></wp:author>
	
	<generator>http://wordpress.org/?v=2.7.1</generator>
	<language>en</language>
	<wp:wxr_version>1.0</wp:wxr_version>
	<wp:base_site_url>http://example.com/</wp:base_site_url>
	<wp:base_blog_url>http://example.com/</wp:base_blog_url>

	@foreach($keywords as $post_id => $keyword)
		@php
			$data = get_data(new_slug($keyword));
			$data['keyword'] = $keyword;
			$post_title = $keyword;
			$slug = new_slug( $post_title );
			$slug = urlencode($slug);
			$post_date =  date("Y-m-d\TH:i:s\Z", rand(strtotime($backdate), strtotime($schedule)));
			if(empty($data['images'])){ continue; }
			$post_content = export('export.post', $data);
			$post_content = Minify_Html($post_content);
		@endphp
		<item>
			<title><![CDATA[{{ ucwords($keyword) }}]]></title>
			
			<link>{{ $site_url }}{{ $slug }}/</link>
			<pubDate>{{ date("Y-m-d\TH:i:s\Z") }}</pubDate>

			<dc:creator><![CDATA[{{ $default_author }}]]></dc:creator>
			<wp:postmeta>
				<wp:meta_key>_byline</wp:meta_key>
				<wp:meta_value>{{ $default_author }}</wp:meta_value>
			</wp:postmeta>

			@php
			$category = trim( $category );
			$cat_slug = new_slug( $category );
			@endphp

			<category><![CDATA[{{ $category }}]]></category>
			<category domain="category" nicename="{{ $cat_slug }}"><![CDATA[{{ $category }}]]></category>
			
			@php
				$tags = $data['related']??'';
			@endphp

			@foreach ( $tags as $tag )
				@if( !empty( $tag ))
					@php
					$tag_slug = new_slug( $tag );
					@endphp

					<category domain="tag" nicename="{{ $tag_slug }}"><![CDATA[{{ $tag }}]]></category>
				@endif
			@endforeach
			
		
			<guid isPermaLink="false">{{ $site_url }}?p={{ $post_id }}</guid>
			<description></description>
			<content:encoded><![CDATA[{!! $post_content !!}]]></content:encoded>
			<excerpt:encoded><![CDATA[]]></excerpt:encoded>
			<wp:post_id>{{ $post_id }}</wp:post_id>
			<wp:post_date_gmt>{{ $post_date }}</wp:post_date_gmt>
			<wp:comment_status>open</wp:comment_status>
			<wp:ping_status>closed</wp:ping_status>
			<wp:post_name>{{ $slug }}</wp:post_name>

			<wp:status>publish</wp:status>
			<wp:post_parent>0</wp:post_parent>
			<wp:menu_order>0</wp:menu_order>
			<wp:post_type>post</wp:post_type>
			<wp:post_password></wp:post_password>
			
			<wp:postmeta>
				<wp:meta_key>_old_id</wp:meta_key>
				<wp:meta_value>{{ $post_id }}</wp:meta_value>
			</wp:postmeta>


		</item>
		
	@endforeach

</channel>
</rss>
