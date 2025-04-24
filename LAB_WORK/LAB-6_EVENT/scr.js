
// *******Validation the form element********

// Access the form
let form=document.querySelector(".form1");

// Validating Empty field
// Access the the text box

let inputs = document.querySelectorAll(".input_box"); 
form.addEventListener("submit", (evt) => {
   
    let boxFill=false;
    inputs.forEach((input) => {
        
        if (input.value.trim() === "") {  // Check if any input is empty
           boxFill=true;
         
        }
       
    });
    if(boxFill){
        evt.preventDefault(); // Prevent form submission
        alert("Form submission prevented! All fields must be filled.");
    }
});

// Add event in password fild
// passWord validation
let pass=document.querySelector("#password");
let msg=document.querySelector("#passMsg");
let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
// for input
pass.addEventListener("input", () => {
    if (passwordPattern.test(pass.value)) {
        msg.textContent = "✅ Strong password!";
        msg.style.color = "green";
    } else {
        msg.textContent = "❌ Password must be at least 8 characters long, with uppercase, lowercase, number, and special character.";
        msg.style.color = "red";
    }
});

// valid the conform password
let confPass=document.querySelector("#confpass");
let conPassMsg=document.querySelector("#conPassMsg");
confPass.addEventListener("input",()=>{
    if(pass.value === confPass.value){
        conPassMsg.textContent="✅ Password Match!";
        conPassMsg.style.color="green";
    }else{
        conPassMsg.textContent="❌ Password did not Match!";
        conPassMsg.style.color="red";
    }
});

form.addEventListener("submit",(evt)=>{
    // frevent the form if password field is worng
    if(!passwordPattern.test(pass.value)){
        evt.preventDefault();
       alert("Form submit prevented");
       
       }
       // prevent the form if conform password is does not match
    else if(!pass.value===confPass.value){
     evt.preventDefault();
    alert("PassWord doesnot match");
    }

 });
// Add event in Email section 
// Email validation
let email = document.querySelector("#email");
// Access the email meggage box
let eMsg = document.querySelector("#eMsg");

let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
// for input
email.addEventListener("input", () => {
    if (emailPattern.test(email.value)) {
        eMsg.textContent = "✅ Email is valid!";
        eMsg.style.color = "green";
    } else {
        eMsg.textContent = "❌ Email is not valid";
        eMsg.style.color = "red";
    }
});
// frevent the form if Email  field is worng
form.addEventListener("submit", (evt) => {
    if (!emailPattern.test(email.value)) { // Validate email format
        evt.preventDefault();
        alert("Invalid email format! Please enter a valid email.");
    }
});
// Add Event in phone number field
// phone number validation
// Access phone input box

let phone=document.querySelector("#phone");
// Access phone message 
let pMsg=document.querySelector("#pMsg");
let phonePattern = /^[6-9]\d{9}$/; // Indian 

// for input 
phone.addEventListener("input", () => {
    if (phonePattern.test(phone.value)) {
        pMsg.textContent = "✅ Valid phone number!";
        pMsg.style.color = "green";
    } else {
        pMsg.textContent = "❌ Invalid phone number! Must be 10 digits and start with 6-9.";
        pMsg.style.color = "red";
    }
});

form.addEventListener("submit", (evt) => {
    if (!phonePattern.test(phone.value)) {
        evt.preventDefault();
        alert("Invalid phone number! Please enter a correct format.");
    }
});