<?php

class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT category.id, category.name FROM category INNER JOIN products ON category.id = products.category_id GROUP BY category.id ORDER BY category.name ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }

    public static function getCategoriesListBrand($category)
    {
        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query("SELECT count(id), category_id, brand FROM products WHERE category_id=$category GROUP BY brand");

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['category_id'] = $row['category_id'];
            $categoryList[$i]['brand'] = $row['brand'];
            $i++;
        }

        return $categoryList;
    }
}
