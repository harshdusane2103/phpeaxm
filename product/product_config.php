
<?php

class Product_config{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "customer";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->database);
    }

    public function insertData($proname,$price){
        $query = "INSERT INTO product (proname, price) VALUES ('$proname', $price )";
        $insertData = mysqli_query($this->conn, $query);
        return $insertData;
    }

    public function updateData($id, $price)
    {
        $query = "UPDATE product SET price='$price' WHERE id=$id";
        $update = mysqli_query($this->conn, $query);
        return $update;
    }
}

?>
