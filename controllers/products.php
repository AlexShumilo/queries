<?php

require_once '../models/Product.php';

class Products {

    protected $productsModel;

    function __construct() {
        $this->productsModel = new Product();
    }

    public function getProductsInfo() {
        $result = $this->productsModel->getProductsInfo();

        return $result;
    }

}

$obj = new Products();
$products = $obj->getProductsInfo();

?>

