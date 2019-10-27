
<?php

if(isset($_POST ['submit'])){
    $name = ['Angela', 'Kevin', 'Alyx', 'Edwin'];
    $minimum = 1;
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(strlen($username) < $minimum){
        echo "username should be longer then 1 character";
    }
    echo "hello, $username!";

    if(!in_array($username, $name)){
        echo "Sorry you cannot enter into web-site!";
    }else{
        echo "Welcome, ".$username;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter your name">
    <br>
    <input type="password" name="password" placeholder="Enter your password">
    <br>
    <input type="submit" name="submit">


</form>



</body>

</html>
