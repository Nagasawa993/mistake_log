<?php
require_once('function.php');
require_once('dbconnect.php');

// issetは変数に値がセットされているか確認している
 $name = '';
 if (isset($_GET['name'])) {
     $name = $_GET['name'];
 }

 //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM mistake_log WHERE name like ?');
    $stmt->execute(["%$name%"]);
    $results = $stmt->fetchAll();

    // データが正常に読み込まれているか確認用のコード
    // var_dump($results);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

  <title>Mistake_Log</title>

</head>
<body>
  <header class="text-white bg-dark">
        <h1>何にお困りですか？</h1>
  </header>

  <div class="container mt-5">
  <form action=""method="GET">
  <input type="text"name="name">
  <button>言語・ソフト検索</button>

<!-- 送信ボタンとして使いたくなかったら
<button type="button">検索</button>
としておく -->

<!-- 画面に表示 -->
      <?php foreach ($results as $result): ?>
        <p><?php echo h($result['name']); ?>
        <p><?php echo h($result['mal']); ?>
        <p><?php echo h($result['text']); ?>
      <?php endforeach; ?>
  </form>

  <form method="POST" action="entry.php">
    <div class="container mt-5">
      <input type="submit" value="エラーの新規登録">
    </div>
    </div>
  </form>
  </body>
</html>