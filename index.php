<?php
echo "<center>+++++++++++++PHP <b>and git</b> WORK!!!+++***</center>";


$servername = "localhost";
$username = "root";
$password = "password";
$db_name = "expo";


$connect = mysqli_connect($servername, $username, $password, $db_name);
if (!$connect) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
mysqli_set_charset($connect, "utf8");




echo "Подключение к БД прошло успешно. Сервер: ", $servername, ", пользователь: ", $username."<br>";


$sql = 'SELECT * FROM tab1';


$result = mysqli_query($connect, $sql);


#while ($row = mysqli_fetch_array($result)) {
#    print("Имя: " . $row['nm'] . "; Возраст: . " . $row['age'] . "<br>");}


print("<table border='1'>");


print("<thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>age</th>
    </tr>
  </thead>");




print("<tbody>");


while ($row = mysqli_fetch_array($result)) {
    print("<tr>"."<td>".$row['id']."</td>"."<td>".$row['name']."</td>"."<td>".$row['age']."</td>"."</tr>");}




print("</tbody>");
print("</table>");


mysqli_close($connect);
?>
<h1> Добавь данных </h1>
<form action="f.php" method="post" name="form1" style="background-color:gray;margin:10px;padding:20px;">
    <p>Имя <input name="nam" type="text"> </p>
    <p>Возраст <input name="ag" type="text"> </p>
    <p><input name="submit" type="submit" value="push!"> </p>


</form>
