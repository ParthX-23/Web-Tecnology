let questions = {
    "What is the capital of India?": "Delhi",
    "What is 5 + 3?": "8",
    "What is the chemical symbol for gold? ":"Au",
    "What gas do plants absorb from the air?" : "Carbon Dioxide",
    "What is the hardest natural substance on Earth?": " Diamond",
    "What part of the cell contains genetic material?" : "Nucleus" , 
    "What planet is known as the Red Planet?" : "Mars"
};

let score = 0;

for (let question in questions) {
    let answer = prompt(question);
    if (answer.toLowerCase() === questions[question].toLowerCase()) {
        score++;
    }
}

alert(`Your final score is: ${score}/${Object.keys(questions).length}`);
