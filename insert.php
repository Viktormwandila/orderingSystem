<?php
$db_conx = mysqli_connect("localhost", "root", "", "restaurants");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
// store product
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //get product views
    $orderItems = $_POST['orderItems'];
    //insert views in database table
    
    $result = mysqli_query($db_conx, "INSERT INTO orders(orderItems) VALUES('$orderItems')")
    or die('Order could not be placed.');

    if($result) {
        //get ID of insert product and echo it as json
        $id = mysqli_insert_id();
        header('Content-Type: application/json');
        echo json_encode($id);
    }
}
if($_SERVER["REQUEST_METHOD"] == "GET"){
    // do get stuff here like get orders from database
}

?>