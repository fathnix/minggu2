<?php

$dbh = new PDO ('mysql:host=localhost;db_name=db_artikel', 'root', '12');

$db = $dbh->prepare('SELECT * FROM user');
$db->execute();
$people = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($people);

echo $data;