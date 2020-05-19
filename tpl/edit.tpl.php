<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>edit.tpl.php</title>
  <?php include('head.php'); ?>
</head>

<body>
<?php include('header.php'); ?>
<div class="lead-sec">
      <div class="con-mx1100">
       <div class="container">
            <h1 class="hed-h1">ページ情報を更新中</h1>
            <p>編集し終わったら<u>この情報で更新する</u>ボタンを押してね。</p>
        </div><!--container-->
      </div><!--con-mx1100-->
  </div><!--lead-sec-->


  <div class="new-sec">
      <div class="con-mx1100">
          <div class="container">
              <form id="id_edeitForm" method="POST">
                    <div class="new-sec-up">
                        <div  class="url-area">
                            <h2 class="hed-h2"><b>URL</b></h2>
                            <label>ページURL（URLは変更できません）</label>
                            <input id="id_url" name="url" style="width:100%;" type="url" value="<?= $article['url'] ?>" disabled="disabled">
                            <p id="test"></p>
                            <label>ワイヤー（カクー）URL</label>
                            <input id="id_wire_url" name="wire_url" style="width:100%;" type="url" value="<?= $article['wire_url'] ?>" placeholder="ワイヤーURLを入力してください">
                            <p></p>
                            <label>サイト名</label>
                            <input id="id_project" name="project" style="width:100%;" type="text" value="<?= $article['project'] ?>" placeholder="サイト名を入力してください"  required="">
                            <input id="id_id" name="id" type="hidden" value="<?= $article['id'] ?>">
                        </div>

                        <div  class="coment-area">
                            <h2 class="hed-h2"><b>コメント</b></h2>
                            <textarea id="id_coment" name="coment" style="width:100%;" rows="10" cols="30" placeholder="ここにコメントを記入してください（最大300文字）&#13;&#10;&#13;&#10;<記入例>&#13;&#10;&#13;&#10;担当：鈴木太郎&#13;&#10;&#13;&#10;レスポにもブレイクしやすいレイアウトです。&#13;&#10;画像テキストは各200文字程度がバランス良いかもです。
                            "><?= $article['coment'] ?></textarea>
                        </div>
                    </div><!--dit-sec-up-->


                    <div class="edit-sec-doun">
                    <div class="choice-sec-area page">
            <h2 class="hed-h2"><b>ページ名</b></h2>

              <div class="choice-category usually">
                <span class="category">あるある系</span>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="〇〇について" required="">〇〇について</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="強み" required="">強み</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="企業情報" required="">企業情報</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="歴史（あゆみ）" required="">歴史（あゆみ）</label>
              </div>

              <div class="choice-category case">
                  <span class="category">事例系</span>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="事例" required="">事例</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="お客様の声" required="">お客様の声</label>
              </div>

              <div class="choice-category guide">
                  <span class="category">ガイド系</span>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="流れ" required="">流れ</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="よくある質問" required="">よくある質問</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="ご利用ガイド" required="">ご利用ガイド</label>
              </div>

              <div class="choice-category recruit">
                  <span class="category">採用系</span>   
                  <label><input class="page_name_btn" name="page_name" type="radio" value="会社を知る（採用情報）" required="">会社を知る（採用情報）</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="人を知る（インタビュー）" required="">人を知る（インタビュー）</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="募集要項" required="">募集要項</label>
              </div>

              <div class="choice-category contact">
                  <span class="category">フォーム系</span>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="お問い合わせ" required="">お問い合わせ</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="エントリー" required="">エントリー</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="見積" required="">見積</label>
              </div>

              <div class="choice-category system">
                  <span class="category">仕様系</span>          
                  <label><input class="page_name_btn" name="page_name" type="radio" value="S1" required="">S1</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="S5" required="">S5</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="S5+S6" required="">S5+S6</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="S5+S7" required="">S5+S7</label>
              </div>

              <div class="choice-category other">
                  <span class="category">その他</span>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="新着情報" required="">新着情報</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="コラム" required="">コラム</label>
                  <label><input class="page_name_btn" name="page_name" type="radio" value="規約" required="">規約</label>
           　 </div>
          </div><!--choice-sec-area-->

          <div class="choice-sec-area job">
              <h2 class="hed-h2"><b>業種</b></h2>

                <div class="choice-category">
                    <label><input class="job_btn" name="job" type="radio" value="IT・ネットサービス" required="">IT・ネットサービス</label>
                    <label><input class="job_btn" name="job" type="radio" value="工業・製造（メーカー）" required="">工業・製造（メーカー）</label>
                    <label><input class="job_btn" name="job" type="radio" value="土木" required="">土木</label>
                    <label><input class="job_btn" name="job" type="radio" value="建設・リフォーム" required="">建設・リフォーム</label>
                    <label><input class="job_btn" name="job" type="radio" value="工務店" required="">工務店</label>
                    <label><input class="job_btn" name="job" type="radio" value="家具・雑貨・インテリア" required="">家具・雑貨・インテリア</label>
                    <p></p>
                    <label><input class="job_btn" name="job" type="radio" value="物流">物流</label>
                    <label><input class="job_btn" name="job" type="radio" value="解体・リサイクル" required="">解体・リサイクル</label>
                    <label><input class="job_btn" name="job" type="radio" value="アパレル・ファッション" required="">アパレル・ファッション</label>
                    <label><input class="job_btn" name="job" type="radio" value="美容・コスメ" required="">美容・コスメ</label>
                    <label><input class="job_btn" name="job" type="radio" value="旅行・観光" required="">旅行・観光</label>
                    <label><input class="job_btn" name="job" type="radio" value="教育・学校" required="">教育・学校</label>
                    <label><input class="job_btn" name="job" type="radio" value="医療・クリニック" required="">医療・クリニック</label>
                    <p></p>
                    <label><input class="job_btn" name="job" type="radio" value="ブライダル" required="">ブライダル</label>
                    <label><input class="job_btn" name="job" type="radio" value="宿泊施設（ホテル・旅館）" required="">宿泊施設（ホテル・旅館）</label>
                </div>
            </div><!--choice-sec-area-->


            <div class="choice-sec-area style">
                <h2 class="hed-h2"><b>スタイル</b></h2>

                  <div class="choice-category">
                      <label><input class="style_btn" name="style" type="radio" value="シンプル" required="">シンプル</label>
                      <label><input class="style_btn" name="style" type="radio" value="スタイリッシュ" required="">スタイリッシュ</label>
                      <label><input class="style_btn" name="style" type="radio" value="かわいい" required="">かわいい</label>
                      <label><input class="style_btn" name="style" type="radio" value="上品" required="">上品</label>
                      <label><input class="style_btn" name="style" type="radio" value="高級感" required="">高級感</label>
                      <label><input class="style_btn" name="style" type="radio" value="和風" required="">和風</label>
                      <label><input class="style_btn" name="style" type="radio" value="クレイジー" required="">クレイジー</label>
                      <label><input class="style_btn" name="style" type="radio" value="優しい" required="">優しい</label>
                  </div>
              </div><!--choice-sec-area-->  
         </div><!--dit-sec-doun-->
              
                    <div class="update-btn-area">
                      　　<input id="ajax" class="decide-btn" type="submit" value="更新する">
                    </div>
              </form>
　

            </div><!--container-->
        </div><!--con-mx1100-->
  </div><!--lead-sec-->


  <footer id="footer"></footer>
