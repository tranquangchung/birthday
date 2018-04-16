<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--Name: dung || victoria-->
<!--Birthday: 20/04/1996-->

<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <title>
        Happy Birthday
    </title>
</head>
<body>
<?php
    $name = "";
    $birthday = "";
    $nameErr = "";
    $birthdayErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }else{
            $name = $_POST["name"];
            if(strtolower($name) === "dung" or strtolower($name) === "victoria"){
                $nameErr = "Correct";
            }else{
                $nameErr = "Wrong";
            }
        }

        if (empty($_POST["birthday"])) {
            $birthdayErr = "Birthday is required";
        }else{
            $birthday = $_POST["birthday"];
            if($birthday === "20/04/1996"){
                $birthdayErr = "Correct";
            }else{
                $birthdayErr = "Wrong";
            }
        }
    }

?>
<div><h1>Welcome to the challenge</h1></div>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input id="name" type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br>
    Note: Vietnamese, lastname
    <br>
    <br>
    Birthday: <input id="birthday" type="text" name="birthday" value="<?php echo $birthday;?>">
    <span class="error">* <?php echo $birthdayErr;?></span>
    <br>
    Note: format D/M/Y
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if((strtolower($name) == "dung" or strtolower($name) === "victoria") and $birthday == "20/04/1996"){
    $namekey = "dung";
    $date_key = "20";
    $month_key = "04";
    echo '<h1>remember that</h1>';
    echo 'Name Key (first key): '. $namekey;
    echo '<br>';
    echo 'Date Key (second key): '. $date_key;
    echo '<br>';
    echo 'Month Key (third key): '. $month_key;
    echo '<br>';

    $level = '
        <form action="level/level1.php" method="post">
       <!-- All your input fields here -->
       <input type="submit" name="submit" value="Next">
        </form>
    ';
    echo $level;
}
?>
</body>
</html>
