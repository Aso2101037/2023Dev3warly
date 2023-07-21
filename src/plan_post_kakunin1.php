
<?php
echo "確認";
if (isset($_POST['public'])) {
    $public = $_POST['public'];
} else {
    $public = 0;
}
$title = $_POST['post-title'];
require_once "DBmanager.php";
$dbm = new DBManager();
$dbm->plan_post($title,$public,1);
$dbm->insert_post_plan($_SESSION['place-select']);

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

$comment = $comments[0];
$ken = $kens[0];
$place = $places[0];
$moveMean = $moveMeans[0];
$moveTime = $moveTimes[0];
$startTime = $startTimes[0];
$endTime = $endTimes[0];
$image = $images[0];



// パラメータの数を取得
$paramCount = (count($_POST) - 2) / 8-8;

for ($i = 1; $i <= $paramCount; $i++) {
    // オプションのパラメータを取得
    $comments[$i] = $_POST['comment' . $i];
    $kens[$i] = $_POST['place-select' . $i];
    $places[$i] = $_POST['place' . $i];
    $moveMeans[$i] = $_POST['traffic-select' . $i];
    $moveTimes[$i] = $_POST['traffic-timer' . $i];
    $startTimes[$i] = $_POST['timer-first' . $i];
    $endTimes[$i] = $_POST['timer-second' . $i];
    $images[$i] = $_POST['img-select' . $i];
}

// 取得したデータを処理する
for ($c = 0; $c <= $paramCount; $c++) {
    $comment = $comments[$c];
    $ken = $kens[$c];
    $place = $places[$c];
    $moveMean = $moveMeans[$c];
    $moveTime = $moveTimes[$c];
    $startTime = $startTimes[$c];
    $endTime = $endTimes[$c];
    $image = $images[$c];
    $dbm->plan_post_detail($place, $startTime, $endTime,1, $moveMean, $moveTime, $comment, $image);
}
unset($_SESSION['plan_post_id']);
header("Location: home.php?message=spot_complete");
exit;
?>
