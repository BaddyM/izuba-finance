//When the mouse is hovered on element
var sub = document.getElementById("sub-menu");
//var main = document.getElementById("main-menu");

function hovered(){
    if(sub.style == 'none'){
        sub.style = 'block';
    }else{
        sub.style = 'none';
    }
}

//Loan Calculator
const loan = document.getElementById("loan-calc");

function minus(){
    let x;

    for(x = 0;x<0;x--){
        loan = x;
    }
}