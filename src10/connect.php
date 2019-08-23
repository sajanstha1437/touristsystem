<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$conn =null;
try{
	$option =array(
	PDO::ATTR_ERRMODE
	=>PDO::ERRMODE_EXCEPTION);
	$conn=new PDO(
	"mysql:host=localhost;dbname=touristsystem;charset=utf8;",
	"root","",$option);
}
catch (PDOException $e){
	die($e->getmessage());
}
?>
</body>
</html>
