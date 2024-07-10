<?php

include "../Connection/connection.php";

$id = $_GET['id'];

$result = $database->delete($id);
if($result){
    echo "Deleted";
    header('Location:fetch.php');
}else{
    echo "Data Not Deleted";
}


?>