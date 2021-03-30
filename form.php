<?php
if(isset($_POST['submit'])){
    echo "yess it is works"."<br>";
    echo $_POST['username']."<br>";
    echo $_POST['password']."<br>";

    $minimum = 5;
    $maximum = 10;

    if(strlen($_POST['username']) < $minimum ){
        echo "Username has to be longer than five"."<br>";
    }
    if(strlen($_POST['username']) > $maximum ){
        echo "Username has not to be longer than ten"."<br>";
    }
    $name = array('Bevan','bevan','jeffery', 'tom','eleana');
    if(!in_array($_POST['username'],$name)){
        echo "sorry your are not allowed"."<br>";
    } else{
        echo "Welcome to the System"."<br>";
    }

    $connection = mysqli_connect('localhost', 'root', '', 'beva');

    if($connection){
        echo "We are Connected"."<br>";
    }else{
        die( "database have been crashed!!!")."<br>";
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO USERS(username,password)";
    $query .= "VALUES ('$username', '$password')";

    if(strlen($username) > 0 && strlen($password) > 0 ){
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die('Query Failed'.mysqli_error());
        }
    }

    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'. mysqli_error());
    }

    while($row = mysqli_fetch_row($result)){
            print_r($row)."<br>";
    }

    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'. mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)){
        ?>
        <pre>
        <?php
            print_r($row)."<br>";
        ?>
        </pre>
        <?php
    }
        // CREATE TABLE USERS( 
        //     ID INT AUTO_INCREMENT PRIMARY KEY, 
        //     USERNAME VARCHAR(50), 
        //     PASSWORD VARCHAR(50))
}

function showAllData(){
    $connection = mysqli_connect('localhost', 'root', '', 'beva');
    $query = "SELECT * FROM USERS";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Query Failed'. mysqli_error());
    }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['ID'];
        echo $id;
        echo "<option name='$id'>$id</option>";
    } 
}

if(isset($_POST['update'])){
        $connection = mysqli_connect('localhost', 'root', '', 'beva');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['se'];

        $query = "UPDATE users SET ";
        $query .= "USERNAME = '$username', ";
        $query .= "PASSWORD = '$password' ";
        $query .= "WHERE ID = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-3 mb-5">
    <div class="card">
        <form action="form.php" method="post">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
                <select name="se">
                    <?php
                        showAllData();
                    ?> 
                </select>
            <input type="submit" name="submit">
            <input type="submit" name="update" value="update">
        </form>


    </div>
</div>
</body>
</html>
