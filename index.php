<?php 
echo "<center>PHP WORK!!!</center>";

$servername = "localhost";

$username = "root";
$password = "password";
$connect = mysqli_connect($servername, $username, $password);
if (!$connect) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
echo "Подключение к БД прошло успешно. Сервер: ", $servername, ", пользователь: ", $username;
mysqli_close($connect);

?>





<?php
echo "<br><br>Hello world!!!!!!!!!!!!!!<br>";
echo "<p> hello from /trur/index.php </p><br>";

phpinfo();
?>
