<?php

include_once "db.php";
include_once "functions.php";

if(isset($_POST['delete'])){
delete();
}
include_once "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Uses Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <select name="id" id="">
                    <?php
                        showAllData();
                    ?>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="delete" value="Delete">

        </form>

    </div>

<?php
include_once "includes/footer.php";
?>