

// let username = document.querySelector('.register_form input[name=username]');
// if(username) 
//     username.addEventListener("mouseleave", checkUsername, false);

let password = document.querySelector('.register_form input[name=password]');
// if(password)
//     password.addEventListener("input", checkPassword, false);

let confirm_password = document.querySelector('.register_form input[name=repeatpassword]');
 if(confirm_password)
   confirm_password.addEventListener('submit', validatePassword,false);

// let email = document.querySelector('.register_form input[name=email]');
// if(email)
//     confirm_password.addEventListener("input", checkEmail,false);

// function checkUsername(){
    
//     let regex_username = /^[A-z0-9_-]{6,15}$/;

//     if(!regex_username.test(username))
//         alert("Invalid username, please enter a username within 6-15 characters and with only letters, numbers, _ or -");
// }


// function checkPassword(){

//     let regex_password = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_-]).{7,}$/;

//     if(!regex_password.test(password))
//         alert("Invalid username, please enter a username within 6-9 characters and with only letters, numbers, _ or -") ;
// }

// function checkConfirmPassword(){
//     if(password.nodeValue !== confirm_password.nodeValue) 
//        alert("The password must be the same!");
// }

// function checkEmail(){
//     var regex_email= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

//     if(!regex_email.test(email))
//         alert("Must enter a valid email");
// }

function validatePassword(){
    if(password.value !== confirm_password.value) 
       alert("The password must be the same!");
    

}