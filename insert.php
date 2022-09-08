<?php

    $con = mysqli_connect('127.0.0.1','root','');
    if(!$con){
        echo'Not connceted to server';
    }

    if(!mysqli_select_db($con,'contact'))
    {
        echo'database not selected';
    }

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];

    $sql ="INSERT INTO contactform (name,email,number) VALUES ('$Name','$Email','$Number')";
    if(!mysqli_query($con,$sql))
    {
        echo'NOt inserted';
    }
    else
    {
        echo'inserted';
    }

    header("refresh:1; url=index.php");

?>