<?php include_once "db.php";
include_once "functions.php";
if(isset($_POST['submit'])) {
    create();
}
include_once "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Create User</h1>
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

<?php
include_once "includes/footer.php";
?>