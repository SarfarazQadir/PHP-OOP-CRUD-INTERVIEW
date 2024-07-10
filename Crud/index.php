<?php

include "../Connection/connection.php";

if(isset($_POST['btninsert'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $result = $database->insert($name, $email, $age);
    if($result){
        echo "Data inserted successfully";
        }else{
            echo "Data not inserted";
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="number" name="age" placeholder="Age"><br><br>
        <input type="submit" name="btninsert" value="Add">
    </form>
</body>
</html>