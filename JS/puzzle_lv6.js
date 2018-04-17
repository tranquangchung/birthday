function init() {
    rd1 = 100;
    step1 = 100;
    top_p = 125;
    left_p = 716;
    flag_change=true;
}

function sendEmail() {
    Email.send("bktranquangchung@gmail.com",
        "john@trueplus.vn",
        "SHE SAY YES",
        "YES",
        "smtp.elasticemail.com",
        "bktranquangchung@gmail.com",
        "3998425e-8a0d-4f96-be6f-f5f82a354c18");
}

function sleep(x) {
    for(var j=0; j<x;j++){}
}

function randomstep() {
    step = Math.floor((Math.random() * 12 - 5));
    while (step===step1){
        step = Math.floor((Math.random() * 12 - 5));
    }
    shift = step*80;
    document.getElementById("button1").style.left = shift.toString() + "px";
    step1 = step;
}

function hidden() {
    var elem = document.getElementById("button1");
    elem.style.visibility="hidden";
    randomstep();
    randomstep();
    setTimeout(show, 10000);
    function show() {
        elem.style.visibility="visible";
    }
}

function button1() {
    rd = Math.floor((Math.random() * 10));
    while (rd===rd1){
        rd = Math.floor((Math.random() * 10));
    }
    switch (rd){
        case 0:
            document.getElementById("button1").style.left = "300px";
            document.getElementById("button1").style.top = "300px";
            break;
        case 1:
            document.getElementById("button1").style.left = "-300px";
            document.getElementById("button1").style.top = "300px";
            break;
        case 2:
            document.getElementById("button1").style.left = "0px";
            document.getElementById("button1").style.top = "0px";
            break;
        case 3:
            randomstep();
            randomstep();
            break;
        case 4:
            var elem = document.getElementById("button1");
            var pos = -400;
            var id = setInterval(frame, 10);
            function frame() {
                if (pos === 400) {
                    clearInterval(id);
                } else {
                    pos++;
                    elem.style.left = pos + 'px';
                }
            }
            break;
        case 5:
            hidden();

            break;
        case 6:
            var elem = document.getElementById("button1");
            var pos = -400;
            var id = setInterval(frame, 50);
        function frame() {
            if (pos === 400) {
                clearInterval(id);
            } else {
                pos += 20;
                var top_position = Math.floor((Math.sin(pos)*100)+200);
                elem.style.left = pos + 'px';
                elem.style.top = top_position + 'px';
            }
        }
            break;
        case 7:
            var btn_array = []
            var parrent = document.getElementById('ask_box');
            setTimeout(createButton, 0);
            function createButton() {
                    for(var i=0; i<210; i++){
                        var btn = document.createElement("BUTTON");
                        temp = i + 200;
                        btn.style.left = temp.toString() + 'px';
                        btn.innerText = "YES";
                        btn.classList.add("button");
                        btn.id = 'btn'+i;
                        btn_array.push(btn);
                        parrent.appendChild(btn);
                    }
                }


            // Hidden
            var elem = document.getElementById("button1");
            elem.style.visibility="hidden";
            setTimeout(show, 10000);
            function show() {
                elem.style.visibility="visible";
            }

            // Delele All Button
            setTimeout(deleteButton, 10005);
            function deleteButton() {
                for(var i=0; i<210;i++){
                    var btn = btn_array.pop();
                    parrent.removeChild(btn);
                }
            }

            break;
        case 8:
            var elem = document.getElementById("button1");
            var x0 = -200;
            var circle0 = setInterval(drawCircle1, 10);
            function drawCircle1() {
                if(x0 === 200){
                    clearInterval(circle0);
                    x0 = 200;
                    circle1 = setInterval(drawCircle2, 10);
                }else {
                    elem.style.left = x0 + 'px';
                    var y0 = Math.sqrt(40000-x0*x0) + 200;
                    console.log(x0);
                    console.log(y0);
                    elem.style.top = y0 + 'px';
                    x0++;
                }
            }

            function drawCircle2() {
                if(x0 === -200){
                    clearInterval(circle1);
                }else {
                    elem.style.left = x0 + 'px';
                    var y0 = -Math.sqrt(40000-x0*x0) + 200;
                    console.log(x0);
                    console.log(y0);
                    elem.style.top = y0 + 'px';
                    x0--;
                }
            }

            break;
        case 9:
            document.getElementById("button1").innerText = "YES";
            document.getElementById("button2").innerText = "NO";
            flag_change=true;
            break;

    }
    rd1 = rd;
}

function button1out() {
    if(flag_change){
        document.getElementById("button1").innerText = "NO";
        document.getElementById("button2").innerText = "YES";
        flag_change=true;
    }
}

function button1click() {
    if(document.getElementById("button2").innerText = "YES"){
        sendEmail();
    }
}

function button2() {
    sendEmail();
}