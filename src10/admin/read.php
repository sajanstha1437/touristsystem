<?php
include("../connect.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$result=$conn->query("select articles.*, users.name from articles, users where articles.author=users.id AND articles.id={$id} ");
	$r=$result->fetch();
	
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>read</title>
</head>
<body>

</body>
</html>