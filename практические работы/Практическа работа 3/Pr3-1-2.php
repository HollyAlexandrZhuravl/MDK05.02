<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая работа 3.Циклы</h1>
   <h2>Задание 1</h2>
   <?php
$startNumber = 2;   
$multiplier = 2;    
$quantity = 13;      

$currentNumber = $startNumber;

for ($i = 0; $i < $quantity; $i++) {
    echo $currentNumber . " ";
    $currentNumber *= $multiplier;
}
?>
<h2>Задание 2</h2>
<?php
$lastNumber = 3; 
$sum = 10;

for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i; 
}
echo $sum;
?>
<h2>Задание 3</h2>
<?php
$lastNumber = 8;
$multiplicationResult = 0.5;
for ($i = 2; $i <= $lastNumber; $i += 2) {
    $multiplicationResult *= $i;
}
echo $multiplicationResult;
?>
<h2>Задание</h2>
<?php
$n = 7; 
$distance = 10;   
$total_path = 0;  
for ($day = 1; $day <= $n; $day++) {
    $total_path += $distance;      
    $distance *= 1.10;             
}
echo "За $n дней спортсмен суммарно пробежит: " . round($total_path, 2) . " км.";
?>
</body>
</html>