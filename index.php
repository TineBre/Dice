<!DOCTYPE html>
<html>

<head>
    <title>Dice</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="images/dice.png">
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <h1>DICE</h1>

    <div id="game">
        <form action="game.php" name="forma" method="post">
            <div id="igralci">
                <label for="numPlayers">NUMBER OF PLAYERS:</label>
				<br>
                <select name="numPlayers" id="numPlayers" class="a" onchange="generatePlayerFields()">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div id="playerFields">
                
            </div>
            <div id="izbira">
                NUMBER OF DICE
				<br>
                <select name="stkock" class="a">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <br />
                <input type="submit" class="gumb" onClick="return isEmpty()" name="igraj" value="PLAY" />
            </div>
        </form>
    </div>

    <img id="diceLeva" src="images/Dice.png" alt="diceLeva">

    <div class="diceDesno">
        <img id="diceDesno" src="images/Dice.png" alt="diceDesna">
    </div>

</body>

</html>