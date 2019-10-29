<?php
$conn = mysqli_connect('localhost', 'root', '', 'users');
if(!$conn){
die("Database failed connection");
}
