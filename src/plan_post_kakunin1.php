<?php
$release = $_POST['release'];
$title = $_POST['title'];

// オプションのパラメータを処理
$comments = array();
$kens = array();
$places = array();
$moveMeans = array();
$moveTimes = array();
$startTimes = array();
$endTimes = array();
$images = array();

// パラメータの数を取得
$paramCount = count($_POST) - 2; // 'release'と'title'を除く

for ($i = 1; $i <= $paramCount; $i++) {
    // オプションのパラメータを取得
    $comments[$i] = $_POST['comment'.$i];
    $kens[$i] = $_POST['ken'.$i];
    $places[$i] = $_POST['place'.$i];
    $moveMeans[$i] = $_POST['move_means'.$i];
    $moveTimes[$i] = $_POST['move_time'.$i];
    $startTimes[$i] = $_POST['start_time'.$i];
    $endTimes[$i] = $_POST['end_time'.$i];
    $images[$i] = $_POST['image'.$i];
}

// 取得したデータを処理する
for ($i = 1; $i <= $paramCount; $i++) {
    $comment = $comments[$i];
    $ken = $kens[$i];
    $place = $places[$i];
    $moveMean = $moveMeans[$i];
    $moveTime = $moveTimes[$i];
    $startTime = $startTimes[$i];
    $endTime = $endTimes[$i];
    $image = $images[$i];

    // ここでデータの処理を行う
    // 例えば、データベースに保存するなどの操作が考えられます
}
?>