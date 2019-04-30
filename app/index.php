<h1> Actor Database </h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$page = $_GET['page'];
if ($page === null) {
    $page = 1;
}
// Create connection
$conn = new mysqli($servername, $username, $password, "sakila");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($result = $conn->query("SELECT * FROM actor WHERE actor.actor_id = $page")) {
    echo '<table style="width:100%">';
    while (($rows = $result->fetch_assoc()) !== null) {
        echo '<tr>';
        foreach($rows as $row) {
            echo '<td>';
            echo $row;
            echo '</td>';
        }
        echo '</tr>';
    }
    /* free result set */
    $result->close();
    echo '</table>';
} else {
    echo("Error description: " . mysqli_error($conn));
}
?> 
<?php
    if (is_numeric($page)) {
        $newPage = $page + 1;
    } else {
        $newPage = "";
    }

    echo '<a href=/?page='. $newPage . '><input type="button" value="next page" name="s"></a>';
?>