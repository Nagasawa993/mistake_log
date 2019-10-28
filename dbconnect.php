<?php
$host = "localhost";
$dbname = "contact_form";
$charset = "utf8mb4";
$user = 'root';
$password = 'root';
$options = [
                         
  PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
  //SQLでエラーが表示された場合、画面にエラーが出力される

  PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  //DBから取得したデータを連想配列の形式で取得する

  PDO::ATTR_EMULATE_PREPARES=>false,
  //SQLインジェクション(ハッキング)対策
];

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
try{
  $dbh = new PDO($dsn, $user, $password, $options);
}catch(\PDOException $e){
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
