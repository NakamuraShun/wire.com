<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=mysql743.db.sakura.ne.jp; dbname=aruku-hito_wire; charset=utf8','aruku-hito','Paccuman0621');

//受け取った値を代入
$project = $_REQUEST['project'];
$url = $_REQUEST['url'];
$wire_url = $_REQUEST['wire_url'];
$page_name = $_REQUEST['page_name'];
$job = $_REQUEST['job'];
$style = $_REQUEST['style'];
$coment = $_REQUEST['coment'];

//画像のファイル名を作成し代入
$imgName = $url;
$imgName = str_replace('https', '', $imgName);
$imgName = str_replace('http', '', $imgName);
$imgName = str_replace('www', '', $imgName);
$imgName = str_replace('/', '', $imgName);
$imgName = str_replace(':', '', $imgName);

$imgName = "$imgName.jpg";


$sql = 'INSERT INTO articles
        (project, url, wire_url, imgName, page_name, job, style, coment) VALUES(:project, :url, :wire_url, :imgName, :page_name, :job, :style, :coment)
        ';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':project', $project, PDO::PARAM_STR);
        $statement->bindValue(':url', $url, PDO::PARAM_STR);
        $statement->bindValue(':wire_url', $wire_url, PDO::PARAM_STR);
        $statement->bindValue(':imgName', $imgName, PDO::PARAM_STR);
        $statement->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $statement->bindValue(':job', $job, PDO::PARAM_STR);
        $statement->bindValue(':style', $style, PDO::PARAM_STR);
        $statement->bindValue(':coment', $coment, PDO::PARAM_STR);
        $statement->execute();

    $statement = null;
    $pdo = null;

    require_once(dirname(__FILE__) .'/tpl/create.tpl.php');

?>

