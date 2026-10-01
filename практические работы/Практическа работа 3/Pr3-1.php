<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Получаем числа из адреса страницы (например: Pr3.php?a=5&b=10)
$a = isset($_GET['a']) ? (float)$_GET['a'] : 0;
$b = isset($_GET['b']) ? (float)$_GET['b'] : 0;

// Проверяем условие и выводим результат
if ($a < $b) {
    echo "Сумма: " . ($a + $b);
} else {
    echo "Произведение: " . ($a * $b);
}
?>
</body>
</html>