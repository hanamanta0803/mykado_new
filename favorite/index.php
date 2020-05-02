<?php
session_start();

  // これからやっていくこと

  // お気に入り登録された値を$_POSTで受け取る。array()で受けっとった値の数を取得する。
  // 値の数だけfor()文で li を作る。 li 内に select  option を作成。
  // select  option はすでに作成されているファイルの id を取得して、表示させる。
  //　また、select で選択されたファイル名の値とお気に入り登録されている花材の値を持って、どっか（DBとかスプレットシート とか）に送る。

?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <script type="text/javascript" src="js/checked.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script> //ファイル読み込み
      $(function() {
        $("#header").load("../include/header.html");
        $("#footer").load("../include/footer.html");
      });
    </script>

    <title>お気に入り | mykado</title>
  </head>
  <body>
    <div id="header"></div>
    <pı>Hello World</p>
    <p>ここではリスト画面でお気に入り登録され、お気に入りリストに振り分けられていないものが表示される</p>
    <div class="">
      <form class="" action="index.html" method="post">
       <?php
       if (isset(お気に入りがあれば)) {
         for(お気に入り登録された（または未分類の）花材の数分繰り返す){
          echo "?> <select>
                    <option><?php ここに気に入り登録された（または未分類の）花材の情報（array()の順番）?>
                    </option>
                  </select>
          <?php";}

          echo "?><input type="submit" name="favorite" value="リストに加える"> <?php";
       }　?>

      </form>
    </div>
    <footer id="footer"></footer>
  </body>
</html>
