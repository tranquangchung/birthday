<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <title>
        Happy Birthday
    </title>
</head>
<body>
<?php
$count = 0;
$str_swap_true = "chao em co gai thang tu cua toi";
$str_swap = "chao em co gai thang tu cua toi";
setcookie('str_swap', $str_swap);
?>
<?php

$anphabet = "abcdefghijklmnopqrstuvwxyz";
$swap0 = $swap1 = '';
function swapcharacter($str_swap, $c0, $c1){
    for($i=0; $i < strlen($str_swap); $i++){
        if($str_swap[$i] === $c0){
            $str_swap[$i] = $c1;
            continue;
        }
        if($str_swap[$i] === $c1){
            $str_swap[$i] = $c0;
            continue;
        }
    }
    return $str_swap;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Not First";
    $swap0 = $_POST["swap0"];
    $swap1 = $_POST["swap1"];
    $str_swap = $_COOKIE['str_swap'];
    $str_swap = swapcharacter($str_swap, $swap0, $swap1);
    setcookie('str_swap', $str_swap);
}else{
    $display = sprintf('<div id="str_swap">%s</div>', $str_swap);
    echo $display;
    echo "First";
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <br>
    <br>
    <h3>Swap</h3>
    <div id="swap_box">
        <div id="swap_boxA">
            <input class="inputWord" type="text" name="swap0" value="<?php echo $swap0;?>">
        </div>
        <div id="swap_box_IMG">
            <img src="../IMG/swap-horizontal-orientation-arrows.png" alt="swap" style="width:25px;height:25px;">
        </div>
        <div id="swap_boxB">
            <input class="inputWord" type="text" name="swap1" value="<?php echo $swap1;?>">
        </div>
    </div>
    <input type="submit" name="submit" value="Submit">

</form>
</body>