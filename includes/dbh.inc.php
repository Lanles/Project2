<?php

$serverName = "sql108.epizy.com";
$dBUsername = "epiz_28056958";
$dBPassword = "YBJ0ABkYWc20j";
$dBName = "epiz_28056958_login_nik";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}