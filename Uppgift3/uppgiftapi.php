<?php
header("Content-Type: application/json; charset=UTF-8");

$produkt=["Ros", "Maskros", "Orkidee", "Lilja", "Blåklocka", "Solros", "Vitsippa","Äppleträd", "Vinbärsbuske","Fikonträd"];

$pris=["22kr", "12kr", "33kr", "44kr", "55kr", "66kr", "77kr", "88kr", "99kr", "100kr"];

$bild=["<img src='http://localhost/backend/uppgift3/bilder/ros.jpg'>", "<img src='http://localhost/backend/uppgift3/bilder/maskros.jpg'>",
    "<img src='http://localhost/backend/uppgift3/bilder/orchids.jpg'>", "<img src='http://localhost/backend/uppgift3/bilder/lily.jpg'>", 
    "<img src='http://localhost/backend/uppgift3/bilder/blue-bell.jpg'>", "<img src='http://localhost/backend/uppgift3/bilder/solros.jpg'>", 
    "<img src='http://localhost/backend/uppgift3/bilder/vitsippa.jpg'>", "<img src='http://localhost/backend/uppgift3/bilder/apple.jpg'>",
    "<img src='http://localhost/backend/uppgift3/bilder/vinbar.jpg'>", "<img src='http://localhost/backend/uppgift3/bilder/fikon.jpg'>"];
        
$beskrivning=["Röd", "Gul", "Rosa", "Orange", "Blå", "Gul", "Vit", "Gul", "Grön", "Gul"];

$limit = 10; 
if(isset($_GET["limit"])){  
    $limit = $_GET["limit"]; 
    
    if (!filter_var($limit, FILTER_VALIDATE_INT)) {
        echo '{"error": "Integer is not valid"}'; //jsonformat.
        die;
    }
    if($limit > 10){
        echo '{"error": "Limit must be between 1 and 10"}'; //jsonformat.
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