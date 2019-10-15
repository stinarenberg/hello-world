<?php
// 1. ange en endpoint (resurs, resource)
//skapa en variabel för din endpoint - avsluta med länkar - ?limit=5 .
$limit = 10; 

//har formulär i webb.php istället

// echo "<a href='?limit=5'>Visa 5 produkter</a>";
// echo "<br>";
// echo "<a href='?limit=10'>Visa alla produkter</a>"; 
// echo "<br>";
// echo "<a href='?limit=20'>Visa 20 produkter - test</a>"; 
// echo "<br>";

if(isset($_GET['limit'])) {
    if($_GET['limit'] > 10){
        echo "För många produkter - max 10";
        return;
    }
    if($_GET['limit'] < 1){
        echo "För få produkter, välj minst 1";
        return;
    }
    echo "Visar: ".$_GET['limit'] . " produkter.";
        $link ="http://localhost/backend/uppgift3/uppgiftapi.php?limit=";
        $getlimit = $_GET['limit'];
        $url = $link.=$getlimit;
    echo "<br>";
    } 
    else
$url = "http://localhost/backend/uppgift3/uppgiftapi.php";

// 2. hämta data
//metod i PHP file_get_contents - lagra i en variabel.
$json = file_get_contents($url);
// 4. Konvertera JSON till en PHP-Array
$array= json_decode($json, true);

echo "<div class='visa'>";
foreach($array as $key => $value){
    echo "<div class='kort'>";
        echo $value['bild'];
        echo "<div class='kort-body'>";
        echo "<h5 class='kort-title'>";
        echo $value['produkt'];
        echo "</h5>";
        echo "<p class='kort-text'>";
        echo $value ['beskrivning']."<br>";
        echo '<br>';
        echo $value ['pris']."<br>" ; 
        echo "</p>";
        echo "<button type='button' class='btn btn-info'>Köp</button>";
        echo "<p class='kort-text'>";
        echo '<br>';
        echo "Kvar i lager: " . $value ['lager'];
        echo "</p>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
}
echo "</div>";
?>