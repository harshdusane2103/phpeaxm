
<?php

header("Access-Control-Allow-Methods: PUT,PATCH");
header("Content-Type: application/json");

include("product_config.php");
$c1 = new Product_config();

if($_SERVER['REQUEST_METHOD'] == "PUT" || $_SERVER['REQUEST_METHOD'] == "PATCH"){

    $res = file_get_contents("php://input");
    parse_str($res, $data);
    $id = $data["id"];
    $price = $data['price'];
    $result = $c1->updateData($id, $price);

    if($result)
    {
        $arr['status']='Product description Updated Successfully !';
    }
    else{
        $arr['error']= 'Product description Updatation Failed !';
    }
}else{
    $arr['err'] = "Only PUT & PATCH method is allowed !!";
}

echo json_encode($arr);

?>
