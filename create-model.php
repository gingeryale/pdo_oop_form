<?php
include_once('libs/login_users.php');
session_start();
include_once('includes/header.php');
?>

<h2>create new entry</h2>

<div class="container">
    <form action="">
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
        <input type="text" name="due_date">
    </div>
    <div class="mb-3">
        <label for="classify">Calssification</label>
        <select name="classify" id="classify">
            <option value="">Choose</option>
            <option value="study">study</option>
            <option value="rec">recreational</option>
            <option value="general">general</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="create" id="create">Submit</button>
    </form>
</div>


<?php include_once('includes/footer.php') ?>
