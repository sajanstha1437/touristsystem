<?php
include('../src10/connect.php');
$u = $_POST['username'];
$p = $_POST['password'];
try{
	$result = $conn->query(     // SELECT文を実行
		"SELECT * FROM users WHERE username='{$u}'");
	$r = $result->fetch(); 
}catch(PDOException $e){
	die($e->getMessage());
}
	// $rはuserIDが$uの値であるレコード（配列）
$conn = null; 

if( $r != null && $r['password'] == $p ):
	// ログイン成功
	/*session_start();
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	*/
	header("Location:reservation1.php");
	echo 'hello!!! user';
else:
	// ログイン失敗
	header("Location:failure.html");
endif;
?>