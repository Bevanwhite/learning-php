<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Comparison operators</h2>
<pre>
    equal           ==
    identical       ===
    compare         > < >= <= <>
    not equal       !=
    not identical   !==
</pre>
<h2>Logical Operators</h2>
<pre>
    and             &&
    or              ||
    not             !
</pre>
<?php
    // equal            ==
    if (5=="5"){
        echo "is it true 5 == 5" . "<br>";
    }; 
    // identical        ===
    if(5 === "5") {
        echo "is this true 5 === 5". "<br>";
    };
    // compare          > < >= <= <>
    if(6 > 5){
        echo "this is correct 6 > 5". "<br>";
    }else {
        echo "it's not 6 > 5". "<br>";
    };
    // compare          > < >= <= <>
    if(6 < 5){
        echo "this is correct 6 < 5". "<br>";
    }else {
        echo "this is not correct 6 < 5". "<br>";
    };
    // compare          > < >= <= <>
    if(6 >= 5){
        echo "this is correct 6 >= 5". "<br>";
    }else {
        echo "it's not 6 >= 5". "<br>";
    };
    // compare          > < >= <= <>
    if(6 <= 5){
        echo "this is correct 6 <= 5". "<br>";
    }else {
        echo "this is not correct 6 <= 5". "<br>";
    };
    // compare          > < >= <= <>
    if(6 <> 7){
        echo "some value is less than or gratter than ". "<br>";
    };
    // not equal to     !=
    if(4!=5){
        echo "is this true 4 != 5". "<br>";
    };
    // not identical to !==
    if(4!=="4"){
        echo "is this true 4 !== 4". "<br>";
    };

    // AND and OR condtions
    if(4==4 && 4!==4){
        echo "this is true"."<br>";
    }else {
        echo "this is good but up condition is wrong"."<br>";
    };

    if(4==4 || 4!==4){
        echo "this can be true 4==4 || 4!==4"."<br>";
    };


?>


</body>
</html>
