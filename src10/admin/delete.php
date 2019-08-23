<?php

include ("../connect.php");
/*$id=isset($_SESSION['id'])?
$_SESSION['id']:'';
$result=FALSE;
if(isset($_GET['id'])&& $id==$_GET['id'] && $id!=""){
	$result=$conn->exec("DELETE from users where id={$id}");
}else{
	header("Location:../login/login.html");
	
	
}*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>delete</title>
<style>
table{
	width:500px;
	height:auto;
	margin:auto;
	background-color:skyblue;
	
}

th{
	height:30px;
	
}
td{
	text-align:center;
	width:150px;
	background-color:white;
	
}

</style>
</head>
<body>
Delete User
<form action="delete.php" method="POST">
Id:<input type="text" name="id"><br/>
<button> Delete</button>
</form>
<a href="create.php"><button> Create</button></a>
<a href="logout.php"><button> Logout</button></a>
<a href="update.php"><button> Update</button></a>
<?php
if(isset($_POST["id"])&&$_POST["id"]!="" 
	/*&&
	isset($_POST["password"])&&$_POST["password"]!=""&&
	isset($_POST["name"])&&$_POST["name"]!=""*/
	)
{
	$id=$_POST["id"];
	/*$password=$_POST["password"];
	$name=$_POST["name"];*/
	
	$stat=$conn->prepare("delete from users where id='{$id}'");
	$stat->execute(array(
	":id"=>$id,
	//":password"=>$password,
	//":name"=>$name
	
	));
	$result=$stat->rowCount();
	echo'<br/>';
	if ($result==1){
		$id=$conn->lastInsertId();
		echo 'userid :';
		echo '<a href=:read.php?id='.$id.'">'.$id.'</a>';
	}
	else
	{
		echo'user Deleting Fail';
	}

}
if(isset($_POST["id"]))
{
	$keyword=$_POST["id"];
	$result=$conn->query("select * from users ");
	echo'<br/>';
	echo '<table>';
	echo '<tr><th>id</th><th>userid</th><th>password</th><th>name</th></tr>';
	foreach($result as $r)
	{
		echo'<tr>';
		echo'<td>'.$r['id'].'</td>';
		echo'<td>'.$r['userid'].'</td>';
		echo'<td>'.$r['password'].'</td>';
		echo'<td>'.$r['name'].'</td>';
		echo'</tr>';
		
	}
	echo '</table>';
}
?>

</body>
</html>