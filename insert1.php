<?php

//1. POSTデータ取得
$name = $_POST['name'];
$tell = $_POST['tell'];
$address = $_POST['address'];
$company = $_POST['company'];

$hosp = $_POST['hosp'];
$item = $_POST['item'];
$sn = $_POST['sn'];
$message = $_POST['message'];

//2. DB接続します
try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table 
(id, date, name, company, tell, address, hosp, item, sn, message) 
VALUES (NULL, sysdate(), :name, :company, :tell, :address, :hosp, :item, :sn, :message)");


//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':tell', $tell, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':hosp', $hosp, PDO::PARAM_STR);
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':sn', $sn, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
} else {
    //５．登録が完了した時の処理　index.phpへリダイレクト
    // header('Location:index1.php');
}

?>

<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="utf-8">
    <title>File書き込み</title>
    <link rel="stylesheet" href="css/sub.css"/>
</head>
<body>

<div id="title">
    <h1>修理受付を完了しました</h1>
    <ul>
        <li><a href="select1.php">登録一覧</a></li>
        <li><a href="index1.php">再登録</a></li>
    </ul>
</div>
    
</body>
</html>