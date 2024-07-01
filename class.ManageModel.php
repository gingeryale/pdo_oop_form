<?php

include_once('class.Database.php');

class ManageModel{
    public $link;

    function __construct()
    {
        $db_connection = new dbConnection();
        $this->link = $db_connection->connect();
        return $this->link; 
    }

    function createModel($username,$title,$description,$ddate,$cdate,$label)
    {
       $query = $this->link->prepare('INSERT INTO `model` (m_username,m_title,m_description,m_due_date, m_created_date,m_label) VALUES (?,?,?,?,?,?)');
       $values = array($username,$title,$description,$ddate,$cdate,$label);
       $query->execute($values);
       $counts=$query->rowCount();
       return $counts;
    }
    function listModel($username,$label)
    {
        $query = $this->link->query('SELECT * FROM `model` WHERE m_username="$username" AND m_label="$label"');
        $counts = $query->rowCount();
        if($counts >=1){
            $result = $query->fetchAll();
        }
        else
        {
            $result = $counts;
        }
        return $result;
    }
    function countModel($username,$label)
    {
        $query = $this->link->prepare('SELECT count(*) AS TOTAL_MODEL FROM `model` WHERE m_username="$username" AND m_label="label"');
        $query->fetchAll(PDO::FETCH_OBJ);
        $counts = $query->fetchAll();
        return $counts;
    }

    function editModel($username,$id,$values)
    {
        $counter=0;
        foreach($values as $key=>$value)
        {
            $query = $this->link->prepare('UPDATE `model` SET $key = "$value" WHERE m_username="$username" AND id="$id"');
            $counter++;
        }
        return $counter;
        
    }

    function deleteModel($username,$id)
    {
        $query = $this->link->prepare('DELETE FROM `model` WHERE m_username="$username" AND m_id="$id" LIMIT 1');
        $counts=$query->rowCount();
        return $counts;
    }
}