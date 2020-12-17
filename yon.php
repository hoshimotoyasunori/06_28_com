<?php
// var_dump($_POST);
// exit();
$idea4 = $_POST["idea4"];                    // データ受け取り
$write_data4 = "{$idea4}\n";     // スペース区切りで最後に改行 
$file4 = fopen('data/forth.txt', 'a');       // ファイルを開く 引数はa
flock($file4, LOCK_EX);
fwrite($file4, $write_data4);
flock($file4, LOCK_UN);
fclose($file4);
header("Location:forth.php");
