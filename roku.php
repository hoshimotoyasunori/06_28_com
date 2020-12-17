<?php
// var_dump($_POST);
// exit();
$idea6 = $_POST["idea6"];                    // データ受け取り
$write_data6 = "{$idea6}\n";     // スペース区切りで最後に改行 
$file6 = fopen('data/sixth.txt', 'a');       // ファイルを開く 引数はa
flock($file6, LOCK_EX);
fwrite($file6, $write_data6);
flock($file6, LOCK_UN);
fclose($file6);
header("Location:sixth.php");
