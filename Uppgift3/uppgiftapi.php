<?php
header("Content-Type: application/json; charset=UTF-8");

$corgi=[
    "Produkt"=>"Corgi", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/corgi.jpg'>", 
    "Beskrivning"=>"Beskrivning av produkt."];

$granddanois=[
    "Produkt"=>"Grand Danois", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/granddanois.jpg'>", 
    "Beskrivning"=>"Beskrivning av produkt."];

$schafer=[
    "Produkt"=>"Schäfer", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/schafer.jpg'>", 
    "Beskrivning"=>"Beskrivning av produkt."];

$franskbulldog=[
    "Produkt"=>"Fransk Bulldog", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/franskbulldog.jpg'>", 
    "Beskrivning"=>"Beskrivning av produkt."];

$husky=[
    "Produkt"=>"Husky",
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/husky.jpg'>", 
    "Beskrivning"=>"Beskrivning av produkt."];
// //Nedanför: multidimensionell array med dogs som rubrik
// $dogs = array(
//     "dogs" => [$corgi, 
//     $granddanois, 
//     $schafer, 
//     $franskbulldog, 
//     $husky]);


$limit = 10; //defaultvärde
if(isset($_GET["limit"])){ // kontrollerar om det finns data i min getrequest 
    $limit = $_GET["limit"]; //50
}

//Multidimensionell array i for-loop.
$dogs =[];
//fungerar nu en multidimensionell array som heter dogs med alla hundar i - fungerar inte med "limit".  
for($i=0; $i<$limit ; $i++):
    $dogs = array("dogs" => [$corgi, 
        $granddanois, 
        $schafer, 
        $franskbulldog, 
        $husky]);
endfor;

$json = json_encode($dogs, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;

?>