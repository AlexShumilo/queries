<?php

require_once 'Db.php';

class Order extends Db {

    public function __construct() {
        parent::__construct();
    }

    public function getOrdersInfo() {
        $result = $this->connection->query("SELECT requests.id, offers.name, requests.price, requests.count, operators.fio 
                                            FROM requests 
                                            LEFT JOIN offers ON requests.offer_id = offers.id 
                                            LEFT JOIN operators ON requests.operator_id = operators.id 
                                            WHERE requests.count > 2 AND (operators.id = 10 OR operators.id = 12)");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>