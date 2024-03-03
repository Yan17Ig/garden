<?php
header('Content-type: text/html; charset=utf-8');
session_start();
if (! $_SESSION['admin'])
header('Location: adminavt.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Страница</title>
<meta charset="utf-8">
</head>
<body>
    <form action="newart.php" method="post">
        <p>Назв статті:</p>
        <input name="nameart">
         <p>Текст статті:</p>
        <textarea name="text"></textarea>
        <p>Шлях до фото:</p>
        <input type="text" name="ways">
        <p>Назва пункту:</p>
        <input name="menu">
        <input type="submit" value="Добавить статью">
    </form>
    <script type="text/javascript">
        var form = document.querySelector('form');
        form.onsubmit = function ()
        {
            var text = form.text;
            text.value = '<p>' + text.value + '</p>';
            text.value = text.value.replace(/\n/g, '</p><p>');
        };
    </script>
</body>
</html>