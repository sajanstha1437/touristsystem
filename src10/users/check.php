<?php
session_start();
include('../connect.php');
$u = $_POST['userid'];
$p = $_POST['password'];
try{
	$result = $conn->query(     // SELECT文を実行
		"SELECT * FROM users WHERE userid='{$u}'");
	$r = $result->fetch(); 
}catch(PDOException $e){
	die($e->getMessage());
}
	// $rはuserIDが$uの値であるレコード（配列）
$conn = null; 

if( $r != null && $r['password'] == $p ):
	
	$_SESSION['username'] = $r['userid'];
	
	header("Location:../../final project/reservation1.php ");
else:
	// ログイン失敗
	header("Location:register.php");
endif;
?>