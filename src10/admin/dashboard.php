
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
		height:800px;
		float:left;
		width:75%;
	}
	#container_right_upperdiv{
		width:100%;
		height:33%;
		background-color:#FFFF99;
	}
		#container_right_upperdiv_left{
			width:33%;
			height:100%;
			background-color:#FFFF99;
			float:left;
		}
		#container_right_upperdiv_center{
			width:34%;
			height:100%;
			background-color:skyblue;
			float:left;
		}
		#container_right_upperdiv_right{
			width:33%;
			height:100%;
			background-color:blue;
			float:right;
		}
	#container_right_middlediv{
		width:100%;
		height:34%;
		background-color:skyblue;
	}
		#container_right_middlediv_left{
		width:33%;
		height:100%;
		background-color:skyblue;
		float:left;
		}
		#container_right_middlediv_center{
		width:34%;
		height:100%;
		background-color:#FFFF99;
		float:left;
		}
		#container_right_middlediv_right{
		width:33%;
		height:100%;
		background-color:skyblue;
		float:right;
		}
	#container_right_lowerdiv{
		width:100%;
		height:33%;
		background-color:blue;
	}
		#container_right_lowerdiv_right{
		width:33%;
		height:100%;
		background-color:#FFFF99
		;float:right;
		}
		#container_right_lowerdiv_left{
		width:33%;
		height:100%;
		background-color:blue;
		float:left;
		}
		#container_right_lowerdiv_center{
		width:34%;
		height:100%;
		background-color:skyblue;
		float:left;
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
                <div id="container_right_upperdiv_left">
                	<a href="index.php">
                	<img src="images/admin.png" style="width:200px; height:200px;padding:20px;"/>
               	 </div>
                <div id="container_right_upperdiv_center">
                	<a href="users.php">
                	<img src="images/users.png" style="width:200px; height:200px;padding:35px;"/>
               	 </div>
                <div id="container_right_upperdiv_right">
                	<a href="booking.php">
                	<img src="images/booking.png" style="width:200px; height:200px;padding:35px;"/>
                    </div>
            </div>
            
            <div id="container_right_middlediv">
                <div id="container_right_middlediv_left">
                	<a href="enquiry.php">
                	<img src="images/enquiry.png" style="width:200px; height:200px;padding:35px;"/></a>
                    </div>
                <div id="container_right_middlediv_center">
               		 <a href="pages.php">
                	<img src="images/pages.png" style="width:200px; height:200px;padding:35px;"/></a>
                    </div>
                <div id="container_right_middlediv_right">
                	<a href="issues.php">
                	<img src="images/issues.png" style="width:200px; height:200px;padding:35px;"/></a>
                    </div>
	        </div>
        	<div id="container_right_lowerdiv">
                <div id="container_right_lowerdiv_left"></div>
                <div id="container_right_lowerdiv_center"></div>
                <div id="container_right_lowerdiv_right"></div>
	        </div>
    	</div>
</div>
</body>
</html>