<?php
include_once('includes/header.php');
include_once('libs/login_users.php');
include_once('libs/list-model.php');

?>

<body>
    welcome <?= $_SESSION['tutlage']; ?>

    <div class="container">
        <div class="col-lg-3">
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="">link</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9" id="model">
        <h2>Manage Model Data</h2>
        <a href="create-model.php">Add new note</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>
                        title
                    </td>
                    <td>
                        brief
                    </td>
                    <td>
                        time left
                    </td>
                    <td>
                        progress
                    </td>
                    <td>
                        actions
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        model
                    </td>
                    <td>
                        some brief text
                    </td>
                    <td>
                        2024-06-30
                    </td>
                    <td>
                        18 hours
                    </td>
                    <td>
                    <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
                    </td>
                    <td>
                        edit or delete
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>


<?php include_once('includes/footer.php') ?>
