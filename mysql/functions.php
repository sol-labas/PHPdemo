<?php

include_once "db.php";

function create(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hash_and_salt = $hashFormat . $salt;

    $password = crypt($password, $hash_and_salt);

    $conn = mysqli_connect('localhost', 'root', '', 'users');
    if(!$conn){
        die("Database failed connection");
    }

    $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query failed'.mysqli_error());
    }else{
        echo "Record created";
    }

}

function read(){
    global $conn;
    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query failed' . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)){
            print_r($row);
    }
}


function showAllData(){
    global $conn;
    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query faild' . mysqli_error());
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function update(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username= '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    }else{
    echo "Record updated";
}

}

function delete(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed" . mysqli_error($conn));
    }else{
        echo "Record deleted";
}

}