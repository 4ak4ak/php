<?php

define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","formdb");

//function db_connect($link){
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)
	 	or die("Ошибка: ".mysqli_eror($link));
	 if(!mysqli_set_charset($link, "utf8")){
	 	printf("Ошибка: ".mysqli_eror($link));
	 }
	// return $link;
//}
//require_once("db.php"); 

if(isset($_POST['name']) && isset($_POST['text'])){
	$name = $_POST['name'];
	$text1 = $_POST['text'];
    $result = "INSERT INTO formtb(name,text1) VALUES('$name','$text1')";
	$query = mysqli_query($link,$result);
	echo "<p>Отправлено<p>";
}else{
echo "Ошибка!";
	}
mysqli_close($link);
?>