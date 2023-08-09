<?php
session_start();
if(!$_SESSION['name'])
{
    header('Location: login.php');
}




?>

<!--
include('includes/dbcon.php');
if($con)
{

}
else
{
    header('Location: index.php');
}
if(!$_SESSION['name'])
{
    header('Location: login.php');
}
?>
-->