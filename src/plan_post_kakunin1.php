
<?php
echo "確認";
if (isset($_POST['public'])) {
    $public = 1;
} else {
    $public = 0;
}
$title = $_POST['post-title'];
require_once "DBmanager.php";
$dbm = new DBManager();
$dbm->plan_post($title,$public,1);
$dbm->insert_post_plan($_POST['place-select']);

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
$comments[0] = $_POST['comment'];
$kens[0] = $_POST['place-select'];
$places[0] = $_POST['place'];
$moveMeans[0] = $_POST['traffic-select'];
$moveTimes[0] = $_POST['traffic-timer'];
$startTimes[0] = $_POST['timer-first'];
$endTimes[0] = $_POST['timer-second'];
$images[0] = $_POST['img-select'];

// パラメータの数を取得
$paramCount = count($_POST);
if($paramCount==10){
    $cfor = 1;
}else{
    //for($i)文を繰り返す回数
    $ifor = ($paramCount-2)/8;
    $ifor = $ifor-1;
    for ($i = 1; $i <= $ifor; $i++) {
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
    //for($c)文を繰り返す回数
    $cfor = ($paramCount-2)/8;
}

// 取得したデータを処理する
for ($c = 0; $c < $cfor; $c++) {
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
