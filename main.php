<?php
// var_dump($_POST);
// exit();

$str = '';                                  // 出力用の空の文字列
$file = fopen('data/todo.txt', 'r');        // ファイルを開く(読み取り専用)
flock($file, LOCK_EX); // ファイルをロック
// var_dump($str);
// exit();
if ($file) {
    while ($line = fgets($file)) {            // fgets()で1行ずつ取得→$lineに格納
        $str .= "<tr><td>{$line}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file, LOCK_UN);                      // ロック解除 
fclose($file);                              // ファイル閉じる// ($strに全部の情報が入る!)

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main-target</title>
</head>

<body>
    <div class=" sub-target" id="sub-target">
        <input id="target1" type="button" value="目標1" style="background-color:#cd853f; " onclick="location.href='first.php'">
        <input id="target2" type="button" value="目標2" style="background-color:#00ced1; " onclick="location.href='second.php'">
        <input id="target3" type="button" value="目標3" style="background-color:#ba55e3; " onclick="location.href='third.php'">
        <input id="target4" type="button" value="目標4" style="background-color:#ffd700; " onclick="location.href='forth.php'">
        <input id="target5" type="button" value="目標5" style="background-color:#ffa500; " onclick="location.href='fifth.php'">
        <input id="target6" type="button" value="目標6" style="background-color:#ee82ee; " onclick="location.href='sixth.php'">
        <input id="target7" type="button" value="目標7" style="background-color:#7fff00; " onclick="location.href='seventh.php'">
        <input id="target8" type="button" value="目標8" style="background-color:#f5deb3; " onclick="location.href='eighth.php'">
    </div>
    <div id="first">
        <form action="zero.php" method="post">
            <fieldset id="in">
                <legend>目的</legend>
                <div>
                    <p>入力: <textarea type="text" name="idea" id="write" cols="30" rows="10"></textarea></p>
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
                            <td><?= "$str" ?></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <div id="submit">
                <div>
                    <input type="text" id="mandara_main" placeholder="目的">
                    <input type="button" value="次へ" id="ok">
                </div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>