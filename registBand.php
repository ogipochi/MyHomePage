<?php
// mysqliクラスのオブジェクトを作成
$mysqli = new mysqli('mysql2.minibird.netowl.jp', 'ogihara_akihiro', 'pochi0226', 'ogihara_example1');
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}
$register_name = $_POST["requester_name"];
$register_band = $_POST["band_name"];
$register_inst = $_POST["request_info"];


// ここにDB処理いろいろ書く（後述）
// 完成済みのSELECT文を実行する
# No. 03
        $query = 'INSERT INTO band_ex(band,user,inst) VALUES ("'.$register_band.","$register_name.","$register_inst'")';
				echo $query;
        # No. 04
        if( $mysqli->query( $query ) ) {
            echo 'INSERT成功';
        }
        else {
            echo 'INSERT失敗';
        }
// DB接続を閉じる
$mysqli->close();
?>