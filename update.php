<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);



//受け取った値を代入
$id = $_REQUEST['id'];
$project = $_REQUEST['project'];
$url = $_REQUEST['url'];
$wire_url = $_REQUEST['wire_url'];
$page_name = $_REQUEST['page_name'];
$job = $_REQUEST['job'];
$style = $_REQUEST['style'];
$coment = $_REQUEST['coment'];

$pdo = new PDO('mysql:host=mysql743.db.sakura.ne.jp; dbname=aruku-hito_wire; charset=utf8','aruku-hito','Paccuman0621');

    $sql = 'UPDATE articles SET
    project = :project 
    , url = :url 
    , wire_url = :wire_url
    , page_name = :page_name 
    , job = :job 
    , style = :style 
    , coment = :coment
    WHERE id = :id
    ';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        $statement->bindValue(':project', $project, PDO::PARAM_STR);
        $statement->bindValue(':url', $url, PDO::PARAM_STR);
        $statement->bindValue(':wire_url', $wire_url, PDO::PARAM_STR);
        $statement->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $statement->bindValue(':job', $job, PDO::PARAM_STR);
        $statement->bindValue(':style', $style, PDO::PARAM_STR);
        $statement->bindValue(':coment', $coment, PDO::PARAM_STR);
        $statement->execute();

    $statement = null;
    $pdo = null;



?>