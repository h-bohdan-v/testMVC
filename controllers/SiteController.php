<?php

include_once ROOT . '/model/Category.php';
include_once ROOT . '/model/Product.php';

class SiteController {
    public function actionIndex() {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProduct = array();
        $latestProduct = Product::getLastProducts(8);

        require_once(ROOT . '/view/site/index.php');
        
        return true;
    }
}