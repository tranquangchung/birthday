<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--https://cryptii.com/-->
<!--forever young and good looking. that is all i wish for you on your birthday!-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script language="javascript" src="../JS/puzzle_lv4.js"></script>
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <title>
        Happy Birthday
    </title>
</head>
<body>
<div>
    <h1 id="cirphertext"></h1>
    <script>
        load_cirphertext();
    </script>
</div>
<div>
    <h3>Hint: vigenere cipher, key = name_key</h3>
    <br>
    <textarea id="plaintext" rows="10" cols="50">
    </textarea>
</div>
<div>
    <br>
    <input type="button" name="button" value="Submit" id="button">
    <script>
        var button = document.getElementById('button');
        button.addEventListener('click', check);
    </script>
</div>
<div>
    <h3 id="checkanswer"></h3>
</div>
<br>
<form action="level5.php" method="post">
    <div id="nextpage"></div>
</form>
</body>