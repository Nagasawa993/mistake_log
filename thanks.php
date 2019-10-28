<?php

$name = $_POST['name'];
$mal = $_POST['mal'];
$text = $_POST['text'];

require_once('function.php');
require_once('dbconnect.php');
// var_dump($dbh);
// $stmt = $dbh->prepare('SELECT * FROM surveys2');
// $results = $stmt->fetchAll();
// var_dump($results);


$stmt = $dbh->prepare('INSERT INTO mistake_log (name, mal, text) VALUES (?, ?, ?)');
$stmt->execute([$name, $mal, $text]);

?>
<!DOCTYPE html>
<html lang="ja">
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>登録完了</title>

</head>
<body>
<header class="text-white bg-dark">
  <h1>エラーの新規登録</h1>
</header>

<div class="container mt-5">
    <h3>登録完了</h3>
    <h2>ありがとうございました！</h2>
    <p><?php echo '言語・ソフト:' . $name; ?></p>
    <p><?php echo '状態:' . $mal; ?></p>
    <p><?php echo '詳細：原因と対策:' . $text; ?></p>

    <img class="img-fruid"src="assets/img/ojigi.jpg" alt="お辞儀のイメージ図">
</div>
</body>
</html>