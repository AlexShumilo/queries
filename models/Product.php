<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15.01.2019
 * Time: 15:47
 */
require_once 'Db.php';

class Product extends Db {

    public function __construct() {
        parent::__construct();
    }

    public function getProductsInfo() {
        $result = $this->connection->query("SELECT offers.name, SUM(requests.count) AS prodCount, SUM(requests.price) AS prodPrice 
                                            FROM requests 
                                            LEFT JOIN offers ON requests.offer_id = offers.id 
                                            GROUP BY requests.offer_id");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}