<?php
$name = $_POST['nameart'];
$text = $_POST['text'];
$menu = $_POST['menu'];

$way = $_POST['ways']; // змінна для збереження шляху до фото

// Перевірка, чи файл був завантажений успішно

// З'єднання з базою даних і вставка запису
$db = mysqli_connect('BotanicalGarden', 'root', '', 'testBd');
$query = "INSERT INTO tropic (name, info, photo) VALUES ('$name', '$text', '$way')";
$result = mysqli_query($db, $query);
mysqli_close($db);

if ($result) {
    echo 'Стаття успішно додана';
} else {
    echo 'Помилка: ' . mysqli_error($db);
}

?>