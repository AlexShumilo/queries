<?php

require_once '../models/Order.php';

class Orders {

    protected $productsModel;

    function __construct() {
        $this->ordersModel = new Order();
    }

    public function getOrdersInfo() {
        $result = $this->ordersModel->getOrdersInfo();

        return $result;
    }
}

$obj = new Orders();
$orders = $obj->getOrdersInfo();
?>