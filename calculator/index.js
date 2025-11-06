const display = document.getElementById("display")

let num1 = 0,num2 = 0;
let f = 0;
let op;
let res = 0;

function addVal(bton){
    console.log(bton.value);
    if(bton.value === '=') display.value = eval(display.value);
    else display.value += bton.value;
}


function addValTemp(bton){
    let val = bton.value;
    console.log(Number(val));
    if(val == '+' || val == '-' || val == '*' || val == '/'){
        f = 1;
        op = val;
    }
    else if(Number(val) >= 0 && Number(val) <= 9 && !f){
        num1 = num1*10+Number(val);
        display.innerHTML = num1;
    }
    else if(Number(val) >= 0 && Number(val) <= 9 && f){
        num2 = num2*10+Number(val);
        display.innerHTML = num2;
    }else if(val == '='){
        if(op == '+')   res = num1+num2;
        else if(op == '-')  res = num1-num2;
        else if(op == '*')  res = num1*num2;
        else res = num1/num2;
        display.innerHTML = num1+' '+op+' '+num2+' = '+res;
    }else{
        num1 = 0;
        num2 = 0;
        f = 0;
        display.innerHTML = "";
    }
    console.log(val);
}