</div><!--wrapperEND-->

<script>
  $(function(){

  //ラジオボタンにチェックを入れる
  $('input[value="<?= $article['page_name'] ?>"]').prop('checked', true);
  $('input[value="<?= $article['job'] ?>"]').prop('checked', true);
  $('input[value="<?= $article['style'] ?>"]').prop('checked', true);
  

   //初期値を変数に代入
    let id_id = $('#id_id').val();
    let inputVal_url = $('#id_url').val();
    let inputVal_wire_url = $('#id_wire_url').val();
    let inputVal_project = $('#id_project').val();
    let textareaVal_coment = $('#id_coment').val();
    let radioVal_page_name = $('.page_name_btn').val();
    let radioVal_job = $('.job_btn').val();
    let radioVal_style = $('.style_btn').val();


    //ブラウザ上で更新された、input,textareaのvalueを更新に代入
   $('#id_wire_url').change(function() {
    inputVal_wire_url = $(this).val();
    console.log(inputVal_wire_url);
  });

  $('#id_project').change(function() {
    inputVal_project = $(this).val();
    console.log(inputVal_project);
  });

  $('#id_coment').change(function() {
    textareaVal_coment = $(this).val();
    console.log(textareaVal_coment);
  });


    //ブラウザ上で選択された、ラジオボタンのvalueを更新に代入
  $(".page_name_btn").click( function() {
      radioVal_page_name = $("input[name='page_name']:checked").val(); 
      console.log(radioVal_page_name); 
  });

  $(".job_btn").click( function() {
      radioVal_job = $("input[name='job']:checked").val();
      console.log(radioVal_job);
  });

  $(".style_btn").click( function() {
      radioVal_style = $("input[name='style']:checked").val();
      console.log(radioVal_style);  
  });



//ajax通信
    $('#ajax').on('click',function(){

          $.ajax({
            url:'update.php', //送信先
            type:'POST', //送信方法
            datatype: 'json', //受け取りデータの種類
            data:{
            id : id_id,
            url : inputVal_url,
            wire_url : inputVal_wire_url,
            project : inputVal_project,
            coment : textareaVal_coment,
            page_name :radioVal_page_name,
            job :radioVal_job,
            style :radioVal_style
            },
            // Ajax通信が成功した時
            success : function(data){
              window.location.href = 'update.tpl.php';
            console.log('通信成功');
            },
            // Ajax通信が失敗した時
            error : function(data) {
              alert(data);
            console.log('通信失敗');
          }
          }); 
         //submitによる画面リロード防止
         return false;
    }); //#ajax click end
  
}); //END

</script>

</body>
</html>
