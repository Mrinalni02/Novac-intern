let randomvalue1= Math.floor((Math.random()*13)+1);
let randomvalue2=Math.floor((Math.random()*13)+1);
let randomArr=[randomvalue1,randomvalue2];

let total=0;
let blackjack=true;
let isalive=false;
function randomfunction(){
    
    for(let i = 0; i<randomArr.length; i++){
        total+=randomArr[i];
        document.getElementById("demo1").innerHTML += " " +randomArr[i];
    }
    document.getElementById('total').innerText=total;
    

        if(total>21){
           document.getElementById('word').innerText="lost";
           isalive=true;
           blackjack=false;
        }
        else if(total===21){
        document.getElementById('word').innerText="win";
        isalive=true;
        blackjack=false;
        }
        else{
        document.getElementById('word').innerText="add";
    }
}
function addvalue(){
    if(isalive===false && blackjack===true){
    var randomvalue= Math.floor((Math.random()*13)+1);
    randomArr.push(randomvalue);
    document.getElementById("demo1").innerHTML = [];
    total=0;
    randomfunction();
}}

