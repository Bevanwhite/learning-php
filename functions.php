<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    function justTheWayYouAre(){
        echo calculate(45,80)."<br>";
        saySomething();
    }

    function saySomething(){
        echo "just the way you like it"."<br>";
    }

    function calculate($number1,$number2){
        $number = $number1 + $number2;
        return $number;
    }

    justTheWayYouAre();


    // try out the local variable    
    $x = "outside"; // global

    function bevCode(){
        global $x;
        $x = "inside"; // local
        echo $x."<br>";
    }
    bevCode();
    echo $x."<br>";

    // define the constant
    $number = 100;
    define("number", 1000);
    echo number."<br>";
    $number = 100;
    echo number."<br>";
    define("number", 900);
    echo number."<br>";

?>
</body>
</html>