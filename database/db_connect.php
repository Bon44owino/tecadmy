<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname  =  "tecadmy";



    $db_connection = mysqli_connect("$hostname", "$username", "$password", "$dbname");

    if(!$db_connection){
        echo "Error Connecting to database";
    }

?>