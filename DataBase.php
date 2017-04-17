<?php
// mysqliクラスのオブジェクトを作成
$mysqli = new mysqli('mysql2.minibird.netowl.jp', 'ogihara_akihiro', 'pochi0226', 'ogihara_example1');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}

// ここにDB処理いろいろ書く（後述）
// 完成済みのSELECT文を実行する
$sql = "SELECT id,name FROM member";
if ($result = $mysqli->query($sql)) {
    // 連想配列を取得
    while ($row = $result->fetch_assoc()) {
        echo $row["user_id"] . $row["name"] . "<br>";
    }
    // 結果セットを閉じる
    $result->close();
}

// DB接続を閉じる
$mysqli->close();
?>