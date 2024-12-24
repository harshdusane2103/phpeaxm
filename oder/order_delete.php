
<?php

header("Access-Control-Allow-Methods: DELETE");
header("Content-Type: application/json");

include("order_config.php");
$c1 = new Order_config();

if($_SERVER['REQUEST_METHOD'] == "DELETE"){
    $res = file_get_contents("php://input");
    parse_str($res,$data);
    // $id = $data["id"];
    $result = $c1->removeData();

    if($result)
    {
        $arr['status']='order deleted Successfully !';
    }
    else{
        $arr['error']= 'Failed to delete order !';
    }
}else{
    $arr['err'] = "Only DELETE method is allowed !!";
}

echo json_encode($arr);

?>
