<?php 
require_once("db.php");
function form_go($link, $title, $date, $content){
	$title = trim($title);
	$content = trim($content);

	if($title == '')
		return false;

	$t = "INSERT INTO articles(title,date,content) VALUES ('%s, %s, %s')";

	$query = sprintf($t,mysql_real_escape_string($link, $title),mysql_real_escape_string($link,$date),mysql_real_escape_string($link,$content));
echo $query;
$result = mysql_query($link, $query);
if(!$result)
	die(mysql_error($link));
return true;

	
}
?>