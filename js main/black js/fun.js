let randomArray=[];
let sum=0;

document.getElementById('generateBtn').addEventListener('click', () =>{
    const randomvalue1= Math.floor(Math.random()*13)+1; 
    const randomvalue2= Math.floor(Math.random()*13)+1; 
    randomArray =[randomvalue1 ,randomvalue2];
    sum=randomvalue1+randomvalue2;
    document.getElementById('demo1').innerText='values: ${randomArray.join(', ')}, sum: ${sum}';  
});

document.getElementById('addBtn').addEventListener('click',() =>{
    const randomvalue=Math.floor(Math.random()*13)+1; 
    randomArray.push(randomvalue);
    sum+=randomvalue;

    if(sum===21){
        document.getElementById('output').innerText='values: ${randomArray.join(',')}, sum: ${sum}. you won!';
    }
    else if(sum<21){
        document.getElementById('output').innerText='values: ${randomArray.join(',')}, sum: ${sum}';
    }
    else{
        document.getElementById('output').innerText='values: ${randomArray.join(',')}, sum: ${sum}. you lost!'; 
    }
});
