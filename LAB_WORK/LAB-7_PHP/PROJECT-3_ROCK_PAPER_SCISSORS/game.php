<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock paper Scissors</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav>
           <h1>Rock Paper Scissors</h1>
        </nav>

    </header>
    <main>
       
        <div class="choices">
            <div class="choice" id="rock">
                <img src="rock.png" alt="rock" >
            </div>
            <div class="choice" id="paper">
                <img src="paper.png" alt="paper">
            </div>
            <div class="choice" id="scissors">
                <img src="scissors.png" alt="scissors">
            </div>
        </div>
        <!-- score board -->
         <div class="score_board">
            <div class="score">
                <p id="User_score">0</p>
                <p>User</p>
            </div>
            <div class="score">
                <p id="computer_score">0</p>
                <p>Computer</p>
            </div>
         </div>
         <!-- massage result -->
          <div class="msg_container">
            <p id="msg">Play Your Move</p>
          </div>

          <script src="G_script.js"></script>
    </main>
    
</body>
</html>