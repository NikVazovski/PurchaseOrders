<?php 
require_once ($modules_root . "purchase_orders/class/Purchase_ordersHome.class.php");
$purchaseHome = new Purchase_ordersHome();
$list = $purchaseHome->getOrders();
//$list2 = $purchaseHome->getOrders();
$type = $purchaseHome ->getType();




foreach($list as $item) {
    $tmp['row'] .= $templateHome->parse ($modules_root . 'purchase_orders/tpl/first.tpl', $item );
}
$module['text'].=$templateHome->parse ($modules_root . 'purchase_orders/tpl/second.tpl', $tmp);




foreach($type as $item) {
    //var_dump($item);
    $q['third'] .= $templateHome->parse ($modules_root . 'purchase_orders/tpl/third.tpl', $item );
}
$module['text'].=$templateHome->parse ($modules_root . 'purchase_orders/tpl/fourth.tpl', $q);

//include 'newOrder.inc.php'

?>