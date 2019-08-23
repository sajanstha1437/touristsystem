<?php
include ("../connect.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>search</title>
</head>
<body>
<?ph echo($name);?>Login:<br/>
<form action ="search.php" method="POST">
Keyword:<input type="text" name="keyword">
<button >Search</button>

</form>
<form action ="create.php" method="GET">
Keyword:<input type="text" name="keyword">
<button >Create</button>

</form>

<form action ="delete.php" method="GET">
<button >Delete</button>

</form>
<form action ="../login/logout.php" method="GET">
<button >Logout</button>

</form>


<?php
if(isset($_POST["keyword"])){
	$keyword=$_POST["keyword"];
	$result=$conn->query("select * from users where name LIKE '%{$keyword}%'");
	echo'<br/>';
	echo'<table>';
	echo'<tr><th>id</th><th>name</th></tr>';
	foreach($result as $r)
	{
		echo'<tr>';
		echo'<td>';
		echo'<a href="read.php?id='.$r['id'].'">'.$r['id'].'<a/>';
		echo'</td>';
		echo'<td>'.$r['name'].'</td>';
				echo'</tr>';
		
	}
	echo'</table>';
}

?>
</body>
</html>