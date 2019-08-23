<?php
//create.php
include("../connect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin/create user</title>
<style type="text/css">
	body{
		margin:0px;
		padding:0px;
	}
	#upperdiv{
	margin:auto;
		background-color:#00CC00;
		height:50px;
		width:90%;
	}
	#upperdiv p{
		color:white;
		font-family:Georgia, "Times New Roman", Times, serif;
	}
#maindiv {
	background-color: #1F9AB9;
	margin: 0px;
	height: auto;
	width: 100%;
}
	#bannerdiv{
		background-color:#C60000;
		height:100px;
		width:90%;
		margin:auto;
		//padding:10px;
	}
	#bannerdiv h1{
		color:white;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-size:20px;
		text-align:center;
		padding:20px;
	}
	#container{
	margin:auto;
//	paddign:10px;
		width:90%;
		height:800px;
		background-image:linear-gradient(lightyellow,white);	
	}
	#container_left{
		background-color:#232323;
		width:25%;
		height:800px;
		float:left;
	}
	#container_left table{
		width:100%;
	}
	#container_left .td{
		width:100%;
		height:50px;
		color:white;
		text-align:center;
		font-size:16px;
	}
	
	.td a:link{
		color:white;
		text-decoration:none;
	}
	
	.td a:hover{
		color:yellow;
		text-decoration:underline;	
	}
	.td a:visited{
		color:white;
	}
	.td a:active{
		color:red;	
	}
	.tabletd{
		background-color:#0066FF;
		height:50px;
		color:white;
		text-align:center;
		font-size:16px;
	}
	#container_right{
		background-color:yellow;
		height:auto;
		float:left;
		width:75%;
	}
	#container_right_upperdiv{
		width:100%;
		height:auto;
		background-color:#FFFF99;
	}
	#tablediv{
		
		background-image:linear-gradient(white,skyblue);
		border:5px solid white;
		border-radius: 20px 20px;
		margin:auto;
		width:70%;
		height:auto;
		
	}
	#tablediv table{
		width:80%;
		margin:auto;
		height:auto;
	}
	#tablediv td{
		height:50px;
		width:25%;
		text-align:center;
		
	}

	#container_right_lowerdiv{
		width:100%;
		height:auto;
		background-color:blue;
	}
	.resulttable{
		background-color:pink;
		width:80%;
		margin:auto;
		border:5px solid white;
		border-radius:20px 20px;
	}
	.resulttable th{
		background-color:black;
		color:white;
		border:0px;
		border-radius:20px 20px;
	}
	.resulttable td{
		text-align:center;
		
	}
	
</style>
</head>

<body>
<div id="maindiv">
	<div id="upperdiv">
        <table>
        	<tr>
            	<td><p>&nbsp;Welcome</p></td>
            	<td></td>
            </tr>
        </table>
        
    </div>
  <div id="bannerdiv"><h1>Welcome to Dashboard!!!</h1></div>
    <div id="container">
    	<div id="container_left">
        	<table> 
            	<tr>
                	<td class="tabletd">DashBoard</td>
                </tr>
            	<tr>
                	<td class="td"><a href="index.php">Admin</a></td>
                </tr>
            	<tr>
                	<td class="td"><a href="users.php">Users</a></td>
                </tr>
            	<tr>
                	<td class="td"><a href="booking.php">Bookings</a></td>
                </tr>
            	<tr>
                	<td class="td"><a href="enquiry.php">Enquiry</a></td>
                </tr>
                <tr>
                	<td class="td"><a href="pages.php">Pages</a></td>
                </tr>
                <tr>
                	<td class="td"><a href="issues.php">Issues</a></td>
                </tr>
            </table>
        </div>
        <div id="container_right">
        	<div id="container_right_upperdiv">
			
				<div id="tablediv">
					<form action="users_create.php" method="POST">
					<table>
						<tr>
							<td colspan="2"><h3>Create user</h3></td>
						</tr>
						<tr>
							<td>Id:</td>
							<td><input type="text" name="id"></td>
						</tr>
						<tr>
							<td>Userid:</td>
							<td><input type="text" name="userid"></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="password"></td>
						</tr>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>Contact:</td>
							<td><input type="text" name="contact"></td>
						</tr>
						<tr>
							<td>EmailID:</td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr>
							<td colspan="2"><button> Create</button></td>
						</tr>
						</form>
						<tr>
							<td><form action="users_delete.php"><button> Delete</button></form></td>
							<td><form action="users_search.php"><button> Search</button></form></td>
						</tr>
						<tr>
							<td><form action="users_update.php"><button> Update</button></form></td>
							<td><form action="../login/logout.php"><button> Logout</button></form></td>
						</tr>
					</table>
					</div>
						
	        </div>
        	<div id="container_right_lowerdiv">
                <?php
					if(isset($_POST["id"])&&$_POST["id"]!="" &&
						isset($_POST["userid"])&&$_POST["userid"]!="" &&
						isset($_POST["password"])&&$_POST["password"]!=""&&
						isset($_POST["contact"])&&$_POST["contact"]!="" &&
						isset($_POST["email"])&&$_POST["email"]!=""&&
						isset($_POST["name"])&&$_POST["name"]!="")
					{
						$id=$_POST["id"];
						$userid=$_POST["userid"];
						$password=$_POST["password"];
						$name=$_POST["name"];
						$contact=$_POST["contact"];
						$email=$_POST["email"];
						
						$stat=$conn->prepare("insert into users values(:id, :userid, :password, :name, :contact, :email)");
						$stat->execute(array(
						":id"=>$id,
						":userid"=>$userid,
						":password"=>$password,
						":name"=>$name,
						":contact"=>$contact,
						":email"=>$email
						
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
						echo '<table class="resulttable">';
						echo '<tr><th>id</th><th>userid</th><th>password</th><th>name</th><th>contact</th><th>email</th></tr>';
						foreach($result as $r)
						{
							echo'<tr>';
							echo'<td>'.$r['id'].'</td>';
							echo'<td>'.$r['userid'].'</td>';
							echo'<td>'.$r['password'].'</td>';
							echo'<td>'.$r['name'].'</td>';
							echo'<td>'.$r['contact'].'</td>';
							echo'<td>'.$r['email'].'</td>';
							echo'</tr>';
							
						}
						echo '</table>';
					}
					?>
	        </div>
    	</div>
</div>
</body>
</html>
