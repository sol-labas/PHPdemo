<?php
include_once "db.php";
include_once "functions.php";
include_once "includes/header.php";
?>

<div class="container">
    <div class="col-xs-6">
        <pre>
        <?php
        read();
        ?>
        </pre>
    </div>

<?php
include_once "includes/footer.php";
?>