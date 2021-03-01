<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo pow(2,7)."<br>";
echo rand(1,1000)."<br>";
echo sqrt(25)."<br>";
echo ceil(25.6)."<br>";
echo floor(25.6)."<br>";
echo round(25)."<br>";

// string 
$string = "this is it  ";

echo "<br>";
echo strlen($string)."<br>";
echo strtoupper($string)."<br>";
echo strtolower($string)."<br>";


// array
$list = [343,34,324,23,54,232,453,1];

echo "<br>";
echo max($list)."<br>";
echo min($list)."<br>";
print join(',', $list)."<br>";
print implode(',',$list)."<br>";
print_r($list);


?>
</body>
</html>