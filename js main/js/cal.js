function addNumbers() {
     
    var num1 = parseFloat(document.getElementById('num1').value);
    var num = document.getElementById("num").value;
    var num2 = parseFloat(document.getElementById('num2').value);
    var result;

    switch(num){
        case "+":
            result=num1+num2;
            break;

            case "-":
            result=num1-num2;
            break;

            case "*":
            result=num1*num2;
            break;

            case "/":
            result=num1/num2;
            break;

            case "%":
            result=num1%num2;
            break;

            default:
                result="Invalid operator";
    }



    
    
    document.getElementById('result').innerHTML = 'The result is:' + result;
}