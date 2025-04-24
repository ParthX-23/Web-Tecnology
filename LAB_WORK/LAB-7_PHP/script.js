let loginBtn=document.querySelector("#login_button");
loginBtn.addEventListener("click", ()=>{
    window.location.href="login_Page/login.php";
});
let applicationBtn =document.querySelector("#applicationButton");
applicationBtn.addEventListener("click", ()=>{
    window.location.href="Application_Form/form.php";
});   

let armStr=document.querySelector("#arm_button");
armStr.addEventListener("click",()=>{
    window.location.href="Armstrong_Number/armInput.php"
});
let ageBtn=document.querySelector("#age_button");
ageBtn.addEventListener("click",()=>{
    window.location.href="Age_Calculators/ageCalculator.php"
});
let gameBtn=document.querySelector("#gbutton");
gameBtn.addEventListener("click",()=>{
    window.location.href="PROJECT-3_ROCK_PAPER_SCISSORS/game.php";
});
let gretestBtn=document.querySelector("#gretest_button");
gretestBtn.addEventListener("click",()=>{
    window.location.href="Gretest_number/gretestNumber.php";
});