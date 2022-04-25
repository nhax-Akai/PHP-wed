<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];

            $query = " insert into user (User_Name, User_Email,User_Age) values('$UserName','$UserEmail','$UserAge')"; //sua user thanh table cua ban
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo ' Sai o file insert.php ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>