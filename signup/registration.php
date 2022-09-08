<?php

session_start();


$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$cnpassword = $_POST['cnpassword'];

$conn = new mysqli('127.0.0.1', 'root', '');

if(!$conn){
	echo'Not connceted to server';
}

if(!mysqli_select_db($conn,'registration'))
{
	echo'database not selected';
}

$sql = ("SELECT username FROM regtable WHERE username=?");

 $stmt = mysqli_stmt_init($conn);
 mysqli_stmt_prepare($stmt, $sql);
 mysqli_stmt_bind_param($stmt, "s" , $username);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_store_result($stmt);
 $resultCheck = mysqli_stmt_num_rows($stmt);
if($resultCheck > 0){
	echo "ALAS! User Name Already Has Been Taken.......";
	exit();
}else{
	$sql = ("INSERT INTO `regtable` (`fullname`, `username`, `email`, `phonenumber`, `password`) 		VALUES (?, ?, ?,?,?)");
	$stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
	mysqli_stmt_bind_param($stmt, "sssss",$fullname, $username, $email,$phonenumber, $password);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_store_result($stmt);
	echo "Hurray!...Subscribe Successful";
	
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}

header("refresh:2; url=../index.php");
    

?>
