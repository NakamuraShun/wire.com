<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>article.tpl.php</title>
  <?php include('head.php'); ?>
</head>

<body>
  <div id="wrapper">
  <?php include('header.php'); ?>
<div class="lead-sec">
      <div class="con-mx1100">
       <div class="container">
            <h1 class="hed-h1">これが詳細画面です。</h1>
            <p>リンク先ページリニューアル、または削除されるとが画像と異なる場合があります。</p>
            <p>カクーURLがあると便利だね。</p>
            <p></p>
        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->

  <div class="tag-sec">
      <div class="con-mx1100">
       <div class="container">
          <ul>
            <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $article['page_name'] ?></a></li>
            <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $article['job'] ?></a></li>
            <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $article['style'] ?></a></li>
          </ul>
        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->


              
  <div class="article-sec">
      <div class="con-mx1100">
       <div class="container">
            <div class="article-sec-up">
                <div class="img-area">
                <img src="./screenshots/<?= $article['imgName'] ?>">
                </div>

                <div class="info-area">
                  <table>
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td><?= $article['id'] ?></td>
                        </tr>
                        <tr>
                            <th>サイト名</th>
                            <td><?= $article['project'] ?></td>
                        </tr>
                        <tr>
                          <th>URL</th>
                          <td><a href="<?= $article['url'] ?>"  target="_blank"><?= $article['url'] ?></a></td>
                        </tr>
                        <tr>
                            <th>ワイヤーURL</th>
                            <td><a href="<?= $article['wire_url'] ?>"  target="_blank"><?= $article['wire_url'] ?></a></td>
                          </tr>
                          <tr>
                              <th>コメント</th>
                              <td><?= $article['coment'] ?></td>
                          </tr>
                          <tr>
                              <th>お気に入り</th>
                              <td><a href="#"  target="_blank">この記事をお気に入り登録する</a></td>
                          </tr>
                          <tr>
                              <th>編集</th>
                              <td><a href="./edit.php?id=<?= $article['id'] ?>">この記事を編集する</a></td>
                          </tr>
                  </tbody>
                  </table>
                  </div>
              </div>


              <div class="article-sec-doun">
                  <p class="decide-btn"><a href="list.php">検索結果画面に戻る</a></p>
                  <p><a href="./index.php">トップページ（検索画面）に戻る</a></p>
              </div>

        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->


  <footer id="footer"></footer>
</div><!--wrapperEND-->
</body>
</html>

