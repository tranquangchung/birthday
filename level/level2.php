<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--chao em co gai thang tu cua toi-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <script language="javascript" src="../JS/puzzle_lv2.js"></script>
    <title>
        Happy Birthday
    </title>
</head>
<body>
<h1 id="puzzle"></h1>
<script type="text/javascript">
    str_swap_true = "chao em co gai thang tu cua toi";
    str_swap_array_true = str_swap_true.split("");
    str_swap_array = str_swap_true.split("");
    str_swap_array = swap(str_swap_array);
    document.getElementById("puzzle").innerHTML = str_swap_array.join('');
</script>
<br>
<div>
    <h3>Hint: This is vietnamese lyrics</h3>
</div>
<div id="process_box">
    <div id="process_box_0">
        <h3>Process:</h3>
    </div>
    <div id="process_box_1">
        <h3 id="process"></h3>
        <script type="text/javascript">
            checkpercent();
        </script>
    </div>
</div>
<br>
<h3>Swap</h3>
<div id="swap_box">
    <div id="swap_boxA">
        <input class="inputWord" type="text" name="swap0" value="" id="swap0">
    </div>
    <div id="swap_box_IMG">
        <img src="../IMG/swap-horizontal-orientation-arrows.png" alt="swap" style="width:25px;height:25px;">
    </div>
    <div id="swap_boxB">
        <input class="inputWord" type="text" name="swap1" value="" id="swap1">
    </div>
</div>
<br>
<input type="button" name="button" value="Submit" id="button">
<script>
    var button = document.getElementById('button');
    button.addEventListener('click', show);
</script>
<br>
<br>
<form action="level3.php" method="post">
    <div id="nextpage"></div>
</form>
</body>