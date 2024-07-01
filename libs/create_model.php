<?php

include_once('class.ManageModel.php');
$init = new ManageModel();

if(isset($_POST['create']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $label = $_POST['label'];

    if(empty($title) || empty($description) || empty($due_date) || empty($label))
    {
            $errors =  "All fields required";
    }
    else
    {
        $title = htmlspecialchars($title);
        $description = htmlspecialchars($description);
        $ddate = htmlspecialchars($due_date);
        $label = htmlspecialchars($label);

        $username = '7';
        $cdate = date("Y-m-d");

        $new_model_entry = $init->createModel($username,$title,$description,$ddate,$cdate,$label);
        if($new_model_entry == 1)
        {
            $success = "Model enetered successfully";
        }else{
            $errors = 'Something went wrong';
        }
    }


}