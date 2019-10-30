<?php

include_once "db.php";

function create(){
    global $conn;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'users');
    if(!$conn){
        die("Database failed connection");
    }

    $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die('Query faild'.mysqli_error());
    }else{
        echo "Record created";
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