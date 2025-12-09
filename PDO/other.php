<?php

$pdo = require_once 'connect.php';

// inserting a single publisher

$name = 'Macmillan';
$sql ='INSERT INTO publishers(name) VALUES(:name)';
$statement = $pdo ->prepare($sql);

$statement ->execute([
    ':name' =>$name
]);

$publisher_id = $pdo -> lastInsertId();

echo 'The publisher id ' . $publisher_id . ' was inserted';