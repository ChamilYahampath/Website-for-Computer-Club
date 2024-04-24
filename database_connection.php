<?php

    $host="localhost";  
    $username="root";   
    $password="";       
    $dbname = "ComputerClub"; 



    $connection = mysqli_connect($host,$username,$password,$dbname);

    if(!$connection)
    {
        die('Could not Connect MySql Server:' .mysql_error());
    }
    else
    {
        echo "Connected Successfully";
    }
?>