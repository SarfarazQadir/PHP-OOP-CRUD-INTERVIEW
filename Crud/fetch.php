<?php

include "../Connection/connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>show data</h1>

    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>AGE</th>
                <th colspan="2">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
        $res = $database->fetch();
        while($row = mysqli_fetch_assoc($res)){
        ?>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['age']?></td>
                <td>
                    <a href="delete.php?id=<?php echo $row['id']?>"><button>DELETE</button></a>
                    <a href="update.php?id=<?php echo $row['id']?>"><button>UPDATE</button></a>

            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>