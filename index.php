<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/javascript.js"></script>
    <link rel="icon" href="image/ddmini.png">
    <title>D&D Mapper</title>
</head>
<body>
  <div class="header">
    <a class="active" href="index.php">Home</a>
    <?php
      if (isset($_SESSION["name"])) {
        echo "<a href='main.php'>Main</a>";
        echo "<a href='includes/logout.inc.php'>LogOut</a>";
      }
    ?>
    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields!</p>";            
      }                        
      elseif ($_GET["error"] == "invalidname") {
        echo "<p>Invalid Username!</p>";
      }
      elseif ($_GET["error"] == "invalidemail") {
        echo "<p>Invalid Email!</p>";
      }
      elseif ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Passwords don't match!</p>";
      }
      elseif ($_GET["error"] == "usernametaken") {
        echo "<p>Username or Email taken!</p>";
      }
      elseif ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, please try again!</p>";
      }
      elseif ($_GET["error"] == "none") {
        echo "<p>You have signed up!</p>";
      }
      elseif ($_GET["error"] == "wronglogin") {
        echo "<p>Invalid LogIn information!</p>";
      }
    }
    ?>
    <div class="headerRight">

      <a onclick="document.getElementById('id01').style.display='block'" href="#">LogIn</a>

      <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content animate" action="includes/login.inc.php" method="POST">
    
          <div class="container">
            <h1>Log In</h1>
            <br>
            <label for="name"><b>Username/Email</b></label>
            <input type="text" placeholder="Enter Username/Email" name="name" required>
    
            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
    
            <button type="submit" name="submit">Login</button>
          </div>
    
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>

      <a onclick="document.getElementById('id02').style.display='block'" href="#">SignUp</a>

      <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content animate" action="includes/signup.inc.php" method="POST">
    
          <div class="container">
            <h1>SignUp</h1>
            <br>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>
      
            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
      
            <label for="pwdrepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pwdrepeat" required>
    
            <button type="submit" name="submit">SignUp</button>
          </div>
    
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
          </div>
        </form>
      </div>

    </div>
  </div>
  
  <div class="main">
    <div class="mainBaner">
      <div class="mainP">
        <h1>Welcome to a new and redefined way of playing D&D online with your friends</h1>
      </div>  
    </div>
  </div>

  <div class="tekst">
    <br>
    <p>D&D Mapper is an online web application that enables the <br> user to upload their own custom drawn or designed maps.</p> <br> <hr> <br>
    <p>There are no upload limits and restrictions! Plus with the ability to change <br> grid sizes, colors and add up to four players there is no limit to the fun.</p> <br> <hr> <br>
    <p>Bellow are a few images to demonstrate how <br> easy it is to get started with the whole process!</p> <br> <hr>
  </div>

  <div id="slider">
		<figure>
			<img src="image/img1.jpg">
			<img src="image/img2.jpg">
			<img src="image/img3.jpg">
			<img src="image/img4.jpg">
			<img src="image/img1.jpg">
		</figure>
	</div>

  <div class="tekst">
    <br>
    <p>Bellow you will see a roadmap of our future plans and developments.</p> <br> <hr>
    <img src="image/roadmap.png" alt="Roadmap">
  </div>

  <div class="social">
    <p>For additional help, you can reach us on all of these platforms!</p>
    <div class="socialLinks">
      <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
      <a href="https://twitter.com/" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
      <a href="https://www.reddit.com/" class="fa fa-reddit"></a>
      <a href="https://discord.com/" class="fa fa-discord">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
          <path d="M6.552 6.712c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888.008-.488-.36-.888-.816-.888zm2.92 0c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888s-.36-.888-.816-.888z"/>
          <path d="M13.36 0H2.64C1.736 0 1 .736 1 1.648v10.816c0 .912.736 1.648 1.64 1.648h9.072l-.424-1.48 1.024.952.968.896L15 16V1.648C15 .736 14.264 0 13.36 0zm-3.088 10.448s-.288-.344-.528-.648c1.048-.296 1.448-.952 1.448-.952-.328.216-.64.368-.92.472-.4.168-.784.28-1.16.344a5.604 5.604 0 0 1-2.072-.008 6.716 6.716 0 0 1-1.176-.344 4.688 4.688 0 0 1-.584-.272c-.024-.016-.048-.024-.072-.04-.016-.008-.024-.016-.032-.024-.144-.08-.224-.136-.224-.136s.384.64 1.4.944c-.24.304-.536.664-.536.664-1.768-.056-2.44-1.216-2.44-1.216 0-2.576 1.152-4.664 1.152-4.664 1.152-.864 2.248-.84 2.248-.84l.08.096c-1.44.416-2.104 1.048-2.104 1.048s.176-.096.472-.232c.856-.376 1.536-.48 1.816-.504.048-.008.088-.016.136-.016a6.521 6.521 0 0 1 4.024.752s-.632-.6-1.992-1.016l.112-.128s1.096-.024 2.248.84c0 0 1.152 2.088 1.152 4.664 0 0-.68 1.16-2.448 1.216z"/>
        </svg>
      </a>
    </div>
  </div>
</body>
</html>