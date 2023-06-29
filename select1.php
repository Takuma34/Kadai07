<?php

// funcs.phpを読み込む
require_once('funcs1.php');

//1.  DB接続します
try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

?>

<!-- //３．データ表示 -->
<div class="container">
<?php
$view="";
if ($status === false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<h4>";
        $view .= '受付番号：' . h($result['id']) . '<br>';

        $view .= h($result['date']);
        $view .= "</h4>";
        $view .= "<p>";
        $view .= '担当者：' . h($result['name']) . ' <br>' . '代理店：' . h($result['company']) . " <br>" . '電話番号：' . h($result['tell']) . '  <br> ' . '住所：' . h($result['address'])
        . " <br> " . '病院：' . h($result['hosp']) . '  <br> ' . '製品：' . h($result['item']) . " <br> " . 'シリアル番号：' . h($result['sn']) . '  <br> ' . '内容：' . h($result['message']);
        $view .= "</p>";
        $view .= "<br>";



    }
}
?>
</div>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>登録一覧</title>
<link rel="stylesheet" href="css/view.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>

      <h2 class="list">登録済み一覧</h2>


  
</header>
<!-- Head[End] -->

<div>
    <div id="show" ><?php echo $view; ?></div>
</div>

<div class="next">
    <a href="index1.php">再 登 録</a>
</div>

</body>
</html>