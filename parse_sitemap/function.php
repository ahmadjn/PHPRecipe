<?php
function grab_curl($url)
{
    $data = curl_init();

    $cookies_path = 'cookies/'; // SET PATH EXPORT HERE DONT FORGET SLASH(/) AT THE END
    if (!file_exists($cookies_path)) {
    mkdir($cookies_path, 0777, true);
    }

    $header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
    $header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
    $header[] = "Cache-Control: max-age=0";
    $header[] = "Connection: keep-alive";
    $header[] = "Keep-Alive: 300";
    $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $header[] = "Accept-Language: en-us,en;q=0.5";
    $header[] = "Pragma: ";
    curl_setopt($data, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($data, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($data, CURLOPT_URL, $url);
    curl_setopt($data, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)');
    curl_setopt($data, CURLOPT_HTTPHEADER, $header);
    curl_setopt($data, CURLOPT_REFERER, '');
    curl_setopt($data, CURLOPT_ENCODING, 'gzip,deflate');
    curl_setopt($data, CURLOPT_AUTOREFERER, true);
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($data, CURLOPT_TIMEOUT, 60);
    curl_setopt($data, CURLOPT_MAXREDIRS, 7);
    curl_setopt($data, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($data, CURLOPT_COOKIEJAR, $cookies_path."cookies.txt");
    curl_setopt($data, CURLOPT_COOKIEFILE, $cookies_path."cookies.txt");

    $render_output = curl_exec($data);

    curl_close($data);

    return $render_output;
}