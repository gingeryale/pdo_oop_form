<?php

include_once('includes/header.php');
include_once('libs/create_model.php');
?>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    dateFormat:'yy-mm-dd'});
  } );
  </script>
<h2>create new entry</h2>


    
<div class="bg-warning">
    <?
    if (isset($errors))
    {
        echo $errors;
    }
    ?>
     <?
    if (isset($success))
    {
        echo $success;
    }
    ?>
</div>

<div class="container">
<form method="post" action="create-model.php">
    <div class="mb-3">
        <label for="title">title</label>
        <input type="text" name="title">
    </div>
    <div class="mb-3">
        <label for="description">description</label>
        <textarea type="text" name="description">
            </textarea>
    </div>
    <div class="mb-3">
        <label for="due_date">due date</label>
        <input type="text" name="due_date" id="datepicker">
    </div>
    <div class="mb-3">
        <label for="label">Label</label>
        <select name="label" id="label">
            <option value="">Choose</option>
            <option value="general">general</option>
            <option value="readlater">Read Later</option>
            <option value="important">important</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="create" id="create">Submit</button>
    </form>
</div>


<?php include_once('includes/footer.php') ?>
