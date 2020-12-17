<?php
// var_dump($_POST);
// exit();
$idea2 = $_POST["idea2"];                    // データ受け取り
$write_data2 = "{$idea2}\n";     // スペース区切りで最後に改行 
$file2 = fopen('data/second.txt', 'a');       // ファイルを開く 引数はa
flock($file2, LOCK_EX);
fwrite($file2, $write_data2);
flock($file2, LOCK_UN);
fclose($file2);
header("Location:second.php");
