<?php
// var_dump($_POST);
// exit();
$idea1 = $_POST["idea1"];                    // データ受け取り
$write_data1 = "{$idea1}\n";     // スペース区切りで最後に改行 
$file1 = fopen('data/first.txt', 'a');       // ファイルを開く 引数はa
flock($file1, LOCK_EX);
fwrite($file1, $write_data1);
flock($file1, LOCK_UN);
fclose($file1);
header("Location:first.php");
