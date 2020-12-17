<?php
// var_dump($_POST);
// exit();
$idea8 = $_POST["idea8"];                    // データ受け取り
$write_data8 = "{$idea8}\n";     // スペース区切りで最後に改行 
$file8 = fopen('data/eighth.txt', 'a');       // ファイルを開く 引数はa
flock($file8, LOCK_EX);
fwrite($file8, $write_data8);
flock($file8, LOCK_UN);
fclose($file8);
header("Location:eighth.php");
