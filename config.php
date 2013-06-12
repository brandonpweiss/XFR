<?php
$con = mysqli_connect("localhost", "root", "password", "xfr");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>