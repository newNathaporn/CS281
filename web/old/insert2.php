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

$add_brand = $_POST['name_brand'];
$add_name = $_POST['name'];
$add_price = $_POST['price'];
$add_sale = $_POST['sale'];
$add_detail = $_POST['detail'];
$add_qty = $_POST['qty'];
$image = $_FILES['image']['name'];

$sql = "INSERT INTO product(name_brand,name,price,sale,detail,qty,image)
VALUES ('$add_brand','$add_name','$add_price','$add_sale','$add_detail','$add_qty','$image')";
// mysqli_query($conn , $sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location:index.php");

$conn->close();
?>
