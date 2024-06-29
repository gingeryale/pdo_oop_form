<?php

 include_once('class.ManageUsers.php');

if(isset($_POST['register']))
{
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
            $register_user = $user->registerUser($username,$email,$password,$ipaddress,$date,$time);
            if($register_user == 1){
                $make_session = $user->getUserData($username);
                print_r($make_session);
            }
        } 
        else 
        {
            $errors = 'Username taken';
        }
    }
}
