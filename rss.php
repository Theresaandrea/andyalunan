<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://foodhubby.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $drinks = $data->getElementsByTagName("Drinks")->item(0)->nodeValue;
    $fried = $data->getElementsByTagName("Fried")->item(0)->nodeValue;
    $meals = $data->getElementsByTagName("Meals")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Drinks: <strong>$drinks</strong></li>
    <li>Fried: <strong>$fried</strong></li>
    <li>Meals: <strong>$meals</strong></li>
    </ul>";
}
