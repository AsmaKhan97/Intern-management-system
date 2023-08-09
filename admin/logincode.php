<?php
include('security.php');
include('includes/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query ="SELECT * FROM user WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($con, $query);
    $usertypes = mysqli_fetch_array($query_run);
    
    $_SESSION['image'] ='upload/'.$usertypes['image'];


    if($usertypes)
    {
        $_SESSION['name'] = $email_login;


        if($usertypes['usertype'] == "admin")
        {
            header('Location: index.php');
        }
        else if($usertypes['usertype'] == "user")
        {
            header('Location: ../user/index.php');
        }
    }
    else 
    {
        $_SESSION['status'] = "Email id or Password is Invalid";
        header('Location: login.php');
    }
}
?>