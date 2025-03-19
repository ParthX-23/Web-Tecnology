// for Question 2
let randomNumber = Math.floor(Math.random() * 10) + 1;
let guess;

while (true) {
    guess = prompt("Guess a number between 1 and 10:");
    if (parseInt(guess) === randomNumber) {
        alert("Correct! You guessed the right number.");
        break;
    } else {
        alert("Try again!");
    }
}