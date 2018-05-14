<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs281";
session_start();
// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["search"])){

		$keyword = $_POST["search"];
		$sql = "SELECT * FROM `product` WHERE `name` LIKE '%$keyword%'";


    $resultArray = array();
	  $run_query = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($run_query)){
    array_push($resultArray,$row);
   }
   $_SESSION["arraysearch"] = $resultArray;
   header("location:Search.php");
}
?>
