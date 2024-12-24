
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("product_config.php");
    $c1 = new Product_config();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $proname = $_REQUEST['proname'];
        $price = $_REQUEST['price'];

        if(empty($proname) || empty($price)){
            $arr['err'] = "All fields are required!";
            echo json_encode($arr);
            exit;
        }

        $res = $c1->insertData($proname, $price);
        if($res){
            $arr['status'] = "Product data insert successfully!!";
            echo json_encode($arr);
        }else{
            $arr['err'] = "Product data insert failed!!";
            echo json_encode($arr);
        }
    }
    else{
        $arr['msg'] = "Only POST method is allowed !!";
        echo json_encode($arr);
    }

?>
