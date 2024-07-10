<?php

class Database{

    private $conn ;

    public function connection(){
        $this->conn = mysqli_connect("localhost","root","","crud_db");
        if(mysqli_connect_errno()){
            die("connection failed!". mysqli_connect_error());
        }
    }

    public function insert($name, $email, $age){
        $query = "INSERT INTO `details` (`name`,`email`,`age`) VALUES('$name', '$email', '$age')";
        $result = mysqli_query($this->conn, $query);
        if($result){
           return true;
            }else{
                return false;
                }
    }
    public function fetch(){
        $query = "SELECT * FROM `details`";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
    public function delete($id){
        $query = "DELETE FROM `details` WHERE `id`=$id";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
    public function edit($id){
        $query = "SELECT * FROM `details` WHERE `id`='$id'";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
    public function update($id,$name,$email,$age){
        $query = "UPDATE details SET name='$name', email='$email', age=$age WHERE id=$id";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }


}

$database = new Database();
$database->connection();

?>