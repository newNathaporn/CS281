<?php 


class Addtable
{
    public static function addCartToTable($conn, $id_name, $idproduct_name, $num)
    {
        $idpro = "";
        $sql = "SELECT * FROM cart";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($id_name === $row["name_user"] && $row["idcart_product"] === $idproduct_name) {
                $num = $num + $row["amount"];
                $idpro = $row["idcart_product"];
            }


        }
        if ($num > 1) {
            $sql = "UPDATE cart SET amount=$num WHERE idcart_product=$idpro AND name_user = $id_name";
        } else {
            $sql = "INSERT INTO cart(idcart_product , name_user , amount) VALUES('$idproduct_name','$id_name', '$num')";
        }
        if ($conn->query($sql) === true) {
            header("Location:../CartShow.php");
        } else {
            echo "Error: " . $conn->error;
        }
        $conn->close();
    }


    public static function deleteCart($conn, $index, $user, $status)
    {
        $sql = "DELETE FROM cart WHERE idcart_product = '" . $index . "' AND name_user = '" . $user . "' AND status = 0";
        $conn->query($sql);
        $conn->close();
    }



    public static function addLikeToTable($conn, $id_product, $username)
    {
        $sql = "INSERT INTO likeproduct (likeid_product ,name_user)
            VALUES ('$id_product' , '$username')";
        if ($conn->query($sql) === true) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public static function unlikeProduct($conn, $id, $username)
    {
        $sql = "DELETE FROM likeproduct WHERE likeid_product = $id AND name_user = $username ";
        if ($conn->query($sql) === true) {
            header("location:../likeShow.php");
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }

    public static function searchProduct($conn)
    {
        // include "Details.php";
        if (isset($_POST["search"])) {
            $keyword = $_POST["search"];
            $sql = "SELECT * FROM `product` WHERE `name` LIKE '%$keyword%'";
            $resultArray = array();
            $run_query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($run_query)) {
                array_push($resultArray, $row);
            }

            if ($resultArray == null) {
                return null;
            } else {
                return $resultArray;
            }
        }
    }

    public static function sendMail($conn)
    {
        $sql = "SELECT email FROM user "; // สร้างคำสั่ง SQL เก็บไว้ในตัวแปรชื่อ $SQLCom
        $query = $conn->query($sql); // ทำการคิวรี่
  //  $mailto = $_POST['Email'];
        $mailSub = $_POST['mail_sub'];
        $mailMsg = $_POST['mail_msg'];
        require 'PHPMailer-master/PHPMailerAutoload.php';
        $mail = new PHPMailer();
        $mail->IsSmtp();
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "longdomdu.so@gmail.com";
        $mail->Password = "oo123456789";
        $mail->SetFrom("longdomdu.so@gmail.com");
        $mail->Subject = $mailSub; //"+++Promotion4U+++";
        $mail->Body = $mailMsg;/*"⭐️ พิเศษ!! สำหรับลูกค้า Longdomdu' sor  เพียงซื้อสินค้า ครบ 499 บาท ฟรี❗❗ ค่าจัดส่งสินค้า ตั้งแต่วันนี้เป็นต้นไปหรือจนกว่าสินค้าจะหมด (สินค้ามีจำนวนจำกัด) ช้าหมดอดนะออเจ้า ⭐️
                  คลิกด่วน ▶▶ http://localhost/web/ ◀◀  ";*/

        while ($rs = mysqli_fetch_array($query))  //สร้างตัวแปร $rs มารับค่าจากการ fetch array
        {
            $mail->AddAddress($rs['email']);
        }

    }

    public static function addProduct($conn, $add_brand, $add_name, $add_price, $add_sale, $add_detail, $add_qty, $image)
    {
        $image = $_FILES['image']['name'];
        $target = "E:/xampp/htdocs/web/images/" . basename($image);
        $sql = "INSERT INTO product(name_brand,name,price,sale,detail,qty,image) 
        VALUES ('$add_brand','$add_name','$add_price','$add_sale','$add_detail','$add_qty','$image')"; 
        // mysqli_query($conn, $sql); 
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
            if ($conn->query($sql) === true) {
                echo "New record created successfully";
                // header("location:index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            echo "<script>alert('เพิ่มสินค้าเรียบร้อยครับ/ค่ะ');window.location='../index.php'</script>";
            echo $msg;
        } else {
            $msg = "Failed to upload image";
            echo $msg;

        }
    }

    public static function insertAllCart($iduser)
    {
        include "Connection.php";
        $sql = "SELECT * FROM cart;";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($qry)) {
            if ($iduser == $row["name_user"]) {
                array_push($resultArray, $row);
            }
        }
        return $resultArray;
    }

    public static function insertAlllike($iduser)
    {
        include "Details.php";
        include "Connection.php";
        $sql = "SELECT * FROM likeproduct;";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        // $resultArrayAll = array();

        while ($row = mysqli_fetch_array($qry)) {
            if ($iduser == $row["name_user"]) {
                $mem = Product::insertProduct($row["likeid_product"]);
                $resultArray[] = $mem;
            }
        }
        return $resultArray;
    }

    public static function UpdateStatus($conn, $user, $num)
    {
        $sql = "SELECT * FROM cart;";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($qry)) {
            if ($user == $row["name_user"]) {
                $sql = "UPDATE cart SET status = $num WHERE name_user = $user";
                $conn->query($sql);
            }
        }

    }
    public static function order($conn, $user)
    {
        $sql = "SELECT * FROM `cart` WHERE name_user = $user AND status = 1";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($qry)) {
            $mem = Product::insertProduct($row["idcart_product"]);
            $resultArray[] = $mem;
        }
        return $resultArray;
    }

    public static function amount($conn, $user)
    {
        $sql = "SELECT * FROM `cart` WHERE name_user = $user AND status = 1";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($qry)) {
            array_push($resultArray, $row['amount']);
        }
        return $resultArray;
    }

    public static function deleteStatus($conn, $user)
    {
        $sql = "DELETE FROM `cart` WHERE status = 1 AND name_user = '" . $user . "'";
        $qry = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($qry)) {
            Product::deleteqtyProduct($row["idcart_product"], $row["amount"]);
        }
        $conn->query($sql);
    }

    public static function Time($conn, $user, $id_product, $amount)
    {
        $sql = " SELECT MAX(id_reciept) as max FROM history ";
        $qry = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($qry);
        $m = $row["max"] + 1;
        foreach ($id_product as $key => $value) {
            $sql = "INSERT INTO history(id_reciept,id_user,id_product,amount) VALUES ('$m','$user','" . $value->getid_product() . "','$amount[$key]')";
            $conn->query($sql);
        }
        // echo "<script>alert('การชำระเงินเรียบร้อยแล้วครับ/ค่ะ');window.location='../index.php'</script>";
    }

    public static function searchhistory($conn, $user)
    {
        include "classes/Calculate.php";
        $sql = "SELECT time FROM `history` WHERE id_user = $user";
        $qry = mysqli_query($conn, $sql);
        $resultArray = array();
        $result = array();

        while ($row = mysqli_fetch_array($qry)) {
            $value = true;
            for ($i = 0; $i < count($resultArray); $i++) {
                if ($resultArray[$i] === $row["time"]) {
                    $value = false;
                }
            }
            if ($value) {
                array_push($resultArray, $row["time"]);
            }
        }
        for ($i = 0; $i < count($resultArray); $i++) {
            $product = array();
            $sum = 0;
            $amount = 0;
            $order = "";
            $time = "";
            $s = "SELECT * FROM `history` WHERE id_user = $user AND time = '" . $resultArray[$i] . "'";
            $q = mysqli_query($conn, $s);
            while ($row = mysqli_fetch_array($q)) {
                $time = $row["time"];
                array_push($product, $row);
                // $mem = Product::insertProduct($row["id_product"]);
                // $sum += ($mem->getprice() - $mem->getsale()) * $row["amount"];
                $order = $row["id_reciept"];
                $amount += $row["amount"];
            }
            $sum = Calculate::calculatePriceProductHistory($product);
            $sum += Calculate::calculateVatProduct($sum);
            array_push($result, $order);
            array_push($result, $time);
            array_push($result, $amount);
            array_push($result, $sum);
        }

        return $result;
    }

    public static function Updatedatauser($conn, $user, $name, $lastname, $address)
    {
        // $sql = "SELECT * FROM `history` WHERE id_user = $user";
        $sql = "UPDATE user SET firstname = '" . $name . "' , lastname = '" . $lastname . "' , address = '" . $address . "' WHERE id=$user ";
        $conn->query($sql);
        echo "<script>alert('การชื้อสินค้าเสร็จสินครับ/ค่ะ')";
        if ($conn->query($sql) === true) {
            header("Location:../CartShow.php");
        } else {
            echo "Error: " . $conn->error;
        }
        $conn->close();
    }

    public static function upDateAmountCart($conn, $idproduct, $nameuser, $num)
    {
        $sql = "UPDATE cart SET amount=$num WHERE idcart_product=$idproduct AND name_user = $nameuser";
        if ($conn->query($sql) === true) {
            header("Location:../CartShow.php");
        }
        $conn->close();
    }

    public static function maxorder()
    {
        include "Connection.php";
        $sql = " SELECT MAX(id_reciept) as max FROM history ";
        $qry = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($qry);
        $m = $row["max"] + 1;
        return $m;
    }

}


?>