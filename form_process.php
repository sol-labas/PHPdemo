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