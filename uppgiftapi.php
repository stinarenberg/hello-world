<?php

header("Content-Type: application/json; charset=UTF-8");


$limit = 10;
if(isset($_GET['limit'])){
    $limit = $_GET['limit']; 
}



$ros=["Produkt"=>"Ros", "Färg"=>"Röd", "Pris"=>"22kr", "Bild"=>"img", "Beskrivning"=>"Beskrivning"];
$maskros=["maskros", "gul", "22kr", "img", "Beskrivning"];
$orkidee=["orkidee", "vit", "22kr", "img", "Beskrivning"];
$lilja=["Lilja", "Rosa", "22kr", "img", "Beskrivning"];
$blaklocka=["Produkt"=>"Blåklocka", "Färg"=>"Blå", "Pris"=>"22kr", "Bild"=>"img", "Beskrivning"=>"Beskrivning"];


$blommor = array("ros"=>$ros, "maskros" => $maskros, "orkidee"=>$orkidee, "lilja"=>$lilja, "blåklocka"=>$blaklocka);
//print_r($blommor);

$json = json_encode($blommor, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

echo $json;


?>