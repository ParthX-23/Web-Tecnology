let userScore=0;
let ComputerScore=0;
// Add image
let rock="rock.png";
let scissors="Scissors.png";
let paper="paper.png";
// Access all the choices
 const choices=document.querySelectorAll(".choice");

// Access all the massage box
const msg=document.querySelector("#msg");

// Access user score
 const userScorePara=document.querySelector("#User_score");

// Access computer  score
const computerScorePara=document.querySelector("#computer_score");




// create a function for computer generate random choice
  const genComChoice=()=>{
    // rock ,paper , scissors
    const option=["rock","paper","scissors"];
    // Math.random()   Alweys  generate a random number between 0 to 1
    //  Math.floor.random() --->floor will be remove decimal value
    const randIdx=Math.floor(Math.random()*3); //(Math.random()*3) will generate random number 0 to 2;

    return option[randIdx];
  }
// create a function for draw the game
const  drawGame=()=>{
    console.log("Game was draw")
    msg.innerText="Game Was Draw ! Play again.";
    msg.style.backgroundColor="#1D1616";
}

// create a function to deleare which will be win
const showWiner=(userWin,userChoice,comChoice)=>{ 
    if (userWin){
        userScore++;
        userScorePara.innerText= userScore;
        console.log("you win");
        msg.innerText=`You Win! your ${userChoice} beats ${comChoice} `;
        msg.style.backgroundColor= "#1F7D53";
    }else{
        ComputerScore++;
        computerScorePara.innerText=ComputerScore;
        console.log("you lose");
        msg.innerText=`You Lose, computer ${comChoice} beats your ${userChoice} `;;
        msg.style.backgroundColor="#8E1616";
    }
 }
// create a function for play the game
const playGame=(userChoice)=>{
    console.log("User choice = ",userChoice);
    // call the computer choice function
    const comChoice= genComChoice();
    console.log("Computer choice =",comChoice);

    if(comChoice===userChoice){
        // Draw game
        drawGame();
    }
    else{
        let userWin=true;
        if(userChoice==="rock"){
            // computer choice will be paper or scissors
            userWin=comChoice==="paper"?false:true;
        }
        else if(userChoice==="paper"){
            // computer choice will be rock or scissors
            userWin= comChoice==="scissors"?false:true;

        }
        else{
            // user choice will scissors
            // computer choice rock or paper
            userWin=comChoice==="rock"?false:true;
        }
        showWiner(userWin,userChoice,comChoice);
    }
}
 choices.forEach((choice)=>{
    choice.addEventListener("click",()=>{
        const userChoice=choice.getAttribute("id"); 
       
        playGame(userChoice);
    })
 });


//  raf



//  Access Your choice div
const yourChoicediv=document.querySelector(".userChoice");
// Access computer choice div

const comChoice=document.querySelector(".comChoice");


