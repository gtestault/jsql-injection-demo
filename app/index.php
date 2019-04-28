<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "sakila");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
if ($result = $conn->query("SELECT * FROM actor LIMIT 10")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* free result set */
    $result->close();
}
?> 

<form action="" method="post">
<table width="50%">
    <tr>
        <td>User</td>
        <td><input type="text" name="user"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="text" name="password"></td>
    </tr>
</table>
    <input type="submit" value="OK" name="s">
</form>