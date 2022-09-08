<?php

session_start();

$username = $_POST['username'];
    $password = $_POST['password'];
    
    $con = mysqli_connect('127.0.0.1','root','','registration');
    if(!$con){
        echo'Not connceted to server';
    }

    if(!mysqli_select_db($con,'registration'))
    {
        echo'database not selected';
    }
    

    if (!isset($_POST['username'])) {
        echo "Uhoh, you need to fill out the whole form!";
        exit;
      }

      if (!isset($_POST['password'])) {
        echo "Uhoh, you need to fill !";
        exit;
      }
     
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    $username=mysqli_real_escape_string($con, $username);
    $password=mysqli_real_escape_string($con, $password);

    $result = mysqli_query($con, "select * from regtable where username ='$username' and password ='$password' ")
    or die("failed to query database ".mysqli_error());
       
    $row= mysqli_fetch_array($result);
     
    if($row['username'] == $username && $row['password'] == $password  ){
        echo"login success!! welcome ".$row['username'];
        header("refresh:1; url=../index.php");
        $_SESSION['username']=$username;


    }
    else{
        echo"login failed";
    }


    // header("refresh:2; url=../index.html");
?>