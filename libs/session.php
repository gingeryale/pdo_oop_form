<?php
include_once('login_users.php');
session_start();
if (isset($_SESSION['tutlage']))
{
   $session_name = $_SESSION['tutlage'];
}
else
{
    header("location: login.php");
}