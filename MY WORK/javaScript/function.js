// Normal function
function sum(a,b){
    return a+b;

}
let value=sum(4,6);
console.log(value);
// Arrow function
const arrowSum=(a,b)=>{
    return a*b;
}
let result=arrowSum(4,7);
console.log(result);

// create a function to count voule of a string
function countVaule(str){
    let count=0;
    for(const char of str){
        if(char==="a"||char==='e'||char==='i'||char==='o'||char==='u'){
            count++;
        }
    }
    console.log(count);
}
// function call
countVaule("partha");
// console.log(result);

// create arrow function to purform  same task
 const arrCountVaule = (str)=>{
    let count=0;
    for(const char of str){
        if(char==="a"||char==='e'||char==='i'||char==='o'||char==='u'){
            count++;
        }
    }
    console.log(count);
}
// function call
arrCountVaule("partha gayen");

// forEach loop for array
let arr=[1,2,3,4,5,6,7,8];
arr.forEach(function printval(val){
    console.log(val)
});
// PQ-1:
console.log("Square of a numver");
arr.forEach((value)=>{
    
    console.log(value**2);
})

