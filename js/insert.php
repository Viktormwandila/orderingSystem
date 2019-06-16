<?php
die('here');
header("Access-Control-Allow-Origin: *");

$db_conx = mysqli_connect("localhost", "root", "", "restaurants");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
//store product
http_response_code(200);
// if($_POST['action'] == 'store') {
//     //get product views
//     $orderItems = $_POST['orderItems'];
//     //insert views in database table
//     console.log('products', $orderItems);
    
//     $result = mysqli_query($db_conx, "INSERT INTO orders(orderItems) VALUES('$orderItems')")
//     or die('Order could not be placed.');

//     if($result) {
//         //get ID of insert product and echo it as json
//         $id = mysqli_insert_id();
//         header('Content-Type: application/json');
//         echo json_encode($id);
//     }
// }
}

?>