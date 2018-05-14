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
$id = $_GET['id'];
$username = $_GET['username'];
// sql to delete a record
$sql = "DELETE FROM likeproduct WHERE like_id = $id AND name_user = '$username'";
if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
header("location:likeShow.php");
$conn->close();

?>
