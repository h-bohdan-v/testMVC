<?php

include_once ROOT . '/model/Product.php';

class BrandController {

    public function actionIndex($id,$brand) {

        $productByBrand = Product::getProductListByBrand($id,$brand);

        require_once(ROOT . '/view/brand/index.php');
    }
}