<?php

class dbConnection{
    protected $dbc;
    public $db_host="localhost";
    public $db_name="tutlage";
    public $db_user="root";
    public $db_password="";

    function connect(){
        try{
        $this->dbc = new PDO("mysql:host=localhost;dbname=tutlage", $this->db_user, $this->db_password);
        $this->dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->dbc;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}