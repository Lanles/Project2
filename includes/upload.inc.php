<?php

session_start();

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            $fileNameNew = uniqid('', true).".".$fileActualExt;
            $fileDestionation = '../uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName, $fileDestionation);
            require_once 'dbh.inc.php';
            $sql = "INSERT INTO profileimg (userid, imgname) VALUES (? , ?);";
            $stmt = mysqli_stmt_init($conn);
            mysqli_stmt_prepare($stmt, $sql);
            mysqli_stmt_bind_param($stmt, "is", $_SESSION["userid"] , $fileNameNew);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../main.php?uploadsuccess");
        }
        else {
            echo "There was an error uploading your file!";
        }
    }
    else {
        echo "You cant upload files of this type!";
    }
}