<?php
session_start();
if(isset($_SESSION['login_user']))
{
    
    unset($_SESSION['login_user']);  
    session_destroy();
    header("Location: loginpage.php");
}
else
{
    header("Location: loginpage.php");
}