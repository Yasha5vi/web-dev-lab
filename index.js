function convert(s){
    let ns = "";
    for(let i=0;i<s.length;i++){
        const char = s[i];
        if(char >= 'a'){
            ns+=char.toUpperCase();
        }else{
            ns+=char.toLowerCase();
        }
    }
    return ns;
}

let s = "aBcDeFgH"
let new_s = convert(s);
console.log(new_s);
