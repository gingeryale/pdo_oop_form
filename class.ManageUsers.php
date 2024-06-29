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
    function registerUsers($uname,$upw,$uip,$urdate,$urtime){
        $query=$this->link->prepare("INSERT INTO `USERS` (u_name,u_pw,u_ip,u_reg_date,u_reg_time) VALUES(?,?,?,?,?)");
        $values = array($uname,$upw,$uip,$urdate,$urtime);
        $query->execute($values);
        $counts=$query->rowCount();
        return $counts;
    }
}

$users = new ManageUsers();
echo $users->registerUsers('usertwo','123456','127.0.0.1','06-29-2024','00:02');