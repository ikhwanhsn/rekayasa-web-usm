<!-- Encoded code -->
<?php
$carBrands = array("Ferrari", "Lamborghini", "Rolls-Royce", "Bentley", "Bugatti");
$jsonData = json_encode($carBrands);
echo $jsonData . "<br><br>";
?>

<!-- Decoded code -->
 <?php
$jsonCarData = '{
    "brand": "Ferrari",
    "model": "SF90 Stradale",
    "price": 507000
}';

$carObject = json_decode($jsonCarData);
$carArray = json_decode($jsonCarData, true);

echo "Brand (Object): " . $carObject->brand . "<br>";
echo "Model (Object): " . $carObject->model . "<br>";
echo "Price (Object): $" . $carObject->price . "<br><br>";

echo "Brand (Array): " . $carArray['brand'] . "<br>";
echo "Model (Array): " . $carArray['model'] . "<br>";
echo "Price (Array): $" . $carArray['price'] . "<br>";
 ?>