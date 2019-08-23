<?php
//create.php
include("../connect.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin/check booking</title>
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
	.tabletd a:link{
		
		color:white;
	}
	.tabletd a:hover{
		
		color:white;
		text-decoration:none;
	}
	.tabletd a:visited{
		
		color:white;
	}
	.tabletd a:active{
		
		color:red;
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
                	<td class="tabletd"><a href="dashboard.php">DashBoard</a></td>
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
					<form action="booking_check.php" method="POST">
					<table>
						<tr>
							<td colspan="3"><h3>Check Bookings</h3></td>
						</tr>
						<tr>
							<td>Id:</td>
							<td colspan="2"><input type="text" name="keyword"></td>
						</tr>
						
						<tr>
							<td colspan="3"><button> Check</button></td>
							</form>
						</tr>
						<tr>
							<td><form action="booking_delete.php"><button> Delete</button></form></td>
							<td><form action="booking_update.php"><button> Update</button></form></td>
							<td><form action="../login/logout.php"><button> Logout</button></form></td>
						</tr>
					</table>
					</div>
						
	        </div>
        	<div id="container_right_lowerdiv">
                
				<?php
				if(isset($_POST["keyword"])){
					$keyword=$_POST["keyword"];
					$result=$conn->query("select * from booking where userid LIKE '%{$keyword}%'");
					echo'<br/>';
					echo'<table class="resulttable">';
					echo'<tr><th>bookingid</th><th>userid</th><th>name</th><th>resDate</th><th>endDate</th><th>contact</th><th>payment</th></tr>';
					foreach($result as $r)
					{
						echo'<tr>';
						echo'<td>'.$r['bookingid'].'</td>';
						echo'<td>'.$r['userid'].'</td>';
						echo'<td>'.$r['name'].'</td>';
						echo'<td>'.$r['resDate'].'</td>';
						echo'<td>'.$r['endDate'].'</td>';
						echo'<td>'.$r['contact'].'</td>';
						echo'<td>'.$r['payment'].'</td>';
								echo'</tr>';
						
					}
					echo'</table>';
				}

				?>
	        </div>
    	</div>
</div>
</body>
</html>
