<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$number = 999;

// advanced switch statement in php.
switch($number){
    case $number > 100 && $number < 500 :
        echo "it is less than 500"."<br>";
        break;
    case $number > 499 && $number < 1000:
        echo "it is less than 1000 and grater than 500"."<br>";
        break;
    default :
        echo "we couldn't find anything"."<br>";
        break;
};

?>
</body>
</html>
