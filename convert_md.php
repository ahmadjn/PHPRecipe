<?php
require 'function.php';

// DELETE FILES BEFORE EXPORT
$export_path = 'HUGO/RESEP/content/recipes/'; // SET PATH EXPORT HERE DONT FORGET SLASH(/) AT THE END
if (!file_exists($export_path)) {
  mkdir($export_path, 0777, true);
}
$files4delete = glob($export_path.'*.html');
foreach ($files4delete as $htmlfile) {
  unlink($htmlfile);
}
$cache4delete = glob('cachetheme/*.php');
foreach ($cache4delete as $phpfile) {
  unlink($phpfile);
}

// SET JUMLAH POST PER EXPORT
$totalPosts = TOTAL_POSTS; // COUNTING START FROM "0"

// SET EXPORT
$files = glob('data/*.json', GLOB_BRACE);
shuffle($files);
$i = 0;
foreach($files as $key => $file) {
  $json_file = file_get_contents($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
  $json_data = json_decode($json_file, true);
  $json_data = $json_data[0];

  $title = html_entity_decode($json_data['title']);
  $title = preg_replace('/[^a-zA-Z0-9 -]+/', '', $title);
  $slug = strtolower(str_replace(' ', '-', $title));
  $description = $json_data['description'];
  $category = $json_data['category'];
  $image = $json_data['image'];
  $image = urldecode(str_replace('https://imagesvc.meredithcorp.io/v3/mm/image?url=', '', $image));
  $image = str_replace('https://', 'https://cdn.statically.io/img/', $image);
  $ingredient = $json_data['ingredient'];
  $instruction = $json_data['instruction'];
  $nutrition = $json_data['nutrition'];
  $yield = $json_data['yield'];
  $preptime = $json_data['preptime'];
  $cooktime = $json_data['cooktime'];
  $totaltime = $json_data['totaltime'];
  $review = $json_data['review'];

  $data['title'] = $title;
  $data['slug'] = $slug;
  $data['description'] = $description;
  $data['category'] = $category;
  $data['image'] = $image;
  $data['ingredient'] = $ingredient;
  $data['instruction'] = $instruction;
  $data['nutrition'] = $nutrition;
  $data['yield'] = $yield;
  $data['preptime'] = $preptime;
  $data['cooktime'] = $cooktime;
  $data['totaltime'] = $totaltime;
  $data['review'] = $review;

  file_put_contents($export_path . $slug . '.html', view('image', $data, false));

  echo "File ke-".$i++." Sukses => ".$title."\n";

  if ($key===$totalPosts) {
    echo "TOTAL POST = $key";
    break;
  }
}