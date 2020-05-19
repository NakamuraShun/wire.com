<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>list.tpl.php</title>
  <?php include('head.php'); ?>
</head>

<body>
  <div id="wrapper">
  <?php include('header.php'); ?>
<div class="lead-sec">
      <div class="con-mx1100">
       <div class="container">
            <h1 class="hed-h1">検索結果を表示しているよ</h1>
            <p>下のタグの条件の検索結果を表示しているよ。</p>
            <p>※タグをクリニックすると、クリニックしたタグの検索ができるよ。</p>
         </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->


  <div class="tag-sec">
      <div class="con-mx1100">
       <div class="container">
          <ul>
              <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $page_name ?></a></li>
              <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $job ?></a></li>
              <li><a href="#"><i class="fas fa-tag my-gray"></i>&nbsp;<?= $style ?></a></li>
          </ul>
        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->


              
  <div class="list-sec">
      <div class="con-mx1100">
       <div class="container">

       <?php if(empty($articles)){ ?>
        <div class="empty-msg">
          <p>すまん、検索条件に一致するワイヤー情報はないです。</p>
          <p><a href="index.php">トップ（検索画面）に戻る</a></p>
        </div>
       <?php }else{ ?>
              <?php foreach($articles as $article){ ?>
                  <div class="article-box">
                        <img src="./screenshots/<?= $article['imgName'] ?>">
                        <p>id:<?= $article['id'] ?></p>
                        <p><?= $article['project'] ?></p>
                        <p class="article-btn"><a href="article.php?id=<?= $article['id'] ?>">More</a></p>
                  </div>
              <?php } ?>
          <?php } ?>
                
        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->

  <footer id="footer"></footer>
</div><!--wrapperEND-->
</body>
</html>
