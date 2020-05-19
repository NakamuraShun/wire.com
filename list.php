<?php
$pdo = new PDO('mysql:host=mysql743.db.sakura.ne.jp; dbname=aruku-hito_wire; charset=utf8','aruku-hito','Paccuman0621');

//受け取った値を代入
$page_name = $_REQUEST['page_name'];
$job = $_REQUEST['job'];
$style = $_REQUEST['style'];

$sql = 'SELECT DISTINCT * FROM articles
        WHERE page_name = :page_name AND job = :job AND style = :style
        ';
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':page_name', $page_name, PDO::PARAM_STR);
        $statement->bindValue(':job', $job, PDO::PARAM_STR);
        $statement->bindValue(':style', $style, PDO::PARAM_STR);
        $statement->execute();

    $articles= [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $articles[] = $row;
  }

    $statement = null;
    $pdo = null;

    require_once(dirname(__FILE__) .'/tpl/list.tpl.php');

?>
