<!--/**-->
<!--* Created by PhpStorm.-->
<!--* User: john-->
<!--* Date: 14/04/2018-->
<!--* Time: 23:21-->
<!--*/-->
<!--https://www.codecogs.com/latex/eqneditor.php-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script language="javascript" src="../JS/puzzle_lv6.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://smtpjs.com/v2/smtp.js"></script>
    <title>
        Happy Birthday
    </title>
</head>
<body>
<div>
    <script>
        init();
    </script>
<!--    Congratulation Box-->
    <div id="congratulation_box">
        <h1>Congratulations the smart and beautiful girl</h1>
    </div>
<!--    Ask Box-->
    <div id="ask_box">
        <div id="quotes_box">
            <h1>abc xyz</h1>
        </div>
        <div id="button_box">
            <button class="button" id="button1">NO</button>
            <script>
                var button = document.getElementById('button1');
                button.addEventListener('mouseover', button1);
                button.addEventListener('mouseout', button1out);
                button.addEventListener('click', button1click);
            </script>


            <button class="button" id="button2">YES</button>
            <script>
                var button = document.getElementById('button2');
                button.addEventListener('click', button2);
            </script>
        </div>
    </div>
</div>

</body>