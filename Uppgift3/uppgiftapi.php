<?php
header("Content-Type: application/json; charset=UTF-8");

$limit = 10;

if(isset($_GET['limit'])){
    $limit = $_GET['limit']; 
}

$corgi=[
    "Produkt"=>"Corgi", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/corgi.jpg'>", 
    "Beskrivning"=>"Hund med stora öron och korta ben."];

$granddanois=[
    "Produkt"=>"Grand Danois", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/granddanois.jpg'>", 
    "Beskrivning"=>"Extremt stor hund."];

$schafer=[
    "Produkt"=>"Schäfer", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/schafer.jpg'>", 
    "Beskrivning"=>"Stor långhårig hund."];

$franskbulldog=[
    "Produkt"=>"Fransk Bulldog", 
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/franskbulldog.jpg'>", 
    "Beskrivning"=>"Liten söt hund."];

$husky=[
    "Produkt"=>"Husky",
    "Pris"=>"22kr", 
    "Bild"=>"<img src='http://localhost/backend/Uppgift3/husky.jpg'>", 
    "Beskrivning"=>"Slädhund."];
    
$dogs = array(
    $corgi, 
    $granddanois, 
    $schafer, 
    $franskbulldog, 
    $husky);


$json = json_encode($dogs, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;

?>