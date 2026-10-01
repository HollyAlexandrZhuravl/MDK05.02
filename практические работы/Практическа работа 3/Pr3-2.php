<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Получаем два угла из адреса страницы (например: Pr3.php?a=45&b=45)
$a = isset($_GET['a']) ? (float)$_GET['a'] : 0;
$b = isset($_GET['b']) ? (float)$_GET['b'] : 0;

// 1. Проверяем, существует ли треугольник
if ($a > 0 && $b > 0 && ($a + $b) < 180) {
    echo "Треугольник существует. ";
    
    // 2. Проверяем, прямоугольный ли он
    if ($a == 90 || $b == 90 || ($a + $b) == 90) {
        echo "Он является прямоугольным.";
    } else {
        echo "Он НЕ является прямоугольным.";
    }
} else {
    echo "Такой треугольник НЕ существует.";
}
?>
</body>
</html>