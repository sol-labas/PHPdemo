<?php include "db.php";?>
<?php include "functions.php";?>
<?php
if(isset($_POST['update'])){
update();
}
include_once "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">User Update</h1>
        <form action="login_update.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
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

            <input class="btn btn-primary" type="submit" name="update" value="Update">

        </form>

    </div>

<?php
include_once "includes/footer.php";
?>