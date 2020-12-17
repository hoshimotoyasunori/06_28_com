<?php
// var_dump($_POST);
// exit();
$idea = $_POST["idea"];                    // データ受け取り
$write_data = "{$idea}\n";     // スペース区切りで最後に改行 
$file = fopen('data/main.txt', 'a');       // ファイルを開く 引数はa

flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);

header("Location:main.php");
