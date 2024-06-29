<?php

include_once('class.Database.php');

class ManageUsers{
    public $link;

    function __construct()
    {
        $db_connection = new dbConnection();
        $this->link = $db_connection->connect();
        return $this->link; 
    }

    // minimum requirements to sign in
    public function registerUser($username,$email,$password,$ipaddress,$date,$time){
        $query=$this->link->prepare("INSERT INTO `USERS` (u_name,u_email,u_pw,u_ip,u_reg_date,u_reg_time) VALUES(?,?,?,?,?,?)");
        $values = array($username,$email,$password,$ipaddress,$date,$time);
        $query->execute($values);
        $counts=$query->rowCount();
        return $counts;
    }

    public function loginUser($email,$password){
        // $query=$this->link->query("SELECT * FROM `users` WHERE u_name='$username' AND u_pw='$password'");
        $query=$this->link->query("SELECT * FROM `users` WHERE u_email='$email' AND u_pw='$password'");
        $rowCount=$query->rowCount();
        return $rowCount;
    }

    public function getUserData($username){
        $query=$this->link->query("SELECT * FROM `users` WHERE u_name='$username'");
        $rowCount=$query->rowCount();
        if($rowCount == 1){
            $result=$query->fetchAll();
            return $result;
        }else{
            return $rowCount;
        }
    }

    public function getExistingUserData($email){
        $query=$this->link->query("SELECT * FROM `users` WHERE u_email='$email'");
        $rowCount=$query->rowCount();
        if($rowCount == 1){
            $result=$query->fetchAll();
            return $result;
        }else{
            return $rowCount;
        }
    }

}

$users = new ManageUsers();
// test connection
//echo $users->registerUsers('usertwo','123456','127.0.0.1','2024-06-29','00:02');