<?php

if (isset($_POST["submit"])) {

    $username = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $email, $pwd, $pwdRepeat) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    if (invalidName($username) !== false) {
        header("location: ../index.php?error=invalidname");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../index.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../index.php?error=passwordsdontmatch");
        exit();
    }
    if (nameExists($conn, $username, $email) !== false) {
        header("location: ../index.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $pwd);

}
else {
    header("location: ../index.php");
    exit();
}