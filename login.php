<?php
include_once ('libs/login_users.php');
include_once ('includes/header.php');
?>


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

        <div class="container container_login">
            <h2 class="mb-4">Login Form</h2>
            <div class="bg-warning">
                <?php
                if (isset($errors)) {
                    echo $errors;
                }

                ?>
            </div>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="login_email">Email:</label>
                    <input type="email" id="login_email" name="login_email" />
                </div>
                <div class="mb-3">
                    <label for="login_password">Password:</label>
                    <input type="text" id="login_password" name="login_password"/></div>
                    
                    <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="login" id="login">
                            Login
                        </button>
                    </div>
            </form>
            <div>
                <p>
                    <a href="" id="show_register_form">Not a user? Register Here</a>
                </p>
            </div>
        </div>
    </div>

    <div class="container container_register">
    <h2 class="mb-4">Registration Form</h2>
        <div class="bg-warning">
            <?php
            if (isset($errors)) {
                echo $errors;
            }

            ?>
        </div>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" />
            </div>

            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="text" id="password" name="password"
                    pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" title="Password must contain at least one number, 
                           one alphabet, one symbol, and be at 
                           least 8 characters long" />
            </div>
            <div class="mb-3">
                <label for="repassword">Re-type Password:</label>
                <input type="text" id="repassword" name="repassword" />
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="register" id="register">
                    Submit
                </button>
            </div>
        </form>
        <div>
            <p>
                <a href="" id="show_login_form">Already A user? Login Here</a>
            </p>
        </div>
    </div>
    </div>

    <?php include_once('includes/footer.php') ?>
</body>

</html>