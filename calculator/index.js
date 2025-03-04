const display = document.getElementsByClassName("disp")

function addVal(bton){
    let val = bton.value;
    display.value=val;
    console.log(val);
}