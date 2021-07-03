<?php
require 'function.php';

// $listsitemap = file('list_sitemap.txt');
$listsitemap = glob('xml_files/*.xml'); //for local files

file_put_contents('list_url.txt', '');
foreach ($listsitemap as $urls){
    try {
        echo $urls."\n";
        $xml = file_get_contents($urls);
        if (strpos($urls, '.gz')) {
            $xml = gzdecode($xml);
        }
        $xml = new SimpleXMLElement($xml);
        file_put_contents('cek.txt', $xml);
        die();
        foreach ($xml->url as $url_list) {
            try {
                $url = $url_list->loc;
                if(strpos($url, "https://www.allrecipes.com/recipe/")) {
                    echo $url."\n";
                    file_put_contents('list_url.txt', $url."\n", FILE_APPEND | LOCK_EX);
                }
            } catch (\Exception $e) {
                echo $e;
                continue;
            }
        }
    } catch (\Exception $e) {
        echo $e;
        continue;
    }
}
$lines = file('list_url.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$lines = array_unique($lines);
file_put_contents('list_url.txt', implode(PHP_EOL, $lines));