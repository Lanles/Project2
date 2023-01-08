<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/javascript.js"></script>
    <link rel="icon" href="image/ddmini.png">
    <title>D&D Mapper</title>
</head>
<body>
    <div class="header">
        <a href="index.php">Home</a>
        <a class="active" href="main.php">Main</a>
        <a href="includes/logout.inc.php">LogOut</a>
        <?php
          echo "<p class='headerRight'>Welcome back " . $_SESSION["name"] . "!</p>";
        ?>
    </div>
    <div class="side">
        <p class='text'>Add players:</p>
        <input type="button" class="add" value="Player 1" onclick="addNew()">
        <input type="button" class="add" value="Player 2" onclick="addNew1()">
        <input type="button" class="add1" value="Player 3" onclick="addNew2()">
        <input type="button" class="add1" value="Player 4" onclick="addNew3()">
        <div id="mydiv">
        </div>
        <div id="mydiv1">
        </div>
        <div id="mydiv2">
        </div>
        <div id="mydiv3">
        </div>
        <p class="text2">Change grid size:</p>
        <input type="button" class="plus" value="Smaller Grid" onclick="biggerButt()">
        <input type="button" class="normal" value="Default Grid" onclick="normalButt()">
        <input type="button" class="minus" value="Bigger Grid" onclick="smallerButt()">
        <p class="text3">Change grid color:</p>
        <input type="button" class="black" value="Black" onclick="black()">
        <input type="button" class="lime" value="Lime" onclick="lime()">
        <input type="button" class="aqua" value="Aqua" onclick="aqua()">
        <input type="button" class="red" value="Red" onclick="red()">
        <div class="ad"><a href="https://www.nike.com/gb/"><img src="image/ad.jpg" alt="ad" width="115" height="600"></a></div>
        <input type="button" class="donate" value="Donate!" onclick="document.location='https://www.buymeacoffee.com/'">
    </div>
    <div class="center">
      <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data" >
        <div class="form-input">
          <label for="file-ip-1">Upload Image</label>
          <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="file">
          <div class="grid">
            <img id="file-ip-1-preview">
          </div>
            <button type="submit" name="submit">Save Image</button>
        </div>
      </form>
    </div>

    <div class="savedImg">
      <br>
      <button onclick="rollD()">Roll D20</button>
      <div id="die1" class="dice">0</div>
      <?php
        require_once 'includes/dbh.inc.php';
        $sql = "SELECT * FROM profileimg WHERE userid = ? ORDER BY id DESC;";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "i", $_SESSION["userid"] );
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($resultData);
        $fileName = $row["imgname"];
        mysqli_stmt_close($stmt);
        
        echo "<a href=\"uploads/". $fileName ."\" download><img class='littleImg' src=\"uploads/". $fileName ."\"></a>";
      ?>
      <br>
    </div>
    <script src="js/drag.js"></script>
</body>
</html>