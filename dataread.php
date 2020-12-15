<?php
// var_dump($_POST);
// exit();

// $main = $_POST["main"];                    // データ受け取り
$idea = $_POST["idea"];                    // データ受け取り
$idea1 = $_POST["idea1"];                    // データ受け取り
$idea2 = $_POST["idea2"];                    // データ受け取り
$idea3 = $_POST["idea3"];                    // データ受け取り
$idea4 = $_POST["idea4"];                    // データ受け取り
$idea5 = $_POST["idea5"];                    // データ受け取り
$idea6 = $_POST["idea6"];                    // データ受け取り
$idea7 = $_POST["idea7"];                    // データ受け取り
$idea8 = $_POST["idea8"];                    // データ受け取り

// $write_data0 = "{$main}\n";     // スペース区切りで最後に改行 
$write_data = "{$idea}\n";     // スペース区切りで最後に改行 
$write_data1 = "{$idea1}\n";     // スペース区切りで最後に改行 
$write_data2 = "{$idea2}\n";     // スペース区切りで最後に改行 
$write_data3 = "{$idea3}\n";     // スペース区切りで最後に改行 
$write_data4 = "{$idea4}\n";     // スペース区切りで最後に改行 
$write_data5 = "{$idea5}\n";     // スペース区切りで最後に改行 
$write_data6 = "{$idea6}\n";     // スペース区切りで最後に改行 
$write_data7 = "{$idea7}\n";     // スペース区切りで最後に改行 
$write_data8 = "{$idea8}\n";     // スペース区切りで最後に改行 




// $file0 = fopen('data/todo.txt0', 'a');       // ファイルを開く 引数はa
$file = fopen('data/todo.txt', 'a');       // ファイルを開く 引数はa
$file1 = fopen('data/todo1.txt', 'a');       // ファイルを開く 引数はa
$file2 = fopen('data/todo2.txt', 'a');       // ファイルを開く 引数はa
$file3 = fopen('data/todo3.txt', 'a');       // ファイルを開く 引数はa
$file4 = fopen('data/todo4.txt', 'a');       // ファイルを開く 引数はa
$file5 = fopen('data/todo5.txt', 'a');       // ファイルを開く 引数はa
$file6 = fopen('data/todo6.txt', 'a');       // ファイルを開く 引数はa
$file7 = fopen('data/todo7.txt', 'a');       // ファイルを開く 引数はa
$file8 = fopen('data/todo8.txt', 'a');       // ファイルを開く 引数はa

// var_dump($file);
// var_dump($file1);
// var_dump($file2);
// var_dump($file3);
// var_dump($file4);
// var_dump($file5);
// var_dump($file6);
// var_dump($file7);
// var_dump($file8);
// exit();

// ファイルをロック
// flock($file0, LOCK_EX);
flock($file, LOCK_EX);
flock($file1, LOCK_EX);
flock($file2, LOCK_EX);
flock($file3, LOCK_EX);
flock($file4, LOCK_EX);
flock($file5, LOCK_EX);
flock($file6, LOCK_EX);
flock($file7, LOCK_EX);
flock($file8, LOCK_EX);

// データに書き込み，
// fwrite($file0, $write_data0);
fwrite($file, $write_data);
fwrite($file1, $write_data1);
fwrite($file2, $write_data2);
fwrite($file3, $write_data3);
fwrite($file4, $write_data4);
fwrite($file5, $write_data5);
fwrite($file6, $write_data6);
fwrite($file7, $write_data7);
fwrite($file8, $write_data8);


// ロック解除
// flock($file0, LOCK_UN);
flock($file, LOCK_UN);
flock($file1, LOCK_UN);
flock($file2, LOCK_UN);
flock($file3, LOCK_UN);
flock($file4, LOCK_UN);
flock($file5, LOCK_UN);
flock($file6, LOCK_UN);
flock($file7, LOCK_UN);
flock($file8, LOCK_UN);


//ファイルを閉じる
// fclose($file0);
fclose($file);
fclose($file1);
fclose($file2);
fclose($file3);
fclose($file4);
fclose($file5);
fclose($file6);
fclose($file7);
fclose($file8);

header("Location:index.php");    // 入力画面に移動
