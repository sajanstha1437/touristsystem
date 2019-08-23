<?php
include ("../src10/connect.php");


?>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" href="slider.css" type="text/css">
	<script type="text/javascript" src="main.js"></script>
	
<link href="css/aboutus.css" type="text/css" rel="stylesheet"/>
<link href="css/gallery.css" type="text/css" rel="stylesheet"/>


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
    <style>
		#formtable{
			background-image:linear-gradient(#CDE6FE,white);
			margin:auto;
			margin-top:20px;
			border:5px solid lightblue;
			border-top-left-radius:40px 40px;
			border-bottom-right-radius:40px 40px;
		}
		#formtable td{
			text-align:center;
		}
	
	</style>
    
    </head>



<body>
<div id=maindiv>

  <div id=bannerdiv></div>
	<div id=menudiv>
			<table align="right">
				<tr>
					<td ><a href="index.html">Home</a></td>
					<td ><a href="intro.html">Introduction</a></td>
					<td><a href="aboutus.html">About Us</a></td>
					<td><a href="gallery.html">Gallery</a></td>
					<td><a href="reservation.php">Reservation</a></td>
				    <td><a href="issues.php">Issues</a></td>
					
				</tr>
			</table>

	</div>
		
	<div id=bodydiv>
		<div id=body_left> 

			<div id=body_left_top>
				<form id="reservation" action="issues.php" method="POST">
                <table id="formtable" width="70%" height="80%" style="">
                
                <tr>
                    	<th colspan="2" align="center">Please choose the package type</th>
                       
                    </tr>
					<tr>
                    	<td>Issue ID</td>
                        <td><input type="text" name="issue_id" value="Not necessary to fill up"/></td>
                    </tr>
                   
					<tr>
                    	<td>User ID</td>
                        <td><input type="text" name="userid" value="Insert you userID in integer"/></td>
                    </tr>
					 <tr>
                    	<td>User Name</td>
                        <td><input type="text" name="name" value=""/></td>
                    </tr>
                	
                  <tr>
                    	<td>Contact:</td>
                        <td><input type="text" name="contact" value=""/></td>
                    </tr>
					
                	<tr>
                    	<td>Client email-ID</td>
                        <td><input type="text" name="emailID" value=""/></td>
                    </tr>
						<tr>
                    	<td>Comments/Suggestions</td>
                        <td>
						<textarea cols="30" rows="5" name="comments">
						Please provide your valuable comments or suggestions about our company or the packagaes in this box 
						</textarea>
						
						</td>
                    </tr>
                   
                    
                    <tr>
                    	<td><input type="Submit" name="submit" value="Submit"/></td>
                        <td><input type="reset" name="reset" value="Reset"/></td>
                    </tr>
                </table>
                </form>
			 <?php
					if(isset($_POST["userid"])&&$_POST["userid"]!="" &&
						isset($_POST["name"])&&$_POST["name"]!="" &&
						isset($_POST["contact"])&&$_POST["contact"]!=""&&
						isset($_POST["emailID"])&&$_POST["emailID"]!=""&&
						isset($_POST["comments"])&&$_POST["comments"]!=""
						)
					{
						$issue_id=$_POST["issue_id"];
						$userid=$_POST["userid"];
						$name=$_POST["name"];						
						
						$contact=$_POST["contact"];
						$emailID=$_POST["emailID"];	
						$comments=$_POST["comments"];	
						$stat=$conn->prepare("insert into issues values(:issue_id, :userid, :name, :contact, :emailID, :comments)");
						$stat->execute(array(
						":issue_id"=>$issue_id,
						":userid"=>$userid,
						":name"=>$name,
						
						":contact"=>$contact,
						":emailID"=>$emailID,
						":comments"=>$comments,
						
						));
						$result=$stat->rowCount();
						echo'<br/>';
						if ($result==1){
							$id=$conn->lastInsertId();
							echo '<p style="background-color:lightpink;">Thank you for your comments</p>';
							
							
						}
						else
						{
							echo'user not entered(Fail)';
						}

					}
					?>
			</div>

			<div id=body_left_bottomleft>
				<img src="images/rhino.jpg" width="250px" height="200px"/>
			</div>
			<div id=body_left_bottomiddle>
				<img src="images/buddha.jpg" width="250px" height="200px"/>
			</div>

			<div id=body_left_bottomright>
				<img src="images/himal.jpg" width="250px" height="200px"/>
			</div>



		</div>
		<div id=body_right>
		<div id=body_right_top>
			<form action="../src10/users/login.html" method="POST">
				<table>
					<tr>
						<td colspan="2">Users Login!!! </td>
						
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" name="username" style="width:130px;"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" style="width:130px;"></td>
					</tr>
					<tr>
						<td colspan="2"><p style="text-decoration:underline;"><button>Users Login</button>
								<a href="admin/indexs.php">Admin Login</a></p>
						</td>
						
					</tr>
					 
				</table>
			</form> 

		</div>
	
	
		<div id=body_right_bottom>
        
		<table>
        <tr>
				<td><p class="explore">Explore Over</p> <p id="nepal">Nepal</p></td>
		  </tr>
			<tr>
				<td><a href="state1.html">State No.1</a></td>
			</tr>
			<tr>
				<td><a href="state2.html">State No.2</td>
			</tr>
			<tr>
				<td><a href="state3.html">State No.3</td>
			</tr>
			<tr>
				<td><a href="state4.html">State No.4</td>
			</tr>
			<tr>
				<td><a href="state5.html">State No.5</td>
			</tr>
			<tr>
				<td><a href="state6.html">State No.6</td>
			</tr>
			<tr>
				<td><a href="state7.html">State No.7</td>
					
			</tr>
		
			
		</table>
		
         </div>

		</div>
	

</div>
<div id="footerdiv">
	<table align="center">
		<tr>
			<td align="center">
				<p> <a href="index.html">Home</a>| 
					<a href="aboutus.html">About us</a>| 
					<a href="gallery.html">Gallery</a>| 
					<a href="reservation.html">Reservation</a>| 
					<a href="contact.html">Contact Us</a><br/>
			Copyrights all reserved @TouristManagementCommitteeNepal.<br/>2018</p>
			</td>
		</tr>
	</table>

</div>
</div>

</body>


</html>