function sendEmail() {
    Email.send("bktranquangchung@gmail.com",
        "john@trueplus.vn",
        "LEVEL 4",
        "DONE",
        "smtp.elasticemail.com",
        "bktranquangchung@gmail.com",
        "3998425e-8a0d-4f96-be6f-f5f82a354c18");
}

function load_cirphertext(){
    vigerne_key = "dung";
    plaintext = 'forever young and good looking. that is all i wish for you on your birthday!';
    plaintext_array =  plaintext.split("");
    cirpher_array =  plaintext.split("");
    punctuation = ['!', ' ', '.'];

    // encryption

    anphabet = "abcdefghijklmnopqrstuvwxyz";
    anphabet_array = "abcdefghijklmnopqrstuvwxyz".split("");
    anphabet_dict = {};
    for(var i=0; i<anphabet_array.length; i++){
        anphabet_dict[anphabet_array[i]] = i;
    }
    console.log(anphabet_dict);

    // shift
    shift = []
    for(var i=0; i<vigerne_key.length; i++){
        var index = anphabet_dict[vigerne_key[i]];
        shift.push(index)
    }

    console.log(shift);

    var s = 0;
    for(var i=0; i < plaintext_array.length; i++){
        if(!punctuation.includes(plaintext_array[i])){
            index = anphabet_dict[plaintext_array[i]];
            shift_to = shift[s%4];
            c0 = anphabet_array[(index+shift_to)%26];
            cirpher_array[i] = c0;
            s++;
        }
    }
    document.getElementById("cirphertext").innerText = cirpher_array.join('');
    console.log(cirpher_array);
}

function check() {
    pt = document.getElementById('plaintext').value.trim().toLocaleLowerCase();
    console.log(pt)
    if (pt === plaintext){
        sendEmail();
        document.getElementById('checkanswer').innerText = "CORRECT";
        var next = document.getElementById("nextpage");
        var btn = document.createElement("BUTTON");
        var t = document.createTextNode("Next Challenge");
        btn.appendChild(t);
        next.appendChild(btn);
    }else {
        document.getElementById('checkanswer').innerText = "WRONG";
    }
}