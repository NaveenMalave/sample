<?php
$sitename = $_POST['txtname'];
$username = $_POST['txtuname'];
$email = $_POST['txtemail'];
$pass = $_POST['txtpass'];
$db_conn = mysqli_connect("sql200.infinityfree.com", "sql200.infinityfree.com", "vy9U3ar6Tx", "if0_34999130_npasswords");
if ($db_conn == false)
    echo "Database Connection Error";
else {
    $query = "INSERT INTO mnaveen(sitename, username, emailid, 
passwords) 
values('$sitename','$username','$email','$pass')";
    if (mysqli_query($db_conn, $query)) {
        echo "Data Inserted Safely.";
        echo "<a href='insert.html'>Insert one more record</a>";
        echo "<a href='view.php'>view data</a>";
    } else
        echo "Data insertion failed.";
}
?>
<a href="logout.php">Log Out</a>