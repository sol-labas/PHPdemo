<?php
$name = "AngelaKuznetsova";
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_COOKIE[$name])){
    $someOne = $_COOKIE[$name];
    echo $someOne;
}else{
    $someOne='';
}

?>

</body>

</html>
