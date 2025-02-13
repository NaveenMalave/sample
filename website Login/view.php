<?php
$db_conn = mysqli_connect("sql200.infinityfree.com", "if0_34999130", "vy9U3ar6Tx", "if0_34999130_npasswords");
if ($db_conn == false)
    echo "DB Connection Error";
else {
    $query = " SELECT *
FROM mnaveen ";
    $result = mysqli_query($db_conn, $query);
    $recCount = mysqli_num_rows($result);
    if ($recCount > 0) {
        echo "<table border='2px'>";
        echo "<tr><th>sitename</th><th>username</th>
<th>emailid</th><th>passwords</th>
</tr>";
        while ($r = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $r["sitename"] . "</td>";
            echo "<td>" . $r["username"] . "</td>";
            echo "<td>" . $r["emailid"] . "</td>";
            echo "<td>" . $r["passwords"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No Data Found with this Aadhaar Number.";
    }
    mysqli_close($db_conn);
}
?>
<a href="logout.php">Log Out</a>
<a href="insert.html">Insert Data</a>