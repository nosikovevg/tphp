<?php
echo "<center>PHP WORK!!!</center>";


$servername = "localhost";
$username = "root";
$password = "password";
$db_name = "expo";


$connect = mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");


$n=$_POST['nam'];
$a=$_POST['ag'];
$ai=intval($a);
echo "<br/>";
print($n);
# print($a);
echo "<br/>";
print($ai);
echo "<br/>";


$sql = "INSERT INTO tab1 VALUES(NULL, '$n', '$ai')";


if(mysqli_query($connect, $sql)){
    echo "Данные успешно добавлены";
} else{
    echo "Ошибка: " . mysqli_error($connect);
}
echo "<br/>";
echo "<a href='http://truruki.ru/'> вернуться на главную <a>";
mysqli_close($connect);
?>



