<?php
// var_dump($_POST);
// exit();
$idea7 = $_POST["idea7"];                    // データ受け取り
$write_data7 = "{$idea7}\n";     // スペース区切りで最後に改行 
$file7 = fopen('data/seventh.txt', 'a');       // ファイルを開く 引数はa
flock($file7, LOCK_EX);
fwrite($file7, $write_data7);
flock($file7, LOCK_UN);
fclose($file7);
header("Location:seventh.php");
