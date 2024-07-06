<?php

 include_once('../class.ManageUsers.php');

if(isset($_POST['register']))
{
    session_start();
    $user = new ManageUsers();
    $errors = '';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-m-d");
    $time = date("H:i:s");

    if(empty($username) || empty($email) || empty($password) || empty($repassword))
    {
        $errors = 'All fields required';
    }elseif($password !== $repassword)
    {
        $errors = 'Passwords aren\'t equal';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $errors = 'Please enter a valid email';
    }
    else
    {
        $check_availablity = $user->getUserData($username);
        if($check_availablity == 0)
        {
            $password = hash('sha256', $password);
            $register_user = $user->registerUser($username,$email,$password,$ipaddress,$date,$time);
            if($register_user == 1){
                $make_sessions = $user->getUserData($username);
                foreach($make_sessions as $userSessions)
                {
                    $_SESSION['tutlage'] = $userSessions['u_name'];
                   
                    if(isset($_SESSION['tutlage'])){
                        header("location: index.php");
                    }
                }
            }
        } 
        else 
        {
            $errors = 'Username taken';
        }
    }
}





if(isset($_POST['login']))
{
    session_start();
    $user = new ManageUsers();
    $errors = '';

    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    if(empty($email) || empty($password))
    {
    $errors = 'All fields required';
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $errors = 'Please enter a valid email';
    }
    else
    {
        $password = hash('sha256', $password);
        $login_user = new ManageUsers();
        $auth_user = $login_user->loginUser($email, $password);

        if($auth_user == 1){
            echo 'great';
            $make_sessions = $user->getExistingUserData($email);
            foreach($make_sessions as $userSession){
                $_SESSION['tutlage'] = $userSession['u_email'];
                if(isset($_SESSION['tutlage']))
                {
                    header("location: index.php");
                }
            }
       
        }
        else
        {
            $errors = 'Incorrect user credentials';
        }
    }
}