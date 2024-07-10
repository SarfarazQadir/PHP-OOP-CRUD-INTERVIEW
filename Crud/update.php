<?php

include "../Connection/connection.php";

$id = $_GET['id'];

$re = $database->edit($id);
$row = mysqli_fetch_assoc($re);


if(isset($_POST['btnupdate'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $result = $database->update($id, $name, $email, $age);
    if($result){
        echo "Data Updated successfully";
        header('Location:fetch.php');
        }else{
            echo "Data not Updated";
            }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE CRUD</title>
</head>
<body>
    <h1>UPDATE CRUD</h1>
    <form method="post">
        <input value="<?php echo $row['id']?>" type="id" name="id" placeholder="id" readonly><br><br>
        <input value="<?php echo $row['name']?>" type="text" name="name" placeholder="Name"><br><br>
        <input value="<?php echo $row['email']?>" type="text" name="email" placeholder="Email"><br><br>
        <input value="<?php echo $row['age']?>" type="number" name="age" placeholder="Age"><br><br>
        <input type="submit" name="btnupdate" value="Update">
    </form>
</body>
</html>