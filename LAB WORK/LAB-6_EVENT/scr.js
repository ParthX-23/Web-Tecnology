// Access the form
let form=document.querySelector(".form1");
//1. Apply event for defalut prevent form submit

// form.addEventListener("submit",(evt)=>{
//     evt.preventDefault();
//     alert("Form submit prevented");
// });


// 2.Validating Empty field
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
let pass=document.querySelector("#password");
let passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

form.addEventListener("submit",(evt)=>{
        if(!passwordPattern.test(pass)){
         evt.preventDefault();
        alert("Form submit prevented");
        }
     });