var id=document.getElementById("disabledTextInputId");
var password=document.getElementById("disabledTextInputPassword");
var salary=document.getElementById("disabledTextInputSalary");
var email=document.getElementById("disabledTextInputEmail");
var firstName=document.getElementById("disabledTextInputFirstName");
var lastName=document.getElementById("disabledTextInputLastName");
var addBtn=document.getElementById("add");


id.onkeyup=function(){
    var idRejex=/^[0-9]{4,8}$/;
    if(idRejex.test(id.value)){

        id.classList.add("is-valid");
        id.classList.remove("is-invalid");

    }
    else{
        id.classList.add("is-invalid");
        id.classList.remove("is-valid");
    }
}

password.onkeyup=function(){
    var paasRejex=/^[0-9a-zA-Z]{6,17}$/;
    if(paasRejex.test(password.value)){
        password.classList.add("is-valid");
        password.classList.remove("is-invalid");

    }
    else{
        password.classList.add("is-invalid");
        password.classList.remove("is-valid");
    }
}
salary.onkeyup=function(){
    var salaryRejex=/^[0-9]+$/;
    if(salaryRejex.test(salary.value)){
        salary.classList.add("is-valid");
        salary.classList.remove("is-invalid");

    }
    else{
        salary.classList.add("is-invalid");
        salary.classList.remove("is-valid");
    }
}
email.onkeyup=function(){
    var emailRejex=/^[a-z0-9]+@[a-z]+.[a-z]{2,3}$/;
    if(emailRejex.test(email.value)){
        email.classList.add("is-valid");
        email.classList.remove("is-invalid");

    }
    else{
        email.classList.add("is-invalid");
        email.classList.remove("is-valid");
    }
}
firstName.onkeyup=function(){
    var firstnameRejex=/^[a-z.A-Z]+$/;
    if(firstnameRejex.test(firstName.value)){
        firstName.classList.add("is-valid");
        firstName.classList.remove("is-invalid");

    }
    else{
        firstName.classList.add("is-invalid");
        firstName.classList.remove("is-valid");
    }
}
lastName.onkeyup=function(){
    var lastnameRejex=/^[a-z.A-Z]+$/;
    if(lastnameRejex.test(lastName.value)){
        lastName.classList.add("is-valid");
        lastName.classList.remove("is-invalid");

    }
    else{
        
        lastName.classList.add("is-invalid");
        lastName.classList.remove("is-valid");
    }
}
if(idRejex.test(id.value) ){
    addBtn.disabled="false";
}
else{
    addBtn.disabled="true";
}