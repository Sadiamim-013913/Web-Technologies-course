<?php
$name = $buyingprice = $sellingprice = $display = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST["name"];
    $buyingprice=$_POST["buyingprice"];
    $sellingprice=$_POST["sellingprice"];
    $display=$_POST["display"];
    
}
?>