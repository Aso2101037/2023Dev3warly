<?php
if(isset($_POST['public'])) {
    $public = $_POST['public'];
} else {
    $public = 0;
}
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

//一行目を配列に代入
$j = 0;
$comments[$j] = $_POST['comment'];
$kens[$j] = $_POST['place-select'];
$places[$j] = $_POST['place'];
$moveMeans[$j] = $_POST['traffic-select'];
$moveTimes[$j] = $_POST['traffic-timer'];
$startTimes[$j] = $_POST['timer-first'];
$endTimes[$j] = $_POST['timer-second'];
$images[$j] = $_POST['img-select'];
// パラメータの数を取得
$paramCount = count($_POST) - 10; // 'release'と'title'、1行目の８要素を除く

for ($i = 1; $i <= $paramCount; $i++) {
    // オプションのパラメータを取得
    $comments[$i] = $_POST['comment'.$i];
    $kens[$i] = $_POST['place-select'.$i];
    $places[$i] = $_POST['place'.$i];
    $moveMeans[$i] = $_POST['traffic-select'.$i];
    $moveTimes[$i] = $_POST['traffic-timer'.$i];
    $startTimes[$i] = $_POST['timer-first'.$i];
    $endTimes[$i] = $_POST['timer-second'.$i];
    $images[$i] = $_POST['img-select'.$i];
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


}
?>