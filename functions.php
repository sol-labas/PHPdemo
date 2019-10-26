<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function init(){
    say_Something();
    calculate();
}
function say_Something(){
    echo "Hello students, do you like this class"."<br>";
}

function calculate(){
    echo (4567*678)."<br>";
}

init();

?>

</body>

</html>
