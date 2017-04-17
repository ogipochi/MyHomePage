<?php
try {
$pdo = new PDO('mysql:host=mysql2.minibird.netowl.jp;dbname=ogihara_example1;charset=utf8','ogihara_akihiro','pochi0226',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}
?>