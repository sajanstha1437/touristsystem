<?php
include('../connect.php');

// login.html から送信されるuserIDとpasswordを受け取る
$u = $_POST['userID'];
$p = $_POST['password'];
try{
	$result = $conn->query(     // SELECT文を実行
		"SELECT * FROM users WHERE userID ='{$u}'");
	$r = $result->fetch(); 
}catch(PDOException $e){
	die($e->getMessage());
}
	// $rはuserIDが$uの値であるレコード（配列）
$conn = null; 

if( $r != null && $r['password'] == $p ):
	// ログイン成功
	session_start();
	$_SESSION['id'] = $r['id'];
	$_SESSION['name'] = $r['name'];
	
	header("Location:../users/search.php");
else:
	// ログイン失敗
	header("Location:failure.html");
endif;
?>