<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$i = "outside";

function convert (){
    global $i;
    $i = "inside";
}

echo $i;
convert();
echo $i;

?>

</body>

</html>
