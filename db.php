<?php 
define("DB_HOST","127.0.0.1");
define("DB_USER","root");
define("DB_PASS"," ");
define("DB_NAME","formdb");

function db_connect(){
	$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME)
	 	or die("Ошибка: ".mysqli_eror($link));
	 if(!mysqli_set_charset($link, "utf8")){
	 	printf("Ошибка: ".mysqli_eror($link));
	 }
	 return $link;
}
?>