<?php
include_once('libs/login_users.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        />
        <title>Registration Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    </head>
 <header class="header">
    <div class="logo">
        <img src="" alt="">
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="navbar">
            <ul style="color: var(--bs-yellow);">
                <li class="nav-item">home</li>
            </ul>
        </div>
    </nav>
 </header>
    <body>
        <div class="main">
            <div class="container">
            <h2>Registration Form</h2>
            <div class="bg-warning">
                <?php
                 if(isset($errors)){
                    echo $errors;
                 }

                ?>
            </div>
            <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username"
                    >Username:</label
                >
                <input
                    type="text"
                    id="username"
                    name="username"
                    
                />
                </div>
              
<div class="mb-3">
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    
                />
</div>
<div class="mb-3">
                <label for="password"
                    >Password:</label
                >
                <input
                    type="text"
                    id="password"
                    name="password"
                    pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$"
                    title="Password must contain at least one number, 
                           one alphabet, one symbol, and be at 
                           least 8 characters long"
                    
                />
</div>
<div class="mb-3">
                <label for="repassword"
                    >Re-type Password:</label
                >
                <input
                    type="text"
                    id="repassword"
                    name="repassword"
                    
                />
</div>

                <div class="mb-3">
                <button type="submit" name="register" id="register">
                    Submit
                </button>
            </form>
        </div>
        </div>

        <footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        </footer>
    </body>
</html>
