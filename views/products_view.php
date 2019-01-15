<?php
require_once '../controllers/products.php';
?>
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-md-6">
                <h2><b>Информация по заказанным товарам</b></h2>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Наименование товара</th>
            <th>Заказанное количество</th>
            <th>Общая стоимость заказов</th>
        </tr>
        </thead>
        <tbody>

        <? foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['prodCount'] ?></td>
                <td><?= $product['prodPrice'] ?></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>
</div>