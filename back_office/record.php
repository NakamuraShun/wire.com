<?php
$pdo = new PDO('mysql:host=mysql743.db.sakura.ne.jp; dbname=aruku-hito_wire; charset=utf8','aruku-hito','Paccuman0621');

$sql = 'SELECT DISTINCT * FROM articles';
        $statement = $pdo->prepare($sql);
        $statement->execute();

    $articles= [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $articles[] = $row;
  }

    $statement = null;
    $pdo = null;

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>record.php</title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- css -->
    <link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet">
      <link rel="stylesheet" href="../css/reset.css">
      <link rel="stylesheet" href="../css/content.css">
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- jquery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
</head>

<body>

  <div id="wrapper">
    
<div class="body-sec">
       <div class="container flex">
        
                    <div class="sidemenu-sec">
                            <div class="container">
                                <div>
                                    <table>
                                        <tbody>
                                        <tr><td><a href="./back_office/choice.php">選択項目管理</td></a></tr>
                                        <tr><td><a href="./back_office/record.php">記事の管理</td></a></tr>
                                        <tr><td><a href="./back_office/user.php">ユーザーの管理</td></a></tr>
                                        </tbody>
                                    </table>
                                </div>  
                                
                            </div><!--container-->
                    </div><!--sidemenu-sec-->

                    
                    <div class="main-sec">
                            <div class="container">
                                <h1 class="hed-h1">記事の管理</h1>
                                    <p>登録情報を一覧で表示してます。</p>
                                    <a class="create-btn" href="../new.php" target=”_blank”>新規作成</a>
                                <h2>レコード一覧</h2>
                                <div class="record-list">
                                <table>
                                        <tbody>
                                            <thead>
                                                <tr>
                                                    <th>編集</th>
                                                    <th>id</th>
                                                    <th>project</th>
                                                    <th>url</th>
                                                    <th>wire_url</th>
                                                    <th>imgName</th>
                                                    <th>page_name</th>
                                                    <th>job</th>
                                                    <th>style</th>
                                                    <th>coment</th>
                                                    <th>削除</th>
                                                </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php foreach($articles as $article){ ?>
                                                <tr>
                                                    <td><a class="edit-btn" href="../edit.php?id=<?= $article['id'] ?>" target=”_blank”>編集する</a></td>
                                                    <td><?= $article['id'] ?></td>
                                                    <td><?= $article['project'] ?></td>
                                                    <td><?= $article['url'] ?></td>
                                                    <td><?= $article['wire_url'] ?></td>
                                                    <td><?= $article['imgName'] ?></td>
                                                    <td><?= $article['page_name'] ?></td>
                                                    <td><?= $article['job'] ?></td>
                                                    <td><?= $article['style'] ?></td>
                                                    <td><?= $article['coment'] ?></td>
                                                    <td><a href="#" class="delete-btn" value="<?= $article['id'] ?>">削除する</a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                    
                            </div><!--container-->
                    </div><!--sidemenu-sec-->
                    

        </div><!--container-->
    
<script>
$('.delete-btn').on('click',function(){

    let id_id = $(this).attr("value");

    if( confirm("登録情報を削除してもよろしいですか？") ){

            $.ajax({
            url:'delete.php', //送信先
            type:'POST', //送信方法
            datatype: 'json', //受け取りデータの種類
            data:{id : id_id},
            // Ajax通信が成功した時
            success : function(data){
                alert("登録情報を削除しました。");
                document.location.reload();
                console.log(data);
            },
            // Ajax通信が失敗した時
            error : function(data) {
                alert("通信が失敗しました。時間をおいてもう一度操作してください。");
                console.log('通信失敗');
            }
            }); 
            //submitによる画面リロード防止
            return false;
    }else{
    　　　 alert("削除をキャンセルしました。");
            console.log('削除をキャンセル');
    }
 }); //#ajax click end
</script>

</div><!--body-sec-->


</div><!--wrapperEND-->
</body>
</html>
