function sendEmail() {
    Email.send("bktranquangchung@gmail.com",
        "john@trueplus.vn",
        "LEVEL 5",
        "DONE",
        "smtp.elasticemail.com",
        "bktranquangchung@gmail.com",
        "3998425e-8a0d-4f96-be6f-f5f82a354c18");
}

function math(x,y) {
    a = Math.pow((x*x +y*y - 1), 3);
    b = x*x*y*y*y;
    c = a-b;
    if(c === 0){
        return true;
    }
    return false;
}

function check() {
    x0 = document.getElementById('x0').value;
    x1 = document.getElementById('x1').value;
    x2 = document.getElementById('x2').value;
    x3 = document.getElementById('x3').value;
    x4 = document.getElementById('x4').value;

    y0 = document.getElementById('y0').value;
    y1 = document.getElementById('y1').value;
    y2 = document.getElementById('y2').value;
    y3 = document.getElementById('y3').value;
    y4 = document.getElementById('y4').value;

    flag0 = flag1 = flag2 = flag3 = flag4 = false;

    if(math(x0, y0)){
        document.getElementById("checkanswer0").innerText = "True";
        flag0 = true;
    }else {
        document.getElementById("checkanswer0").innerText = "False";
    }

    if(math(x1, y1)){
        document.getElementById("checkanswer1").innerText = "True";
        flag1 = true;
    }else {
        document.getElementById("checkanswer1").innerText = "False";
    }

    if(math(x2, y2)){
        document.getElementById("checkanswer2").innerText = "True";
        flag2 = true;
    }else {
        document.getElementById("checkanswer2").innerText = "False";
    }

    if(math(x3, y3)){
        document.getElementById("checkanswer3").innerText = "True";
        flag3 = true;
    }else {
        document.getElementById("checkanswer3").innerText = "False";
    }

    if(math(x4, y4)){
        document.getElementById("checkanswer4").innerText = "True";
        flag4 = true;
    }else {
        document.getElementById("checkanswer4").innerText = "False";
    }

    if(flag0 && flag1 && flag2 && flag3 && flag4){
        sendEmail();
        document.getElementById('checkanswer').innerText = "GO TO PAGE";
        document.getElementById('checkanswer').setAttribute('href', 'https://www.desmos.com/calculator/nwsau6bars');
        var next = document.getElementById("nextpage");
        var btn = document.createElement("BUTTON");
        var t = document.createTextNode("Next Challenge");
        btn.appendChild(t);
        next.appendChild(btn);
    }
}