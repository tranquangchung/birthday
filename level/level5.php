<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--https://www.codecogs.com/latex/eqneditor.php-->
<!--http://www.wolframalpha.com/input/?i=(x%5E2%2By%5E2-1)%5E3-x%5E2y%5E3%3D0-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script language="javascript" src="../JS/puzzle_lv5.js"></script>
    <title>
        Happy Birthday
    </title>
</head>
<body>
<div>
    <h1>
        Find 5 point satisfy equation:
    </h1>
</div>
<div>
    <a href="https://www.codecogs.com/eqnedit.php?latex=\bg_white&space;\huge&space;(x^2&plus;y^2-1)^3-x^2y^3=0" target="_blank"><img src="https://latex.codecogs.com/gif.latex?\bg_white&space;\huge&space;(x^2&plus;y^2-1)^3-x^2y^3=0" title="\huge (x^2+y^2-1)^3-x^2y^3=0" /></a></body>
</div>

<div id="check_box">
<!--    X-->
    <div>
        <div id="X_BOX">
            <h3>X</h3>
            <input class="inputNumber" id="x0" type="text" name="x0" value="">
            <input class="inputNumber" id="x1" type="text" name="x1" value="">
            <input class="inputNumber" id="x2" type="text" name="x2" value="">
            <input class="inputNumber" id="x3" type="text" name="x3" value="">
            <input class="inputNumber" id="x4" type="text" name="x4" value="">
        </div>
    </div>
<!--    Y-->
    <div>
        <div id="Y_BOX">
            <h3>Y</h3>
            <input class="inputNumber" id="y0" type="text" name="y0" value="">
            <input class="inputNumber" id="y1" type="text" name="y1" value="">
            <input class="inputNumber" id="y2" type="text" name="y2" value="">
            <input class="inputNumber" id="y3" type="text" name="y3" value="">
            <input class="inputNumber" id="y4" type="text" name="y4" value="">
        </div>
    </div>
<!--    Check-->
    <div>
        <div id="ANSWER_BOX">
            <h3>CHECK</h3>
            <div class="answerbox">
                <div id="checkanswer0"></div>
            </div>
            <div class="answerbox">
                <div id="checkanswer1"></div>
            </div>
            <div class="answerbox">
                <div id="checkanswer2"></div>
            </div>
            <div class="answerbox">
                <div id="checkanswer3"></div>
            </div>
            <div class="answerbox">
                <div id="checkanswer4"></div>
            </div>
        </div>
    </div>
</div>

<div>
    <br>
    <input type="button" name="button" value="Submit" id="button">
    <script>
        var button = document.getElementById('button');
        button.addEventListener('click', check);
    </script>
</div>

<br>
<div>
    <a id="checkanswer"></a>
</div>
<br>

<form action="level6.php" method="post">
    <div id="nextpage"></div>
</form>
</body>
</html>
