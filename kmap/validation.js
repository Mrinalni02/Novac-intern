
function validateName(){
    const nameInput= document.getElementById('name');
    const nameErr= document.getElementById('nameErr');
    const name=nameInput.value.trim();
    const namePattern= /^[A-Za-z]+$/;

    if(name=== ''){
        nameErr.textContent="Name is required";
    }
    else if(name.length<6){
        nameErr.textContent="Name must have atleast 6 chars long";
    }
    else if(!namePattern.test(name)){
        nameErr.textContent="Name must not have any special chars or numbers";
    }
    else{
        nameErr.textContent= '';
    }
}

function validateLastname(){
    const nameInput= document.getElementById('lname');
    const lnameErr= document.getElementById('lnameErr');
    const lname=nameInput.value.trim();
    const lnamePattern= /^[A-Za-z]+$/;

    if(lname=== ''){
        lnameErr.textContent="Name is required";
    }
    else if(lname.length<6){
        lnameErr.textContent="Name must have atleast 6 chars long";
    }
    else if(!namePattern.test(lname)){
        lnameErr.textContent="Name must not have any special chars or numbers";
    }
    else{
        lnameErr.textContent= '';
    }
}



function validatePhone(){
    const phoneInput= document.getElementById('phone');
    const phoneErr= document.getElementById('phoneErr');
    const phone=phoneInput.value.trim();
    const phonePattern= /^\d{10}$/;

    if(phone=== ''){
        phoneErr.textContent="Number is required";
    }
    
    else if(!phonePattern.test(phone)){
        phoneErr.textContent="Invalid";
    }
    else{
        phoneErr.textContent= '';
    }
}
function validateEmail(){
    const emailInput= document.getElementById('email');
    const emailErr= document.getElementById('emailErr');
    const email=emailInput.value.trim();
    const emailPattern= /^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

    if(email=== ''){
        emailErr.textContent="Email is required";
    }
    
    else if(!emailPattern.test(email)){
        emailErr.textContent="Invalid";
    }
    else{
        emailErr.textContent= '';
    }
}

function validatePassword(){
    const passwordInput= document.getElementById('password');
    const passwordErr= document.getElementById('passwordErr');
    const password=passwordInput.value.trim();
    const passwordPattern= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,}$/;

    if(password=== ''){
        passwordErr.textContent="Password is required";
    }
    else if(password.length<6){
        passwordErr.textContent="Password must have atleast 6 chars long";
    }
    else if(!passwordPattern.test(password)){
        passwordErr.textContent="Password must be atleast one letter one numberand one special chars";
    }
    else{
        passwordErr.textContent= '';
    }
}

function validateGender(){
    const genderSelect= document.getElementById('gender');
    const genderErr= document.getElementById('genderErr');
    const gender=genderSelect.value;


if(gender !== ''){
    genderErr.textContent='';
}else{
    genderErr.textContent='Select a gender';
}
}

function validateComment(){
    const commentInput=document.getElementById('comment');
    const commentErr=document.getElementById('commentErr');
    const comment=commentInput.value;

    if(comment.length>=5){
        commentErr.textContent='';
    }else if(comment.length===0){
        commentErr.textContent='Comment is required';
    }else{
        commentErr.textContent='Comment must be atleast 5 chars long';
    }
}

$(document).ready(function(){
    $('#myform').submit(function(e){
        e.preventDefault();
        
        var form = $(this);
        var actionUrl = form.attr('action');
        
        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form.serialize(),
            dataType: "json",
            success:function(data){
                // Process with the response data
            }
        });
    });
});