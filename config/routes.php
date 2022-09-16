<?php

$db = Db::getConnection();

$newList = array();

$result = $db->query('SELECT route, controlAction FROM pages');

$i = 0;
while ($row = $result->fetch()) {
    $newList[$row['route']] = $row['controlAction'];
    $i++;
}

return $newList;