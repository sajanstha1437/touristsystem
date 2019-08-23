<?php
//create.php
include("../connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>create</title>
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
<h1>Create user</h1>
<form action="create.php" method="POST">
Id:<input type="text" name="id"><br/>
Userid:<input type="text" name="userid"><br/>
Password:<input type="text" name="password"><br/>
Name:<input type="text" name="name"><br/>
Contact:<input type="text" name="contact"><br/>
<button> Create</button>
</form>
<a href="delete.php"><button> Delete</button></a>
<a href="logout.php"><button> Logout</button></a>
<a href="update.php"><button> Update</button></a>
<?php
if(isset($_POST["id"])&&$_POST["id"]!="" &&
	isset($_POST["userid"])&&$_POST["userid"]!="" &&
	isset($_POST["password"])&&$_POST["password"]!=""&&
	isset($_POST["name"])&&$_POST["name"]!=""&&
	isset($_POST["contact"])&&$_POST["contact"]!=""
	)
{
	$id=$_POST["id"];
	$userid=$_POST["userid"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$contact=$_POST["contact"];	
	$stat=$conn->prepare("insert into users values(:id, :userid, :password, :name, :contact)");
	$stat->execute(array(
	":id"=>$id,
	":userid"=>$userid,
	":password"=>$password,
	":name"=>$name,
	":contact"=>$contact
	
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
		echo'user not entered(Fail)';
	}

}
if(isset($_POST["userid"]))
{
	$keyword=$_POST["userid"];
	$result=$conn->query("select * from users ");
	echo'<br/>';
	echo '<table>';
	echo '<tr><th>id</th><th>userid</th><th>password</th><th>name</th><th>contact</th></tr>';
	foreach($result as $r)
	{
		echo'<tr>';
		echo'<td>'.$r['id'].'</td>';
		echo'<td>'.$r['userid'].'</td>';
		echo'<td>'.$r['password'].'</td>';
		echo'<td>'.$r['name'].'</td>';
		echo'<td>'.$r['contact'].'</td>';
		echo'</tr>';
		
	}
	echo '</table>';
}
?>

</body>
</html>
