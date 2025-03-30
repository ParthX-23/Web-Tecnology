// for Question 1
let num =prompt("Enter a number:");
    num-parseInt(num);
  
let tableBody=document.querySelector("#mTable tbody");

// if(num===""||isNaN(num)){
//     alert("Please Enter a valid number!");
//     return;

// }    
// Clear privious table data
tableBody.innerHTML=" ";
// Run a loop for fill data in tbody
for(let i=1;i<=10;i++){
    let row=document.createElement("tr");
    row.innerHTML=`<td> ${num} X ${i}</td><td>${num*i}</td>`;
    tableBody.appendChild(row);
}

