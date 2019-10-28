<?php
require_once('function.php');
require_once('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

    <title>Misteke_Log</title>
</head>
<body>
    <header class="text-white bg-dark">
        <h1>エラーの新規登録</h1>
    </header>
    <form method="POST" action="thanks.php">

<div class="container mt-5">
    <h3>どのようなエラーでしたか？</h3>
        <div class="form">
            <h6>言語・ソフト</h6>
            <input type="text" name="name"><br>
        </div>

        <div class="form">
            <h6>状態</h6>
            <input type="text" name="mal""><br>
        </div>

        <div class="form">
            <h6>詳細：原因と対応</h6>
            <textarea name="text""></textarea><br>

        </div>
        <input type="submit" value="エラーを記録">
</div>
    </form>






