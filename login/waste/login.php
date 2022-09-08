<?php


    session_start();

    $username =$_POST['username'];
    $password=$_POST['password'];

    $username = stripcslashes($username);
    $username = stripcslashes($password);

    $username=mysql_real_escape_string($username);
    $username=mysql_real_escape_string($password);


    mysql_connect("127.0.0.1","root","");
    mysqli_select_db("registration");

    $result = mysql_query("select * from regtable where username ='$username' and password ='password' ")
    or die("failed to query database ".mysql_error());

    $row= mysql_fetch_array($result);

    if($row['username']  ==$username && $row['password'] ==$password  ){
        echo"login success!! welcome ".$row['username'];
    }
    else{
        echo"login failed";
    }




?>