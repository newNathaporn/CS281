<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs281";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['item_id'];

// sql to delete a record
$sql = "DELETE FROM cart WHERE IdProduct = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
    header("Location:CartShow.php");
?>
