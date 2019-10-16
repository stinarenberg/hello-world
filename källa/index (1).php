<?php
header("Content-Type: application/json; charset=UTF-8");

$produkt=["Ros", "Maskros", "Orkidee", "Lilja", "Blåklocka", "Solros", "Vitsippa","Äppleträd", "Vinbärsbuske","Fikonträd"];

$pris=["22kr", "12kr", "33kr", "44kr", "55kr", "66kr", "77kr", "88kr", "99kr", "100kr"];

$bild=["http://renbergs.eu/api/products/img/ros.jpg", "http://renbergs.eu/api/products/img/maskros.jpg",
    "http://renbergs.eu/api/products/img/orchids.jpg", "http://renbergs.eu/api/products/img/lily.jpg", 
    "http://renbergs.eu/api/products/img/blue-bell.jpg", "http://renbergs.eu/api/products/img/solros.jpg", 
    "http://renbergs.eu/api/products/img/vitsippa.jpg", "http://renbergs.eu/api/products/img/apple.jpg",
    "http://renbergs.eu/api/products/img/vinbar.jpg", "http://renbergs.eu/api/products/img/fikon.jpg"];
        
$beskrivning=["Röd", "Gul", "Rosa", "Orange", "Blå", "Gul", "Vit", "Gul", "Grön", "Gul"];

$limit = 10; 
if(isset($_GET["limit"])){  
    $limit = $_GET["limit"]; 
    
    if (!filter_var($limit, FILTER_VALIDATE_INT)) {
        echo '{"error": "Integer is not valid"}'; 
        die;
    }
    if($limit > 10){
        echo '{"error": "Limit must be between 1 and 10"}'; 
        die;
    }
}

$blommor =[];

for($i=0; $i<$limit ; $i++):
    
    $blomma=array(
        "produkt" => $produkt[$i],
        "pris" => $pris[$i],
        "bild" => $bild[$i],
        "beskrivning"=>$beskrivning[$i],
        "lager" => $randLager =rand(0,50)
    );

    $blommor[]=$blomma;
endfor;
            
$json = json_encode($blommor, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
echo $json;
?>