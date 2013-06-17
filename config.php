<?php
//datalogin.php sign in info for simon below
$formdatausername = "admin";
$formdatapassword =  "password";

//DB settings below
$con = mysqli_connect("localhost", "transferstation", "Manyunk22!", "transferstation");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>