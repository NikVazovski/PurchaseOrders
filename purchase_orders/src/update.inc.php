<?php
require_once ($modules_root . "purchase_orders/class/Purchase_ordersHome.class.php");
$purchaseHome = new Purchase_ordersHome();

if($request->hasValue('save')) { 
    echo 'text';
var_dump($_POST);

$id_type = $_POST['id_type'];
$id_room = $_POST['id_room'];
$description = $_POST['description'];

 $newOrder = $purchaseHome ->createOrder($id_type, $description, $id_room);


}








?>