<?php
$pdo = new PDO('mysql:host=mysql743.db.sakura.ne.jp; dbname=aruku-hito_wire; charset=utf8','aruku-hito','Paccuman0621');

//受け取った値を代入
$id = $_REQUEST['id'];

$sql = 'DELETE FROM articles WHERE id = :id';
$statement = $pdo->prepare($sql);
$statement->bindValue(':id', $id, PDO::PARAM_INT);
$statement->execute();

$statement = null;
$pdo = null;


?>
