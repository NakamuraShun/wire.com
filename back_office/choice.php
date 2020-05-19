<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>login.php</title>
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
                                <h1 class="hed-h1">選択項目管理</h1>
                                    <p>カテゴリを選択してボタンを押してください。カテゴリごとに項目の追加と削除ができます。</p>
                                <h2>カテゴリ選択</h2>
                                <tr>
                                    <td>
                                    <select id="pageList">
                                        <optgroup label="ページ名">
                                            <option id="name_often" value="あるある系">あるある系</option>
                                            <option id="name_case" value="事例系">事例系</option>
                                            <option id="name_guide" value="ガイド系">ガイド系</option>
                                            <option id="name_recruit" value="採用系">採用系</option>
                                            <option id="name_form" value="フォーム系">フォーム系</option>
                                            <option id="name_program" value="仕様系">仕様系</option>
                                        </optgroup>
                                            <option id="cat_job" value="業種">業種</option>
                                            <option id="cat_style" value="スタイル">スタイル</option>
                                    </select>
                                    <button>選択したカテゴリの項目リストを表示する</button>
                                   </td>
                                   <td>
                                    <form>
                                        <div  id="add-btn"></div>
                                    </form>
                                  </td>
                                </tr>

                                <div id="items-tbody-title">
                                    <h3></h3>
                                </div>

                                <div class="items-list">
                                    <table>
                                         <tbody id="items-tbody"></tbody>
                                    </table>
                                 </div>
                    
                            </div><!--container-->
                    </div><!--main-sec-->
                    





        </div><!--container-->

</div><!--body-sec-->


</div><!--wrapperEND-->

<script>
//　グローバル変数========================================================
//==============================================================================
let pageOption,fileUrl,array_items;


//　カテゴリリストの表示========================================================
//==============================================================================


$("button").click(function(){

        pageOption =  $("#pageList").val();

        fileUrl = (function(optionVal) {
                switch (optionVal) {
                        case "あるある系": return 'name_often.txt'; break;
                        case "事例系": return 'name_case.txt'; break;
                        case "ガイド系": return 'name_guide.txt'; break;
                        case "採用系": return 'name_recruit.txt'; break;
                        case "フォーム系": return 'name_form.txt'; break;
                        case "仕様系": return 'name_program.txt'; break;
                        case "業種": return 'cat_job.txt'; break;
                        case "スタイル": return 'cat_style.txt'; break;
                        default: alert('エラー'); break;
                } //switch end
        })(pageOption); //const_fileUrl end
            
        $.ajax({
            type: 'GET',
            dataType: 'text',
            scriptCharset: 'UTF-8',        
            url: '../text/' + fileUrl,
            })
            // Ajax通信が成功した時
            .done(function(data, status, xhr){

                    array_items = data.split("\n");

                    if(document.getElementById("items-tbody").hasChildNodes()){
                        $('#items-tbody-title').empty();
                        $('#add-btn').empty();
                        $('#items-tbody').empty();    
                    }
                        $('#items-tbody-title').append('<h3>' + pageOption  + ' カテゴリの項目リスト ' + '</h3>');
                        $('#add-btn').append('<input id="add-btn" style="width:300px" type="text" value="" placeholder="追加したい項目名を入れてください">' + '<button type="submit">'  + ' 追加 ' + '</button>');
                        array_items.forEach(function(value) {
                        $('#items-tbody').append('<tr><th>' + value + '</th><td><a class="delete-btn" href="">' + ' 削除する ' + '</a></td></tr>');
                        });
            })
            // Ajax通信が失敗した時
            .fail(function(data, status, xhr){
                    alert(data);
                    console.log('通信失敗');
            })
        ;//#ajax END

});// f-button_click END


//　項目削除の処理===============================================================
//==============================================================================

$('.delete-btn').click(function(){

    console.log('クリックした');

    $(this).attr('id', 'delete-item');
    const delete_Data = document.getElementById("delete-item");

    console.log(delete_Data);

    const result = window.confirm('「' + delete_Data + '」項目を削除しますか？');
    if(ture){
        array_items.shift(delete_Data);
        alert('項目の削除が完了しました');
        //プルダウン選択したクリックの読み込みの記述
    }else{
        alert('項目の削除をキャンセルしました');
    }

});




</script>

</body>
</html>
