<?php
    $adjectives = array();
    $nouns = array();

    $fh = fopen('./adjectives.txt', 'r');
    while(!feof($fh)){
        $line = fgets($fh);
        $line = str_replace(PHP_EOL, '', $line);
        array_push($adjectives, $line);
    }
    fclose($fh);

    $fh = fopen('./nouns.txt', 'r');
    while(!feof($fh)){
        $line = fgets($fh);
        $line = str_replace(PHP_EOL, '', $line);
        array_push($nouns, $line);
    }
    fclose($fh);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Idea Generator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="Shortcut Icon" href="ico.ico" type="image/x-icon" />
    <style type="text/css">
        * {
            margin:0;
            padding:0;
            border:0;
        }
        body {
            background-color: #000;
        }
        div.main {
            height: 104px;
            margin-top: 220px;
            margin-left: 10%;
            margin-right: 10%;
        <?php
            background-image: url("bg.png");
            background-repeat: no-repeat;
            background-position: bottom right;
        }
        p {
            color: #FFF;
            height: 81px;
            padding-bottom: 3px;
            line-height: 70px;
            font-size: 70px;
            font-family: "Microsoft YaHei", "SimHei", "Tahoma", "Simsun";
            margin-right: 70px;
            padding: 0 20px 0 20px;
            text-align: center;
            border-bottom: #FFF solid 1px;
        }
    </style>
</head>

<body>
<div class="main">
    <p>
        <?php
            echo $adjectives[array_rand($adjectives,1)], "的", $nouns[array_rand($nouns,1)];

//                // 通过 file_get_contents 函数获取页面源码
//                $html = file_get_contents("http://www.matrix67.com/ideagen/");
//
//                // 通过 preg_replace 函数使页面源码由多行变单行
//                $htmlOneLine = preg_replace("/\r|\n|\t/", "", $html);
//
//                // 通过 preg_match 函数提取获取页面的信息
//                preg_match("/<p>(.*?)<\/p>/iU", $htmlOneLine, $titleArr);
//
//                // 由于 preg_match 函数的结果是数组的形式
//                $title = $titleArr[1];
//
//                // 通过 echo 函数输出标题信息
//                echo $title;
        ?>
    </p>
</div>
</body>
</html>
