<?php
// var_dump($_POST);
// exit();

$str = '';                                  // 出力用の空の文字列
$file = fopen('data/todo.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str);
// exit();
if ($file) {
    while ($line = fgets($file)) {            // fgets()で1行ずつ取得→$lineに格納
        $str .= "<tr><td>{$line}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file, LOCK_UN);                      // ロック解除 
fclose($file);                              // ファイル閉じる// ($strに全部の情報が入る!)


//str1
$str1 = '';                                  // 出力用の空の文字列
$file1 = fopen('data/todo1.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str1);
// exit();
if ($file1) {
    while ($line1 = fgets($file1)) {            // fgets()で1行ずつ取得→$lineに格納
        $str1 .= "<tr><td>{$line1}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file1, LOCK_UN);                      // ロック解除 
fclose($file1);                              // ファイル閉じる// ($strに全部の情報が入る!)


//str2
$str2 = '';                                  // 出力用の空の文字列
$file2 = fopen('data/todo2.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str2);
// exit();
if ($file2) {
    while ($line2 = fgets($file2)) {            // fgets()で1行ずつ取得→$lineに格納
        $str2 .= "<tr><td>{$line2}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file2, LOCK_UN);                      // ロック解除 
fclose($file2);                              // ファイル閉じる// ($strに全部の情報が入る!)


///str3
$str3 = '';                                  // 出力用の空の文字列
$file3 = fopen('data/todo3.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str3);
// exit();
if ($file3) {
    while ($line3 = fgets($file3)) {            // fgets()で1行ずつ取得→$lineに格納
        $str3 .= "<tr><td>{$line3}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file3, LOCK_UN);                      // ロック解除 
fclose($file3);                              // ファイル閉じる// ($strに全部の情報が入る!)


///str4
$str4 = '';                                  // 出力用の空の文字列
$file4 = fopen('data/todo4.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str);
// exit();
if ($file4) {
    while ($line4 = fgets($file4)) {            // fgets()で1行ずつ取得→$lineに格納
        $str4 .= "<tr><td>{$line4}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file4, LOCK_UN);                      // ロック解除 
fclose($file4);                              // ファイル閉じる// ($strに全部の情報が入る!)


//str5
$str5 = '';                                  // 出力用の空の文字列
$file5 = fopen('data/todo5.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str5);
// exit();
if ($file5) {
    while ($line5 = fgets($file5)) {            // fgets()で1行ずつ取得→$lineに格納
        $str5 .= "<tr><td>{$line5}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file5, LOCK_UN);                      // ロック解除 
fclose($file5);                              // ファイル閉じる// ($strに全部の情報が入る!)


//str6
$str6 = '';                                  // 出力用の空の文字列
$file6 = fopen('data/todo6.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str6);
// exit();
if ($file6) {
    while ($line6 = fgets($file6)) {            // fgets()で1行ずつ取得→$lineに格納
        $str6 .= "<tr><td>{$line6}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file6, LOCK_UN);                      // ロック解除 
fclose($file6);                              // ファイル閉じる// ($strに全部の情報が入る!)


///str7
$str7 = '';                                  // 出力用の空の文字列
$file7 = fopen('data/todo7.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str7);
// exit();
if ($file7) {
    while ($line7 = fgets($file7)) {            // fgets()で1行ずつ取得→$lineに格納
        $str7 .= "<tr><td>{$line7}</td></tr>";    // 取得したデータを$strに入れる }
    }
}
flock($file7, LOCK_UN);                      // ロック解除 
fclose($file7);                              // ファイル閉じる// ($strに全部の情報が入る!)


//str8
$str8 = '';                                  // 出力用の空の文字列
$file8 = fopen('data/todo8.txt', 'r');        // ファイルを開く(読み取り専用) flock($file, LOCK_EX); // ファイルをロック
// var_dump($str)8;
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
    <title>idea共有</title>
</head>


<body>
    <form action="dataread.php" method="post">
        <h1>TEAM building</h1>
        <div id="main-target">
            <input id="target" type="button" value="目的" style="background-color: #ff6347;">
        </div>
    </form>
    <div>
        <div class="sub-target" id="sub-target" style="display: none;">
            <input id="target1" type="button" value="目標1" style="background-color:#cd853f; ">
            <input id="target2" type="button" value="目標2" style="background-color:#00ced1; ">
            <input id="target3" type="button" value="目標3" style="background-color:#ba55e3; ">
            <input id="target4" type="button" value="目標4" style="background-color:#ffd700; ">
            <input id="target5" type="button" value="目標5" style="background-color:#ffa500; ">
            <input id="target6" type="button" value="目標6" style="background-color:#ee82ee; ">
            <input id="target7" type="button" value="目標7" style="background-color:#7fff00; ">
            <input id="target8" type="button" value="目標8" style="background-color:#f5deb3; ">
        </div>
    </div>

    <div id="first">
        <form action="dataread.php" method="post">
            <fieldset style="display: none;" id="in0">
                <legend>目的</legend>
                <div>
                    <p>入力: <textarea type="text" name="idea" id="write" cols="30" rows="10"></textarea></p>
                </div>
                <div>
                    <input type="submit" id="button" value="送信">
                    <!-- <button>送信</button> -->
                </div>
            </fieldset>
            <fieldset style="display: none;" id="out0">
                <legend>出力</legend>
                <table>
                    <tbody id="tr0">
                        <tr>
                            <td><?= "$str" ?></td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
            <div id="submit0" style="display: none;">
                <div>
                    <input type="text" id="mandara_main" placeholder="目的">
                    <input type="button" value="次へ" id="ok0">
                </div>
            </div>
        </form>
    </div>

    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in1">
            <legend>目標１</legend>
            <div>
                <p>入力: <input type="text" name="idea1"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out1">
            <legend>出力</legend>
            <table>
                <tbody id="tr1">
                    <tr>
                        <td><?= "$str1" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit1" style="display: none;">
            <div>
                <input type="text" id="mandara_sub1" placeholder="目標1">
                <input type="button" value="次へ" id="ok1">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in2">
            <legend>目標２</legend>
            <div>
                <p>入力: <input type="text" name="idea2"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out2">
            <legend>出力</legend>
            <table>
                <tbody id="tr2">
                    <tr>
                        <td><?= "$str2" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit2" style="display: none;">
            <div>
                <input type="text" id="mandara_sub2" placeholder="目標2">
                <input type="button" value="次へ" id="ok2">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in3">
            <legend>目標３</legend>
            <div>
                <p>入力: <input type="text" name="idea3"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out3">
            <legend>出力</legend>
            <table>
                <tbody id="tr3">
                    <tr>
                        <td><?= "$str3" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit3" style="display: none;">
            <div>
                <input type="text" id="mandara_sub3" placeholder="目標3">
                <input type="button" value="次へ" id="ok3">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in4">
            <legend>目標４</legend>
            <div>
                <p>入力: <input type="text" name="idea4"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out4">
            <legend>出力</legend>
            <table>
                <tbody id="tr4">
                    <tr>
                        <td><?= "$str4" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit4" style="display: none;">
            <div>
                <input type="text" id="mandara_sub4" placeholder="目標4">
                <input type="button" value="次へ" id="ok4">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in5">
            <legend>目標５</legend>
            <div>
                <p>入力: <input type="text" name="idea5"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out5">
            <legend>出力</legend>
            <table>
                <tbody id="tr5">
                    <tr>
                        <td><?= "$str5" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit5" style="display: none;">
            <div>
                <input type="text" id="mandara_sub5" placeholder="目標5">
                <input type="button" value="次へ" id="ok5">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in6">
            <legend>目標６</legend>
            <div>
                <p>入力: <input type="text" name="idea6"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out6">
            <legend>出力</legend>
            <table>
                <tbody id="tr6">
                    <tr>
                        <td><?= "$str6" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit6" style="display: none;">
            <div>
                <input type="text" id="mandara_sub6" placeholder="目標6">
                <input type="button" value="次へ" id="ok6">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in7">
            <legend>目標７</legend>
            <div>
                <p>入力: <input type="text" name="idea7"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out7">
            <legend>出力</legend>
            <table>
                <tbody id="tr7">
                    <tr>
                        <td><?= "$str7" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit7" style="display: none;">
            <div>
                <input type="text" id="mandara_sub7" placeholder="目標7">
                <input type="button" value="次へ" id="ok7">
            </div>
        </div>
    </form>


    <form action="dataread.php" method="post">
        <fieldset style="display: none;" id="in8">
            <legend>目標８</legend>
            <div>
                <p>入力: <input type="text" name="idea8"></p>
            </div>
            <div>
                <button>送信</button>
            </div>
        </fieldset>
        <fieldset style="display: none;" id="out8">
            <legend>出力</legend>
            <table>
                <tbody id="tr8">
                    <tr>
                        <td><?= "$str8" ?></td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        <div id="submit8" style="display: none;">
            <div>
                <input type="text" id="mandara_sub8" placeholder="目標8">
                <input type="button" value="次へ" id="ok8">
            </div>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#target').click(function() {
                $('#in0').css('display', 'block')
                $('#out0').css('display', 'block')
                $('#submit0').css('display', 'block')
            });
        });
        $(function() {
            $('#ok0').click(function() {
                // $('#in1').css('display', 'block')
                // $('#out1').css('display', 'block')
                // $('#submit1').css('display', 'block')
                $('#sub-target').css('display', 'block')
                $('#main-target').css('display', 'none')
                $('#in0').css('display', 'none')
                $('#out0').css('display', 'none')
                $('#submit0').css('display', 'none')
            });
        });
        $(function() {
            $('#target1').click(function() {
                $('#in1').css('display', 'block')
                $('#out1').css('display', 'block')
                $('#submit1').css('display', 'block')
            });
        });
        $(function() {
            $('#target2').click(function() {
                $('#in2').css('display', 'block')
                $('#out2').css('display', 'block')
                $('#submit2').css('display', 'block')
            });
        });
        $(function() {
            $('#target3').click(function() {
                $('#in3').css('display', 'block')
                $('#out3').css('display', 'block')
                $('#submit3').css('display', 'block')
            });
        });
        $(function() {
            $('#target4').click(function() {
                $('#in4').css('display', 'block')
                $('#out4').css('display', 'block')
                $('#submit4').css('display', 'block')
            });
        });
        $(function() {
            $('#target5').click(function() {
                $('#in5').css('display', 'block')
                $('#out5').css('display', 'block')
                $('#submit5').css('display', 'block')
            });
        });
        $(function() {
            $('#target6').click(function() {
                $('#in6').css('display', 'block')
                $('#out6').css('display', 'block')
                $('#submit6').css('display', 'block')
            });
        });
        $(function() {
            $('#target7').click(function() {
                $('#in7').css('display', 'block')
                $('#out7').css('display', 'block')
                $('#submit7').css('display', 'block')
            });
        });
        $(function() {
            $('#target8').click(function() {
                $('#in8').css('display', 'block')
                $('#out8').css('display', 'block')
                $('#submit8').css('display', 'block')
            });
        });
    </script>

    <script>
        const target = $('#write').val();
        $("form").submit(function() {
            return false;
        });
        $(function() {
            $('#button').click(
                function() {
                    $.ajax({
                        url: 'dataread.php',
                        dataType: 'text',
                        type: 'Post',
                        data: {
                            val: "target"
                        },
                        success: function(data) {
                            $('#write').html(data);
                        },
                        error: function(data) {
                            alert('error');
                        }
                    });
                }
            );
        });
    </script>
</body>

</html>