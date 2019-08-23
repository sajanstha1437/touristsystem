

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
	height: 1000px;
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
		background-color:#FFFF99;
		height:800px;;
		float:left;
		width:75%;
	}
	#container_right_upperdiv{
		width:100%;
		height:auto;
		
	}
	#tablediv{
		
		background-image:linear-gradient(white,skyblue);
		border:5px solid white;
		border-radius: 20px 20px;
		margin:auto;
		width:70%;
		height:300px;
		
	}
	#tablediv table{
		width:80%;
		margin:auto;
		height:150px;
	}
	#tablediv td{
		height:50px;
		width:20%;
		text-align:center;
		
	}
	#container_right_lowerdiv{
		width:100%;
		height:auto;
		background-color:blue;
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
					<table>
						<tr>
							<td colspan="5">
								<h4>Please choose the operation you like</h4>
							</td>
						</tr>
						<tr>
							<td><a href="users_create.php"><button> Create users</button></a></td>
								<td><a href="users_delete.php"><button> Delete users</button></a></td>
								<td><a href="users_search.php"><button> Search users</button></a></td>
								<td><a href="users_update.php"><button> Update users</button></a></td>
								<td><a href="../login/logout.php"><button> Logout admin</button></a></td>
							</td>
						</tr>
					</table>
				</div>	
			
			</div>
        	<div id="container_right_lowerdiv">
                
	        </div>
    	</div>
</div>
</body>
</html>
