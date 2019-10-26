<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function calculate ($num, $num2){
    $sum = $num+$num2;
    return $sum;
}

$result = calculate(890, 3456);
$result = calculate(1000, $result);
echo $result;

?>

</body>

</html>
