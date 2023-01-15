<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="./css/main.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アンケート入力</title>
</head>
    
<?php

// XSS対策用関数作成
function h ($value) {
    return htmlspecialchars($value,ENT_QUOTES);
}

// ファイルを変数に格納
$filename = '../data/data2.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
?>

<div class="table">
<table border="1px solid" style="border-collapse: collapse">
    <tr>
        <th>入力日</th>
        <th>入力時間</th>
        <th>性別</th>
        <th>年次</th>
        <th>最後に読んだ日</th>
        <th>本との出会い</th>
        <th>お気に入り</th>
        <th>タイプ</th>
    </tr>

<?php
// whileで行末までループ処理
while (!feof($fp)) {
 
    // fgetsでファイルを読み込み、変数に格納
    $txt = fgets($fp);
    $str = explode(",", $txt);
?>


    <tr>
        <td><?php echo $str[0]; ?></td>
        <td><?php echo $str[1]; ?></td>
        <td><?php echo $str[2]; ?></td>
        <td><?php echo $str[3]; ?></td>
        <td><?php echo $str[4]; ?></td>
        <td><?php echo $str[5]; ?></td>
        <td><?php echo $str[6]; ?></td>
        <td><?php echo $str[7]; ?></td>
    </tr>


<?php
    // ファイルを読み込んだ変数を出力
    // echo h($txt).'<br>';   
}

// fcloseでファイルを閉じる
fclose($fp);

?>

</table>
</div>

<?php
echo "</br>アンケートにご協力いただきありがとうございました！</br>";
?>
