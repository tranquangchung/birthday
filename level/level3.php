<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--https://cryptii.com/-->
<!--happy birthday to you! wishing you have a day filled with fun and delight!-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <script language="javascript" src="../JS/puzzle_lv3.js"></script>
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
    <h3>Hint: caesar cipher, key = month_key</h3>
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
<form action="level4.php" method="post">
    <div id="nextpage"></div>
</form>
</body>