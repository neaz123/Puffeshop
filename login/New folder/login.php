<?php


    
    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con){
        echo'Not connceted to server';
    }

    if(!mysqli_select_db($con,'contact'))
    {
        echo'database not selected';
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripcslashes($username);
    $username = stripcslashes($password);

    $username=mysql_real_escape_string($username);
    $username=mysql_real_escape_string($password);

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