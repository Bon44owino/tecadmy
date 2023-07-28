<?php 
include_once('./db_connect.php');

    if(isset($_POST['submitMessage']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];



        $insertContactMessageQuery = "INSERT INTO contact_us (name, email, subject, body, created_at) 
                                        VALUES ( '$name', '$email', '$subject', '$body', now())";
        

        $executeInsertContactMessageQuery = mysqli_query($db_connection, $insertContactMessageQuery);

        if($executeInsertContactMessageQuery)
        {
            // $_SESSION

            header("Location: ../contact.php");
        }
        else 
        {
            header("Location: ../contact.php");  
        }

    }


?>