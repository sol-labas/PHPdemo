<?php
print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>



<?php
$id = 200;
$button = "Click here now"

?>
<a href="get_global?id=<?php echo $id?>"><?php echo $button?></a>
</body>

</html>
