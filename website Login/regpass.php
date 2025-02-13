<?php
$uname = $_POST["txtUname"];
$Passwrd = $_POST["txtPwd"];
if (($uname == "mnaveen") && ($Passwrd == "naveen@2002")) {
    echo "valid user";
    session_start();

    header("location: view.php");
} else {
    echo "Invalid Details";
    //header("location:pass.html");
}
?>