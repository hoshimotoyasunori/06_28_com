<?php
// var_dump($_POST);
// exit();

$str = '';                                  // 出力用の空の文字列
$file = fopen('data/main.txt', 'r');        // ファイルを開く(読み取り専用)
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
    <table>
        <tbody>
            <tr>
                <td>
                    <input id="target1" type="button" value="目標1" style="background-color:#cd853f; " onclick="location.href='first.php'">
                    <input id="target2" type="button" value="目標2" style="background-color:#00ced1; " onclick="location.href='second.php'">
                    <input id="target3" type="button" value="目標3" style="background-color:#ba55e3; " onclick="location.href='third.php'">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="target4" type="button" value="目標4" style="background-color:#ffd700; " onclick="location.href='forth.php'">
                    <input id="target" type="button" value="目  的" style="background-color: #ff6347;" onclick="location.href='main.php'">
                    <input id="target5" type="button" value="目標5" style="background-color:#ffa500; " onclick="location.href='fifth.php'">
                </td>
            </tr>
            <tr>
                <td>
                    <input id="target6" type="button" value="目標6" style="background-color:#ee82ee; " onclick="location.href='sixth.php'">
                    <input id="target7" type="button" value="目標7" style="background-color:#7fff00; " onclick="location.href='seventh.php'">
                    <input id="target8" type="button" value="目標8" style="background-color:#f5deb3; " onclick="location.href='eighth.php'">
                </td>
            </tr>
        </tbody>
    </table>

    <div id="first">
        <form action="zero.php" method="post">
            <fieldset id="in">
                <legend style="background-color: #ff6347;">目的</legend>
                <div>
                    <p>入力: <textarea type="text" name="idea" id="write" cols="30" rows="3"></textarea></p>
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
                    <textarea name="text" id="mandara_main" cols="20" rows="5"></textarea>
                    <!-- <input type="text" id="mandara_main" placeholder="目的"> -->
                    <input type="button" value="CLEAR" id="ok">
                </div>
            </div>
        </form>

        <table>
            <tbody>
                <tr>
                    <td>
                        <textarea name="output-target1" id="output-target1" cols="20" rows="5" style="background-color:#cd853f;"></textarea>
                        <textarea name=" output-target2" id="output-target2" cols="20" rows="5" style="background-color:#00ced1; "></textarea>
                        <textarea name="output-target3" id="output-target3" cols="20" rows="5" style="background-color:#ba55e3; "></textarea>
                        <!-- <input id="target1" type="button" value="目標1" style="background-color:#cd853f; " onclick="location.href='first.php'">
                        <input id="target2" type="button" value="目標2" style="background-color:#00ced1; " onclick="location.href='second.php'">
                        <input id="target3" type="button" value="目標3" style="background-color:#ba55e3; " onclick="location.href='third.php'"> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="output-target4" id="output-target4" cols="20" rows="5" style="background-color:#ffd700; "></textarea>
                        <textarea name="output-target" id="output-target" cols="20" rows="5" style="background-color: #ff6347;"></textarea>
                        <textarea name="output-target5" id="output-target5" cols="20" rows="5" style="background-color:#ffa500; "></textarea>
                        <!-- <input id="target4" type="button" value="目標4" style="background-color:#ffd700; " onclick="location.href='forth.php'">
                        <input id="target" type="button" value="目  的" style="background-color: #ff6347;" onclick="location.href='main.php'">
                        <input id="target5" type="button" value="目標5" style="background-color:#ffa500; " onclick="location.href='fifth.php'"> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <textarea name="output-target6" id="output-target6" cols="20" rows="5" style="background-color:#ee82ee; "></textarea>
                        <textarea name="output-target7" id="output-target7" cols="20" rows="5" style="background-color:#7fff00; "></textarea>
                        <textarea name="output-target8" id="output-target8" cols="20" rows="5" style="background-color:#f5deb3; "></textarea>
                        <!-- <input id="target6" type="button" value="目標6" style="background-color:#ee82ee; " onclick="location.href='sixth.php'">
                        <input id="target7" type="button" value="目標7" style="background-color:#7fff00; " onclick="location.href='seventh.php'">
                        <input id="target8" type="button" value="目標8" style="background-color:#f5deb3; " onclick="location.href='eighth.php'"> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        /////////////////////////////// main_target//////////////////////////////////
        $(function() {
            //1.Save クリックイベント
            $('textarea').keyup(function() {
                const data = {
                    main: $('#mandara_main').val(),
                }
                console.log(data);
                const jasonData = JSON.stringify(data);
                console.log(jasonData);
                localStorage.setItem('memo', jasonData);
                // localStorage.setItem('memo', text);

                $('#mandara_main').keyup(function() {
                    let data = document.getElementById("#mandara_main").value;
                    document.getElementById("#output-target").value = data;
                })

                //2.clear クリックイベント
                $('#ok').on('click', function() {
                    localStorage.removeItem('memo');
                    $('#output-target').val('')
                });
                //3.ページ読み込み：保存データ取得表示
                if (localStorage.getItem('memo')) {
                    const jasonData = localStorage.getItem('memo');
                    console.log(jasonData);
                    const data = JSON.parse(jasonData);
                    console.log(data);

                    $('#output-target').val(data.main);
                }
            });
        });
    </script>
</body>

</html>