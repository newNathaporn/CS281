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
if(!isset($_SESSION['id_user'])){
    echo "<script>alert('กรุณาใส่ username และ password ของท่านด้วยครับ/ค่ะ'); window.location='index.php'</script>";
    exit(); 
}
 $name = $_POST['id_name'];

 $nameproduct = $_POST['item_name'];
 $price = $_POST['amount'];
 $num = $_POST['num'];

 $idpro = "";
 $sql = "SELECT * FROM cart" ;
 $result = $conn->query($sql);
 while($row = mysqli_fetch_assoc($result)) {
     if($name === $row["username"] && $row["Name"]  === $nameproduct){
        $num = $num + $row["amount"];
        $idpro = $row["IdProduct"];
     }
 }
  
    if($num > 1){
        $sql = "UPDATE cart SET amount=$num WHERE IdProduct=$idpro";
    }else {
        $sql = "INSERT INTO cart(username , Name , price , amount) VALUES('$name','$nameproduct','$price', $num)";
    }

 if ($conn->query($sql) === TRUE) {
     header("Location:CartShow.php");
 } else {
     echo "Error: " . $conn->error;
 }

 ?>
