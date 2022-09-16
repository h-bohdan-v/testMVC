<?php

include_once ROOT . '/model/Product.php';
include_once ROOT . '/model/Category.php';

class CatalogController {
    public function actionList($category) {

        $CatalogListByBrand = Category::getCategoriesListBrand($category);

        $productListByCategory = Product::getProductListByCategory($category);

        require_once(ROOT . '/view/catalog/index.php');
    }
}