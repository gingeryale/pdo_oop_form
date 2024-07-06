<?php

include_once('../class.ManageModel.php');
include_once('session.php');

$init=new ManageModel();

if(isset($_GET['label']))
{
    $label = $_GET['label'];
    $list_Model=$init->listModel($session_name,$label);
}
else
{
    $list_Model=$init->listModel($session_name);
}
print_r($list_Model)
?>