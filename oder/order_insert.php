
<?php

    header("Access-Control-Allow-Methods: POST");
    header("Content-Type: application/json");

    include("order_config.php");
    $c1 = new Order_config();

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $id = $_REQUEST['id'];
        $date = $_REQUEST['date'];
        $status = $_REQUEST['status'];

        if(empty($id) || empty($date) || empty($status)){
            $arr['err'] = "All fields are required!";
            echo json_encode($arr);
            exit;
        }

        $res = $c1->insertData($id, $date, $status);
        if($res){
            $arr['status'] = "order data insert successfully!!";
            echo json_encode(value: $arr);
        }else{
            $arr['err'] = "order data insert failed!!";
            echo json_encode($arr);
        }
    }
    else{
        $arr['msg'] = "Only POST method is allowed !!";
        echo json_encode($arr);
    }

?>
