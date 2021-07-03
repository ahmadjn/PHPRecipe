<?php 
require_once __DIR__ . '/vendor/autoload.php';
require_once 'function.php';

set_error_handler("exception_error_handler");

use duzun\hQuery;

$cache = 'cache';
if (!file_exists($cache)) {
    mkdir($cache , 0777, true);
}
$files = glob('linkrecipes/'.URL_RECIPES.'/*.txt', GLOB_BRACE);

foreach($files as $file) {
  $links = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $i = 1;
  foreach($links as $link){
        try {
            $link4check = strtolower($link);
            $link4check = preg_replace('/.*(?=\/)/', '', $link4check);
            $link4check = preg_replace('/[^a-z0-9 -]+/', '', $link4check);
            $link4check = "$cache"."/"."$link4check".".gz";
            if (file_exists($link4check)) {
                clearstatcache();
                if(filesize($link4check) < 1024 ) {
                    unlink($link4check);
                }
            }
            if (file_exists($link4check)) {
                $jsonresep = gzdecode(file_get_contents($link4check));
            } else {
                $url = grab_curl($link);
                $doc = hQuery::fromHTML($url);
                $jsonresep = $doc->find('script[type="application/ld+json"]');
                file_put_contents($link4check, $jsonresep);
                $gzdata = file_get_contents($link4check);
                $gzdata = gzencode($gzdata, 9);
                file_put_contents($link4check, $gzdata);
            }
            $jsonresep = json_decode($jsonresep, true);

            if(URL_RECIPES === 'allrecipes'){
                $data = parse_allrecipes($jsonresep); //PARSE FOR ALLRECIPES.COM
            }
            
            if(URL_RECIPES === 'food'){
                $data = parse_food($jsonresep); //PARSE FOR FOOD.COM
            }

            $namafile = strtolower($title);
            $namafile = preg_replace('/[^a-z0-9 -]+/', '', $namafile);
            $namafile = str_replace(' ', '-', $namafile);
            if (!file_exists('data')) {
                mkdir('data', 0777, true);
            }
            $linkjson = "data/$namafile.json";
            $jsonfinal = file_put_contents($linkjson, $data);
            if ($jsonfinal)
            echo "File ke-". $i++. " =>".$link." JSON file created successfully... \n " ;
            else 
            echo "Error File ke-". $i++. " =>".$link." Oops! Error creating json file... \n ";
            clearstatcache();
        } catch (\Exception $e) {
            echo "Error File ke-". $i++. " =>".$link." Oops! Error!!! \n ";
            echo "$e \n";
            sleep(10);
            continue;
        }
    }
}