
<?php

// header stuffs

header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
$title = "Dog Images and Facts api";
$host = $_SERVER['SERVER_NAME'];

//get status 

include '../status.php';

//get facts

$fact_raw = file("facts.txt");
$image_raw = file("image.txt");

//Shuffle Facts

Shuffle($fact_raw);
$fact = implode("<br>", array_slice($fact_raw, 0, 1));
Shuffle($image_raw);
$image = implode("<br>", array_slice($image_raw, 0, 1));

//create JSON stuffs

$array = array(["title" => $title, "status" => $status, "fact" => $fact, "image" => $image]);

//Turn it into JSON

$json = json_encode($array);

//Display JSON Data

echo $json;

?>

