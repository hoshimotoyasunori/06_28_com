<?php
// var_dump($_POST);
// exit();
$idea5 = $_POST["idea5"];                    // データ受け取り
$write_data5 = "{$idea5}\n";     // スペース区切りで最後に改行 
$file5 = fopen('data/fifth.txt', 'a');       // ファイルを開く 引数はa
flock($file5, LOCK_EX);
fwrite($file5, $write_data5);
flock($file5, LOCK_UN);
fclose($file5);
header("Location:fifth.php");
