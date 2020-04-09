<form method="GET">
    <input type=text name=input>
    <input type=submit name=submit value="submit">
</form>

<?php
$server = "localhost";
$username= "katy";
$password="password";
$myDB= "security";

$con=mysqli_connect($server, $username, $password, $myDB);

if (mysqli_connect_error())
    echo "Failed to connect to the database: " . mysqli_connect_error();

if (isset($_GET["submit"])){
   $result=mysqli_query($con, "SELECT * FROM users WHERE firstname LIKE '" . $_GET['input'] . "' AND active LIKE 1"); 
    echo "<table border='2' cellspacing='10'>
    <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
mysqli_close($con);

?>
