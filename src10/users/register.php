<?php
include("../connect.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Sign in</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body{
	margin:0px;
	padding:0px;
	background-image:linear-gradient(skyblue,white);
	height:1000px;

}
#signindiv{
  //background-color:#f44242;
	margin:auto;
  height:500px;
  width:40%;

}
.red{
	background-color:#f44242;
	color:white;
	font-size: 16px;

	}
	.white{
		background-color: white;
	}
	.border{
		border:1px none;
		width:100%;
		height:100%;
	}
h1{
	color:white;
	font-family: Times New Roman;
}
h2{
	color:white;
	font-family: Times New Roman;
	text-align:center;
}
.para{
color:white;

}
	td{
		height:20px;

	}
	.button{
		background-color:blue;
		color:white;
		border:1px none;
		font-family: Times New Roman;
		font-size: 16px;
		height:50px;
		width:150px;
	}
</style>

</head>
<body>

<div id=signindiv>
	<form method="POST" action="register.php">
<table style="border:0; height:100px; width:100%; margin:5px;padding:20px;">
	<tr>
			<td colspan="2"><h1 align=center>Log in Please !!!</h1></td>
	</tr>
	<tr>
			<td class="red"><p align=center> ID</p></td>
					<td class=white><input type="text" class=border name="id" value="No need to fill up the id. It will be provided later">
					</td>
	</tr>
	<tr>
			<td class="red"><p align=center> Name</p></td>
					<td class=white><input type="text" class=border name="name" class="name" placeholder="" required="">
					</td>
	</tr>
	<tr>
			<td class=red><p align=center> Password</p></td>
					<td class=white><input type="password" class=border name="password" class="password" placeholder="" required="">
					</td>
	</tr>
	<tr>
			<td class=red><p align=center> User Id</p></td>
					<td class=white><input type="text" class=border name="userid" class="userid" placeholder="" required="">
					</td>
	</tr>
	
	<tr>
			<td class=red><p align=center> Contact</p></td>
					<td class=white><input type="text" class=border name="contact" class="contact" placeholder="" required="">
					</td>
	</tr>
	<tr>
			<td class=red><p align=center> Email ID</p></td>
					<td class=white><input type="text" class=border name="email" class="email" placeholder="" required="">
					</td>
	</tr>
	
	<tr>
	
			<td  align="center"><br/><button class=button>Sign Up</button></td></form>
				<td align="center"><br/><form action="login.html"><button class=button>Sign In</button></form></td>
	</tr>
	<tr>
		
	</tr>
</table>

<?php
if(
	
	
	isset($_POST["name"])&&$_POST["name"]!="" &&
	isset($_POST["password"])&&$_POST["password"]!="" &&
	isset($_POST["userid"])&&$_POST["userid"]!=""&&
	isset($_POST["contact"])&&$_POST["contact"]!=""&&
	isset($_POST["email"])&&$_POST["email"]!=""
	)
{
	$id=$_POST["id"];
	$name=$_POST["name"];
	$password=$_POST["password"];
	$userid=$_POST["userid"];
	$contact=$_POST["contact"];	
	$email=$_POST["email"];
	$stat=$conn->prepare("insert into users values(:id, :name, :password, :userid,   :contact, :email)");
	$stat->execute(array(
	":id"=>$id,
	":name"=>$name,
	":password"=>$password,
	":userid"=>$userid,
	":contact"=>$contact,
	":email"=>$email
	
	));
	$result=$stat->rowCount();
	echo'<br/>';
	if ($result==1){
		$id=$conn->lastInsertId();
		echo 'Thank you for you registration. ';
		echo 'Your username is :'.$userid;
		echo "<br/>";
		echo " And your userid is : ";
		echo $id;
	}
	else
	{
		echo'user not entered(Fail)';
	}

}
?>










</div>

</body>
</html>