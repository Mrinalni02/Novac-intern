
var count=0;
var counthis=[];
function increaseCount(button){
        count+=1;
    
    document.getElementById("count").innerText=count;
   
}

// count=0;
function saveCount(){
   
    var a="-" +count; 
    
    document.getElementById("result").innerText+= a;
    count=0;
    document.getElementById("count").innerText=count;
}



