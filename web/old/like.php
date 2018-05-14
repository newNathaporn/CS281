<?php
  
  session_start();
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
  $id_product = $_GET['id_product'];
  if($id_product == -1){
    echo "<script>alert('กรุณาใส่ username และ password ของท่านด้วยครับ/ค่ะ'); window.location='index.php'</script>";
    exit(); 
  }
  $like_name = $_GET['item_name'];
  $like_price = $_GET['price'];
  $username = $_GET['username'];
  $lastname = $_GET['lastname'];
  $brand = $_GET['brand'];
  
    $sql = "INSERT INTO likeproduct (like_id ,like_name, like_price ,name_user ,lastname , brand)
  VALUES ('$id_product' ,'$like_name', '$like_price' , '$username' , '$lastname' , '$brand')";

 if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $m = $_SESSION["url"];
 header("location:$m");
  $conn->close();
  $_SESSION['name'] = $username ;
?>
