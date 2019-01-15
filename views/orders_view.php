<?php
require_once '../controllers/orders.php';
?>
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-md-6">
                <h2><b>Информация по заказам</b></h2>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Номер заказа</th>
            <th>Наименование товара</th>
            <th>Цена заказа</th>
            <th>Количество товара</th>
            <th>Имя оператора</th>
        </tr>
        </thead>
        <tbody>

        <? foreach ($orders as $order) : ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['name'] ?></td>
                <td><?= $order['price'] ?></td>
                <td><?= $order['count'] ?></td>
                <td><?= $order['fio'] ?></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>