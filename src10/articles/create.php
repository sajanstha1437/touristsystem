<?php
//create.php
include("../connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>create</title>
</head>
<body>
<h1>Create user</h1>
<form action="create.php" method="POST">
id:<input type="text" name="id"><br/>
subject:<input type="text" name="subject"><br/>
body:<input type="text" name="body"><br/>
author:<input type="text" name="body"><br/>
<button> create</button>


</form>
<?php
if(isset($_POST["id"])&&$_POST["id"]!="" &&
	isset($_POST["subject"])&&$_POST["subject"]!="" &&
	isset($_POST["body"])&&$_POST["body"]!="" &&
	isset($_POST["author"])&&$_POST["author"]!="")
{
	$id=$_POST["id"];
	$subject=$_POST["subject"];
	$body=$_POST["body"];
	$author=$_POST["author"];
	
	
	$result=$conn->query("insert into articles values('$id','$subject','$body','$author')");
	echo'<br/>';
	if ($result==1){
		$id=$conn->lastInsertId();
		echo 'id :'.$id;
	}
	else
	{
		echo'subject not entered(Fail)';
	}

}
if(isset($_POST["id"]))
{
	$keyword=$_POST["id"];
	$result=$conn->query("select * from articles ");
	echo'<br/>';
	echo '<table>';
	echo '<tr><th>id</th><th>subject</th><th>body</th><th>author</th></tr>';
	foreach($result as $r)
	{
		echo'<tr>';
		echo'<td>'.$r['id'].'</td>';
		echo'<td>'.$r['subject'].'</td>';
		echo'<td>'.$r['body'].'</td>';
		echo'<td>'.$r['author'].'</td>';
		echo'</tr>';
		
	}
	echo '</table>';
}
?>

</body>
</html>
