<?php

class Product
{
    const COUNT_BY_DEFAULT = 8;

    public static function getLastProducts($count = self::COUNT_BY_DEFAULT)
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, image FROM products '
            . 'WHERE status ="1" '
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductListByCategory($category)
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, brand, image FROM products '
            . "WHERE category_id =$category "
            . 'ORDER BY id DESC '
            . 'LIMIT ' . self::COUNT_BY_DEFAULT);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['brand'] = $row['brand'];
            $i++;
        }
        return $productsList;
    }

    public static function getProductByID($id)
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query("SELECT id, name, price, image, description FROM products WHERE id =$id");

        $row = $result->fetch();
        $productsList['id'] = $row['id'];
        $productsList['name'] = $row['name'];
        $productsList['price'] = $row['price'];
        $productsList['image'] = $row['image'];
        $productsList['description'] = $row['description'];

        return $productsList;
    }

    public static function getProductListByBrand($id, $brand)
    {
        $db = Db::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, brand, image FROM products '
            . "WHERE brand ='$brand' AND category_id ='$id' "
            . 'ORDER BY id DESC '
            . 'LIMIT ' . self::COUNT_BY_DEFAULT);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['brand'] = $row['brand'];
            $i++;
        }
        return $productsList;
    }
}
