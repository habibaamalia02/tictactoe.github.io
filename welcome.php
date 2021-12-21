<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>TicTacToe</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> <b>TicTacToe.game</b></a>
      </div>
      <div class="logout">
        <a href="logout.php">Logout</a>
      </div>
      <button onClick="startGame()">Replay</button>
    </nav>
    <div class="container-welcome">
        <div class="welcome-text">
            <?php echo "<h1>Selamat Datang " . $_SESSION['username'] . "</h1>"; ?>
        </div>

        <?php
        include ("koneksi.php");
        ?>
    </div>
    <table>
        <tr>
            <td class="cell" id="0"></td>
            <td class="cell" id="1"></td>
            <td class="cell" id="2"></td>
        </tr>
        <tr>
            <td class="cell" id="3"></td>
            <td class="cell" id="4"></td>
            <td class="cell" id="5"></td>
        </tr>
        <tr>
            <td class="cell" id="6"></td>
            <td class="cell" id="7"></td>
            <td class="cell" id="8"></td>
        </tr>
    </table>
    <div class="endgame">
        <div class="text"></div>
    </div>
    <div class="selectSym">
        <p>Select symbol:</p>
        <button onClick="selectSym('X')">X</button>
        <button onClick="selectSym('O')">O</button>
    </div>
    <script src="script.js"></script>
</body>
</html>