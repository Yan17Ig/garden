
<?php
$login = $_POST['login'];
$pas = $_POST['password'];
echo $login;
echo $pas;


if ($login == 'Yana' && $pas == '1717')
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else 
$script = 'adminpanel.php';
header("Location: $script");

?>