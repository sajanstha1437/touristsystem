<?php
include("../connect.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$stat=$conn->prepare("select * from articles where id:id");
	$stat->execute(array(":id"=>$id));
	$r=$stat->fetch();
	
	}
	else{
		$r['id']='';
		$r['subject']='';
		$r['body']='';
		$r['author']='';
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>read</title>
</head>
<body>
<table>
<tr><th>id</th><td><?php echo $r['id']; ?></td></tr>
<tr><th>subject</th><td><?php echo $r['subject']; ?></td></tr>
<tr><th>body</th><td><?php echo $r['body']; ?></td></tr>
<tr><th>author</th><td><?php echo $r['author']; ?></td></tr>

</table>
</body>
</html>