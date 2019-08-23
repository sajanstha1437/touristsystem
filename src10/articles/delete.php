<?php

include ("../connect.php");
$session_id=isset($_SESSION['id'])?
$_SESSION['id']:'';
$get_id=isset($_SESSION['id'])?
	$_GET['id']:'';
$result=FALSE;
if ($session_id==''){
	header("Location:../login/login.html");
}
if($session_id!=''&& $get_id!=''){
	$result=$conn->exec("DELETE from articles where id={$get_id} AND author={$session_id}");
}else{
	$result=0;//FAIL
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete</title>
</head>
<body>
<?php


?>


</body>
</html>