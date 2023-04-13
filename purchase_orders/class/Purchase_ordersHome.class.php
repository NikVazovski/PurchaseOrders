<?php


class Purchase_ordersHome{
    private $lk;
	private $request;
        
    public $orders = array(
     'id',
     'id_user',
     'id_dep',
     'id_type',
     'date_create',
     'description',
     'id_room', 
     'is_deleted',
     'is_received',
     'date_receive',
     'id_contract',
     'file',
     'count',
     'description_or'
     );
     public $id_type = array(
     'id_type',
     'count',
     'description_or'
     );

function __construct($request = NULL) {
    $this->lk = $GLOBALS ["db"];
    $this->request = $request;
}

function getOrders(){//получить список заявок на закупку
    $sql = "SELECT * FROM `purchase_orders`
    LEFT JOIN `purchase_objects`ON`purchase_orders`.id_type=`purchase_objects`.id_type";//запрос аргумент фунции гет лист дата, второй аргумент то, что нам нужно возвратить
    return $this->lk->getListData ( $sql,  $this->orders);
}

function getType(){//получить тип заявки
    $type = "SELECT * FROM `purchase_objects`";
    return $this->lk->getListData ( $type,  $this->id_type);
}


//saveData (array('id_user'=>$id_user,   ), 'purchase_orders', array(поля массива)) 
function createOrder($id_type, $description, $id_room){//добавить заявку в бд
    $create = "INSERT INTO `purchase_orders` (`id_user`, `id_dep`, `id_type`, `date_create`, `description`, `id_room`, `is_deleted`, `is_received`, `date_receive`, `id_contract`, `file`) 
    VALUES ('1', '55', '$id_type', '2023-04-07', '$description', '$id_room', '0', NULL, NULL, NULL, NULL)";
    return $this->lk->query($create);
    if ($create == true) echo 'succes';
}













}


















?>