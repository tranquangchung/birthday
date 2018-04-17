function sendEmail() {
    Email.send("bktranquangchung@gmail.com",
        "john@trueplus.vn",
        "LEVEL 3",
        "DONE",
        "smtp.elasticemail.com",
        "bktranquangchung@gmail.com",
        "3998425e-8a0d-4f96-be6f-f5f82a354c18");
}

function load_cirphertext() {
    month_key=4;
    plaintext = "happy birthday to you! wishing you have a day filled with fun and delight!";
    plaintext_array =  plaintext.split("");
    cirpher_array =  plaintext.split("");
    punctuation = ['!', '', ' '];

    // encryption

    anphabet = "abcdefghijklmnopqrstuvwxyz";
    anphabet_array = "abcdefghijklmnopqrstuvwxyz".split("");
    anphabet_dict = {};
    for(var i=0; i<anphabet_array.length; i++){
        anphabet_dict[anphabet_array[i]] = i;
    }
    for(var i=0; i < plaintext_array.length; i++){
        if(!punctuation.includes(plaintext_array[i])){
            index = anphabet_dict[plaintext_array[i]];
            c0 = anphabet_array[(index+month_key)%26];
            cirpher_array[i] = c0;
        }
    }
    document.getElementById('cirphertext').innerText = cirpher_array.join('')
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