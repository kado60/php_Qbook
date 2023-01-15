<?php

// POSTデータ取得
// $name = $_POST["name"];
$gender = $_POST["gender"];
$old = $_POST["old"];
$last = $_POST["last"];
$how = $_POST["how"];
$favorite = $_POST["favorite"];
$type = $_POST["type"];

// 登録時間取得
$date1 = date("m/d");
$date2 = date("H:i");

// ファイルを読み込む
$file = fopen("./data/data2.txt","a");
// ファイルに書き込む
fwrite($file,$date1.",".$date2.",".$gender.",".$old.",".$last.",".$how.",".$favorite.",".$type.","."\n");
// ファイルを閉じる
fclose($file);


// read.phpにリダイレクト
header("Location: read.php");
exit();

?>