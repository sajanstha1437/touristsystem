<?php
//create.php
include("../connect.php");
$session_id=isset($_SESSION['id'])?
	$_SESSION['id']:'';
$get_id=isset($_GET['id'])?
	$_GET['id']:'';
	
	if ($session_id!='' && $get_id!=''){
		$result=$conn->query("select from articles where id={$get_id} and author={$session_id}");
		$r=$result->fetch();
		
	}
	/*
	else{
		if(isset($_POST['id'])&&$id==$_POST['id'] && $id!=''){
		$result=$conn->query("select from articles where id={$get_id} and author={$session_id}");
		$r=$result->fetch();
			
		}
	}*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update User</title>
</head>
<body>
<h1>Update user</h1>
<form action="update.php" method="POST">
<input type="hidden" name="id"><br/>
subject:<input type="text" name="subject"><br/>
body:<input type="text" name="body"><br/>
id:<input type="text" name="id"><br/>
<button> update</button>


</form>
<?php
if(isset($_POST["subject"])&&$_POST["subject"]!="" &&
	isset($_POST["body"])&&$_POST["body"]!="" &&
	isset($_POST["id"]) && $_POST["id"]!=""
	
	)
{
	$subject=$_POST["subject"];
	$body=$_POST["body"];
	$id=$_POST["id"];
		
	$result=$conn->exec("update articles set subject='{$subject}', body='{$body}', id='{$id}' where id='{$id}'");
	echo'<br/>';
	if ($result==1){
		
		echo 'subject added successfully. id:'.$subject;
	}
	else
	{
		echo'subject not entered(Fail)';
	}

}
if(isset($_POST["subject"]))
{
	$keyword=$_POST["subject"];
	$result=$conn->query("select * from articles ");
	echo'<br/>';
	echo '<table>';
	echo '<tr><th>subject</th><th>body</th><th>id</th></tr>';
	foreach($result as $r)
	{
		echo'<tr>';
		echo'<td>'.$r['subject'].'</td>';
		echo'<td>'.$r['body'].'</td>';
		echo'<td>'.$r['id'].'</td>';
		echo'</tr>';
		
	}
	echo '</table>';
}
?>

</body>
</html>
