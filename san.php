<?php
// var_dump($_POST);
// exit();
$idea3 = $_POST["idea3"];                    // データ受け取り
$write_data3 = "{$idea3}\n";     // スペース区切りで最後に改行 
$file3 = fopen('data/third.txt', 'a');       // ファイルを開く 引数はa
flock($file3, LOCK_EX);
fwrite($file3, $write_data3);
flock($file3, LOCK_UN);
fclose($file3);
header("Location:third.php");
