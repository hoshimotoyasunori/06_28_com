<?php
// var_dump($_POST);
// exit();

$str8 = '';                                  // 出力用の空の文字列
$file8 = fopen('data/eighth.txt', 'r');        // ファイルを開く(読み取り専用) 
flock($file8, LOCK_EX); // ファイルをロック

// var_dump($str1);
// exit();
if ($file8) {
    while ($line8 = fgets($file8)) {            // fgets()で1行ずつ取得→$lineに格納
        $str8 .= "<tr><td>{$line8}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file8, LOCK_UN);                      // ロック解除 
fclose($file8);                              // ファイル閉じる// ($strに全部の情報が入る!)

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eighth-target</title>
</head>

<body>
    <div id="main-target">
        <input id="target" type="button" value="目的" style="background-color: #ff6347;" onclick="location.href='main.php'">
    </div>
    <div>
        <div class=" sub-target" id="sub-target">
            <input id="target1" type="button" value="目標1" style="background-color:#cd853f; " onclick="location.href='first.php'">
            <input id="target2" type="button" value="目標2" style="background-color:#00ced1; " onclick="location.href='second.php'">
            <input id="target3" type="button" value="目標3" style="background-color:#ba55e3; " onclick="location.href='third.php'">
            <input id="target4" type="button" value="目標4" style="background-color:#ffd700; " onclick="location.href='forth.php'">
            <input id="target5" type="button" value="目標5" style="background-color:#ffa500; " onclick="location.href='fifth.php'">
            <input id="target6" type="button" value="目標6" style="background-color:#ee82ee; " onclick="location.href='sixth.php'">
            <input id="target7" type="button" value="目標7" style="background-color:#7fff00; " onclick="location.href='seventh.php'">
        </div>
    </div>
    <div id="eighth">
        <form action="hachi.php" method="post">
            <fieldset id="in">
                <legend>目標8</legend>
                <div>
                    <p>入力: <textarea type="text" name="idea8" id="write" cols="30" rows="10"></textarea></p>
                </div>
                <div>
                    <button>送信</button>
                </div>
            </fieldset>
            <fieldset id="out">
                <legend>出力</legend>
                <table>
                    <tbody>
                        <tr>
                            <td><?= "$str8" ?></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <div id="submit">
                <div>
                    <input type="text" id="mandara_main" placeholder="目標8">
                    <input type="button" value="次へ" id="ok">
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>