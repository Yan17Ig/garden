<!DOCTYPE html>
<html>
<head>
<title>Сторінка</title>
<meta charset="utf-8">
</head>
<body>
<p>Авторизація:</p>
<form action="adminavt.php" method="post">
  <input name="login" placeholder="Логин">
  <input type="password" name="password" placeholder="Пароль">
  <input type="submit" value="Ввійти">
</form>
</body>
</html>
<?php
// login.php

// Підключення до бази даних

session_start();

$servername = "BotanicalGarden";
$username = "root";
$password = "";
$dbname = "testBd";

// Створення з'єднання
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Перевірка з'єднання
if (!$conn) {
    die("Помилка підключення до бази даних: " . mysqli_connect_error());
}

// Отримання інформації з форми
$inputUsername = $_POST['username'];
$inputPassword = $_POST['password'];

// Захист від SQL-ін'єкцій (використовуйте підготовлені заяви)
$query = "SELECT * FROM admins WHERE username = ? AND password = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ss", $inputUsername, $inputPassword);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    // Користувача аутентифіковано, здійсніть вхід
    $_SESSION['username'] = $inputUsername;
    // Redirect to admin dashboard or any other page
    header("Location: adminpanel.php");
    exit();
} else {
    // Помилка аутентифікації, виведіть повідомлення
}


// Закриття з'єднання
mysqli_close($conn);
?>