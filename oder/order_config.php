
<?php

class Order_config{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "customer";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    }

    public function insertData($id,  $date,$status){
        $query = "INSERT INTO oders (id,date,  status) VALUES ($id,'$date','$status')";
        $insertData = mysqli_query($this->conn, $query);
        return $insertData;
    }

    public function removeData(){
        $query = "DELETE FROM oders";
        $res = mysqli_query($this->conn, $query);
        return $res;
    }
}

?>
