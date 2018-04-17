<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--happybirthday-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script language="javascript" src="../JS/puzzle_lv1.js"></script>
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <title>
        Happy Birthday
    </title>
</head>
<body>
<?php
$keyword = "HAPPY BIRTHDAY";
$len = strlen($keyword);
$name0 = $name1 = $name2 = $name3 = $name4 = $name5 = $name6 = $name7 = $name8 = $name9 = $name10 = $name11 = $name12 = "";
$flag0 = $flag1 = $flag2 = $flag3 = $flag4 = $flag5 = $flag6 = $flag7 = $flag8 = $flag9 = $flag10 = $flag11 = $flag12 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["name0"])){
        $name0 = $_POST["name0"];
    }
    if(!empty($_POST["name1"])){
        $name1 = $_POST["name1"];
    }
    if(!empty($_POST["name2"])){
        $name2 = $_POST["name2"];
    }
    if(!empty($_POST["name3"])){
        $name3 = $_POST["name3"];
    }
    if(!empty($_POST["name4"])){
        $name4 = $_POST["name4"];
    }
    if(!empty($_POST["name5"])){
        $name5 = $_POST["name5"];
    }
    if(!empty($_POST["name6"])){
        $name6 = $_POST["name6"];
    }
    if(!empty($_POST["name7"])){
        $name7 = $_POST["name7"];
    }
    if(!empty($_POST["name8"])){
        $name8 = $_POST["name8"];
    }
    if(!empty($_POST["name9"])){
        $name9 = $_POST["name9"];
    }
    if(!empty($_POST["name10"])){
        $name10 = $_POST["name10"];
    }
    if(!empty($_POST["name11"])){
        $name11 = $_POST["name11"];
    }
    if(!empty($_POST["name12"])){
        $name12 = $_POST["name12"];
    }

    function trueWord($id){
            $str_trueWord = '<style type="text/css">%s{background-color: green;}</style>';
            $str_trueWord = sprintf($str_trueWord, $id);
            echo $str_trueWord;
    }

    function wrongWord($id){
        $str_wrongWord = '<style type="text/css">%s{background-color: red;}</style>';
        $str_wrongWord = sprintf($str_wrongWord, $id);
        echo $str_wrongWord;
    }

    if (!empty($_POST["name0"])){
        if(trim(strtoupper($name0)) === "H"){
            trueWord('#c0');
            $flag0 = true;
        }else{
            wrongWord('#c0');
        }
    }

    if (!empty($_POST["name1"])){
        if(trim(strtoupper($name1)) === "A"){
            trueWord('#c1');
            $flag1 = true;
        }else{
            wrongWord('#c1');
        }
    }

    if (!empty($_POST["name2"])){
        if(trim(strtoupper($name2)) === "P"){
            trueWord('#c2');
            $flag2 = true;

        }else{
            wrongWord('#c2');
        }
    }

    if (!empty($_POST["name3"])){
        if(trim(strtoupper($name3)) === "P"){
            trueWord('#c3');
            $flag3 = true;
        }else{
            wrongWord('#c3');
        }
    }

    if (!empty($_POST["name4"])){
        if(trim(strtoupper($name4)) === "Y"){
            trueWord('#c4');
            $flag4 = true;
        }else{
            wrongWord('#c4');
        }
    }

    if (!empty($_POST["name5"])){
        if(trim(strtoupper($name5)) === "B"){
            trueWord('#c5');
            $flag5 = true;
        }else{
            wrongWord('#c5');
        }
    }

    if (!empty($_POST["name6"])){
        if(trim(strtoupper($name6)) === "I"){
            trueWord('#c6');
            $flag6 = true;
        }else{
            wrongWord('#c6');
        }
    }

    if (!empty($_POST["name7"])){
        if(trim(strtoupper($name7)) === "R"){
            trueWord('#c7');
            $flag7 = true;
        }else{
            wrongWord('#c7');
        }
    }

    if (!empty($_POST["name8"])){
        if(trim(strtoupper($name8)) === "T"){
            trueWord('#c8');
            $flag8 = true;
        }else{
            wrongWord('#c8');
        }
    }

    if (!empty($_POST["name9"])){
        if(trim(strtoupper($name9)) === "H"){
            trueWord('#c9');
            $flag9 = true;
        }else{
            wrongWord('#c9');
        }
    }

    if (!empty($_POST["name10"])){
        if(trim(strtoupper($name10)) === "D"){
            trueWord('#c10');
            $flag10 = true;
        }else{
            wrongWord('#c10');
        }
    }

    if (!empty($_POST["name11"])){
        if(trim(strtoupper($name11)) === "A"){
            trueWord('#c11');
            $flag11 = true;
        }else{
            wrongWord('#c11');
        }
    }

    if (!empty($_POST["name12"])){
        if(trim(strtoupper($name12)) === "Y"){
            trueWord('#c12');
            $flag12 = true;
        }else{
            wrongWord('#c12');
        }
    }
}

?>
<h1>GUESSS THE WORD</h1>
<h2>this is special day of each people</h2>
<div id="guessWord">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input class="inputWord" id="c0" type="text" name="name0" value="<?php echo $name0;?>">
        <input class="inputWord" id="c1" type="text" name="name1" value="<?php echo $name1;?>">
        <input class="inputWord" id="c2" type="text" name="name2" value="<?php echo $name2;?>">
        <input class="inputWord" id="c3" type="text" name="name3" value="<?php echo $name3;?>">
        <input class="inputWord" id="c4" type="text" name="name4" value="<?php echo $name4;?>">
        <input class="inputWord" id="c5" type="text" name="name5" value="<?php echo $name5;?>">
        <input class="inputWord" id="c6" type="text" name="name6" value="<?php echo $name6;?>">
        <input class="inputWord" id="c7" type="text" name="name7" value="<?php echo $name7;?>">
        <input class="inputWord" id="c8" type="text" name="name8" value="<?php echo $name8;?>">
        <input class="inputWord" id="c9" type="text" name="name9" value="<?php echo $name9;?>">
        <input class="inputWord" id="c10" type="text" name="name10" value="<?php echo $name10;?>">
        <input class="inputWord" id="c11" type="text" name="name11" value="<?php echo $name11;?>">
        <input class="inputWord" id="c12" type="text" name="name12" value="<?php echo $name12;?>">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<div>
    <div id="correct"> <h3 class="display">Correct</h3> </div>
    <div id="wrong"> <h3 class="display">Wrong</h3> </div>
</div>

<?php
    if(
        $flag0 == true and
        $flag1 == true and
        $flag2 == true and
        $flag3 == true and
        $flag4 == true and
        $flag5 == true and
        $flag6 == true and
        $flag7 == true and
        $flag8 == true and
        $flag9 == true and
        $flag10 == true and
        $flag11 == true and
        $flag12 == true
    ){
        $email = '<script>sendEmail_lv1();</script>';
        echo $email;
        $level = '
            <form action="level2.php" method="post">
           <!-- All your input fields here -->
           <input type="submit" name="submit" value="Next Challenge">
            </form>
        ';
        echo '<br>';
        echo '<br>';
        echo $level;
    }


?>
</body>







































