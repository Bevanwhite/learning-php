<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Bevan";
        $number = 10000;
        $Number_list= 100;
        echo $name . " " . $number;
        $name = "<h1>Hello bevan</h1>, what the fuck you have done";
        echo $name;
        // variables with calculations
        $num_1 = 56;
        $num_2 = 45;
        echo "<br>";
        echo $num_1 + $num_2;echo "<br>";
        echo $num_1 - $num_2;echo "<br>";
        echo $num_1 * $num_2;echo "<br>";
        echo $num_1 / $num_2;echo "<br>";echo "<br>";

        echo 56 + 45;echo "<br>";
        echo 56 - 45;echo "<br>";
        echo 56 * 45;echo "<br>";
        echo 56 / 45;echo "<br>";
        echo 45   +   34   *   45   /   421   -   45;
        
        $number = array(1,2,3);
        echo "<br>";
        print implode (', ', $number);
        $number = [1,2,3,4];
        echo "<br>";
        // how to print details in array in a one line
        print implode (', ', $number);echo "<br>";
        print join(' ,',$number);echo "<br>";
        $number = array(267, 8765, 345, '2568', 245, '<h1>hello</h1>',55);
        print join(', ', $number);echo "<br>";echo "<br>";
        echo $number[5];
        // array with element numbers
        print_r($number);

    ?>
</body>
</html>
