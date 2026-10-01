<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Задаем возраст кота (для проверки можно менять это число)
$age = 67; 

// Проверяем условия по цепочке
if ($age <= 1) {
    $ageGroup = 'Котята';
} elseif ($age <= 3) {
    $ageGroup = 'Молодые коты';
} elseif ($age <= 7) {
    $ageGroup = 'Коты средних лет';
} else {
    $ageGroup = 'Почтенные коты';
}

// Выводим результат на экран (для проверки)
echo "Возраст кота: " . $age . " г. Группа: " . $ageGroup;
?>
</body>
</html>