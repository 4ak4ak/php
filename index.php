<?php header("Content-Type: text/html; charset=utf-8");
require "rb-mysql.php"; 

R::setup('mysql:host=localhost;
        dbname=formdb','root','');
if( !R::testConnection())
{
    exit('Нет подключения к БД!');
}

if(isset($_POST['name']) && isset($_POST['text'])){



$user =	R::dispense('user');
$user->name = $_POST['name'];
$user->text1 = $_POST['text'];
R::store($user);
}

//R::close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<form action="index.php" method="POST">
		<p>Ваше имя</p><input type="text" name="name">
		<p>Текст</p><input type="text" name="text">
		<input type="submit" value="отправить">
	</form>
</body>
</html>