<?php
//create.php
include("../connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update User</title>
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
<h1>Update user</h1>
<form action="update.php" method="POST">
Userid:<input type="text" name="userid"><br/>
Password:<input type="password" name="password"><br/>
Name:<input type="text" name="name"><br/>
id:<input type="text" name="id"><br/>
<button> update</button>
</form>

<a href="delete.php"><button> Delete</button></a>
<a href="logout.php"><button> Logout</button></a>
<a href="create.php"><button> Create</button></a>
<?php
if(isset($_POST["userid"])&&$_POST["userid"]!="" &&
	isset($_POST["password"])&&$_POST["password"]!="" &&
	isset($_POST["name"])&&$_POST["name"]!="" &&
	isset($_POST["id"]) && $_POST["id"]!=""
	
	)
{
	$userid=$_POST["userid"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$id=$_POST["id"];
		
	$result=$conn->exec("update users set userid='{$userid}',password='{$password}', name='{$name}' where id='{$id}'");
	echo'<br/>';
	if ($result==1){
		
		echo 'userid added successfully. id:'.$id;
	}
	else
	{
		echo'user not entered(Fail)';
	}

}
if(isset($_POST["userid"]))
{
	$keyword=$_POST["userid"];
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
