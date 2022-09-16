<?php

include_once ROOT . '/model/Product.php';

class ProductsController {

    public function actionIndex($id) {

        $productById = Product::getProductByID($id);

        require_once(ROOT . '/view/products/index.php');
    }
}