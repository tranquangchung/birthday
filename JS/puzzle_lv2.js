function swapchacter(str_swap_array, c0, c1) {
    for(var i=0;i<str_swap_array.length;i++){
        if(str_swap_array[i]===c0){
            str_swap_array[i]=c1;
            continue;
        }
        if(str_swap_array[i]===c1){
            str_swap_array[i]=c0;
        }
    }
    return str_swap_array
}

function checkpercent() {
    // console.log(str_swap_array_true);
    // console.log(str_swap_array);
    var count=0;
    for(var i=0; i < str_swap_array_true.length; i++){
        if(str_swap_array_true[i] === str_swap_array[i]){
            count++;
        }
    }
    var percent = Math.floor(count/(str_swap_array_true.length) * 100);
    document.getElementById("process").innerHTML = percent;
    if(percent===100){
        var next = document.getElementById("nextpage");
        var btn = document.createElement("BUTTON");
        var t = document.createTextNode("Next Challenge");
        btn.appendChild(t);
        next.appendChild(btn);
    }
}

function swap(str_swap_array) {
    anphabet = "abcdefghijklmnopqrstuvwxyz";
    for (var i=0; i<10;i++){
        rd0 = i;
        rd1 = Math.floor(Math.random() * 26);
        c0 = anphabet[rd0];
        c1 = anphabet[rd1];
        str_swap_array = swapchacter(str_swap_array, c0, c1);
    }
    return str_swap_array
}

function show() {
    var c0 = document.getElementById("swap0").value;
    var c1 = document.getElementById("swap1").value;
    if(c0.length===1 && c1.length===1) {
        str_swap_array = swapchacter(str_swap_array, c0, c1);
        document.getElementById("puzzle").innerHTML = str_swap_array.join('');
        checkpercent();
    }else {
        alert("Wrong Input");
    }

}