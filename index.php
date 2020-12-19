<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idea-tool</title>
</head>


<FRAMESET COLS="50%,*">　（FRAMESETの始まり、左右に分割）
    <FRAME SRC="voice/index.html">（page1の表示）
        <FRAME SRC="start.php">　（page2の表示）
            <NOFRAME>　（NOFRAMESの始まり）

                <BODY>
                    <A HREF="voice/index.html">page1</A><BR>
                    <A HREF="start.php">page2</A><BR>
                </BODY>
            </NOFRAME>　（NOFRAMESの終わり）
</frameset>　（FRAMESETの終わり）

</html>