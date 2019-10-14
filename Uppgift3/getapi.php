<?php


// Hämta antal med GET länkar?

// 1. ange en endpoint (resurs, resource)
//skapa en variabel för din endpoint
$url = "http://localhost/backend/uppgift3/uppgiftapi.php?limit=5";

// 2. hämta data
//metod i PHP file_get_contents - lagra i en variabel.
$json = file_get_contents($url);

// 3. Testa data genom att skriva ut allt på skärmen
// echo "<pre>";
// echo $json;
// echo "</pre>";


// 4. Konvertera JSON till en PHP-Array
$array= json_decode($json, true);
// echo "<pre>";
// print_r($array);
// echo"</pre>";


echo "<ul>";
foreach($array as $key => $value){
    echo "<li>";
    echo $value["bild"];
    echo "<br>";
    echo $value["produkt"] . " ";
    echo $value ["pris"]  . " ";
    echo $value ["beskrivning"]  . " ";
    echo "i lager:";
    echo $value ["lager"]  . " ";
    echo "</li>";
}
echo "</ul>";



?>