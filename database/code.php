<?php 
session_start();

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
            $_SESSION['success'] = '<span style="
                                                padding: 15px;
                                                margin-bottom: 20px;
                                                border: 1px solid transparent;
                                                border-radius: 4px;
                                                background-color: #dff0d8;
                                                border-color: #d6e9c6;
                                                color: #3c763d;">
                                        Message Successfully Sent 
                                    </span>';
            header("Location: ../contact.php");
        }
        else 
        {
            $_SESSION['status'] = '<span style="
                                                padding: 15px;
                                                margin-bottom: 20px;
                                                border: 1px solid transparent;
                                                border-radius: 4px;
                                                background-color: #f2dede;
                                                border-color: #ebccd1;
                                                color: #a94442;">
                                        Sorry an Error occurred. Try again
                                    </span>';
            header("Location: ../contact.php");  
        }

    }




        // Login procedure
        if(isset($_POST['loginBtn']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $login_query = "SELECT * FROM users WHERE status = 1 AND email = '$email' AND password ='$password'";
        
            $login_query_run = mysqli_query($db_connection, $login_query);
        
            if (mysqli_fetch_array($login_query_run)) 
            {
                $_SESSION['username'] = $email;
                $_SESSION['success'] = '<span style="
                                                padding: 15px;
                                                margin-bottom: 20px;
                                                border: 1px solid transparent;
                                                border-radius: 4px;
                                                background-color: #dff0d8;
                                                border-color: #d6e9c6;
                                                color: #3c763d;">
                                    Welcome '. $email . '
                                    </span>';
                header("Location: ../index.php");
            }
            else
            {
                $_SESSION['status'] = 
                                '<span style="
                                padding: 15px;
                                margin-bottom: 20px;
                                border: 1px solid transparent;
                                border-radius: 4px;
                                background-color: #f2dede;
                                border-color: #ebccd1;
                                color: #a94442;">
                        Sorry an Error occurred. Try again
                    </span>';
        
                header("Location: ../login.php");
            }
        }


        // Register code 

        if(isset($_POST['registerBtn']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmP = $_POST['confirm_password'];

            if($password === $confirmP)
            {
                // Allow user to register else return an error. 
                $registerQuery = "INSERT INTO users (username, email, password, created_at) 
                                  VALUES ('$username', '$email', '$password', now());";

                $executeRegisterQuery = mysqli_query($db_connection, $registerQuery);

                if($executeRegisterQuery)
                {
                    $_SESSION['username'] = $username;
                    header("Location: ../index.php");
                }
                else 
                {
                    $_SESSION['status'] = '<span style="
                                                        padding: 15px;
                                                        margin-bottom: 20px;
                                                        border: 1px solid transparent;
                                                        border-radius: 4px;
                                                        background-color: #f2dede;
                                                        border-color: #ebccd1;
                                                        color: #a94442;">
                                                Sorry an Error occurred. Try again
                                            </span>';
                    header("Location: ../signpage.php");  
                }

            }
            // If passwords are not same
            else {
                $_SESSION['status'] = '<span style="
                                                        padding: 15px;
                                                        margin-bottom: 20px;
                                                        border: 1px solid transparent;
                                                        border-radius: 4px;
                                                        background-color: #f2dede;
                                                        border-color: #ebccd1;
                                                        color: #a94442;">
                                                Sorry Password(s) do not match. 
                                            </span>';
                    header("Location: ../signpage.php");  
            }
            
        }


?>