<?php
						
	session_start();
	if($_SESSION['username'])
	{
	
	
?>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" href="slider.css" type="text/css">
	<script type="text/javascript" src="main.js"></script>
	
<link href="css/gallery.css" rel="stylesheet" type="text/css" />

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

		<div id=bannerdiv>
    </div>
	<div id=menudiv>
		<table align="right">
			<tr>
				<td ><a href="index.html">Home</a></td>
				<td ><a href="intro.html">Introduction</a></td>
				<td><a href="aboutus.html">About Us</a></td>
				<td><a href="gallery.html">Gallery</a></td>
				<td><a href="reservation.php">Reservation</a></td>
				 <td><a href="issues.php">Issues</a>				
					</td>
				
			</tr>
		</table>
	</div>

		
	<div id=bodydiv>
		<div id=body_left> 

			<div id=body_left_top>
				<form id="reservation" action="reservation.php" method="POST">
                <table id="formtable" width="70%" height="80%" style="">
                
                <tr>
                    	<th colspan="2" align="center">Please choose the package type</th>
                       
                    </tr>
                    <tr>
                    	<td>Booking ID</td>
                        <td><input type="text" name="bookingid" value="" required="not"/></td>
                    </tr>
					<tr>
                    	<td>User ID</td>
                        <td><input type="text" name="userid" value=""/></td>
                    </tr>
					 <tr>
                    	<td>Client Name</td>
                        <td><input type="text" name="name" value=""/></td>
                    </tr>
                	<tr>
                    	<td width="50%" align="center">Select Package Type</td>
                        <td width="5 0%" align="left">
                        	<select name="package">
							<option selected hidden value="">Select Package</option>
                            	<option value="package1">Package 1</option>
                                <option value="package2">Package 2</option>
                                <option value="package3">Package 3</option>
                                <option value="package4">Package 4</option>
                                <option value="package5">Package 5</option>
                            </select>
                         </td>
                    </tr>
					
                    <tr>
                    	<td>Choose trip entry date</td>
                        <td><input type="date" name="resDate"/></td>
                    </tr>
                    <tr>
                    	<td>Choose trip ending date</td>
                        <td><input type="date" name="endDate"/></td>
                    </tr>
					<tr>
                    	<td>Contact No.</td>
                        <td><input type="text" name="contact" value=""/></td>
                    </tr>
                	<tr>
                    	<td>Client email-ID</td>
                        <td><input type="text" name="emailID" value=""/></td>
                    </tr>
                   
                    
                    <tr>
                    	<td><input type="Submit" name="submit" value="Submit"/>
						
						
						
						</td>
                        <td><input type="reset" name="reset" value="Reset"/></td>
                    </tr>
                </table>
                </form>
			 
			 <?php
				
					if(isset($_POST["userid"])&&$_POST["userid"]!="" &&
						isset($_POST["name"])&&$_POST["name"]!="" &&
						isset($_POST["package"])&&$_POST["package"]!="" &&
						isset($_POST["resDate"])&&$_POST["resDate"]!="" &&
						isset($_POST["endDate"])&&$_POST["endDate"]!=""&&
						isset($_POST["contact"])&&$_POST["contact"]!=""&&
						isset($_POST["emailID"])&&$_POST["emailID"]!=""
						)
					{
						$bookingid=$_POST["bookingid"];
						$userid=$_POST["userid"];
						$name=$_POST["name"];						
						$package=$_POST["package"];
						$resDate=$_POST["resDate"];
						$endDate=$_POST["endDate"];
						$contact=$_POST["contact"];
						$emailID=$_POST["emailID"];	
						$stat=$conn->prepare("insert into bookings values(:bookingid, :userid, :name, :package, :resDate, :endDate, :contact, :emailID)");
						$stat->execute(array(
						":bookingid"=>$bookingid,
						":userid"=>$userid,
						":name"=>$name,
						":package"=>$package,
						":resDate"=>$resDate,
						":endDate"=>$endDate,
						":contact"=>$contact,
						":emailID"=>$emailID
						
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
			<form action="../src10/users/logout.php" method="POST">
				<table>
					<tr>
						<td colspan="2">
						<?php
							echo("Welcome user : ");
							echo($_SESSION['username']);
						
						?>
						
						
					</tr>
					
					<tr>
						<td colspan="2"><p style="text-decoration:underline;"><button> Logout user</button>
								<a href="admin/indexs.php">Admin Login</a></p>
						</td>
						
					</tr>
					 
				</table>
			</form> 
			

		</div>
	
	
		<div id=body_right_bottom>
        
            <table id="exploretable">
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
<?php
	}
	else{
		
		echo("Location:../src10/login.html");
	}
	
	?>

