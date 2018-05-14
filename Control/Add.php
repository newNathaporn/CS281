 <?php
include "../classes/Addtotable.php";
include "../classes/Connection.php";
include "../classes/Details.php";
include "../classes/Member.php";
include "../classes/Calculate.php";
session_start();
$num = $_GET['id'];

if ($num === "addcart") {
    if (!isset($_SESSION['id_user'])) {
        echo "<script>alert('กรุณาใส่ username และ password ของท่านด้วยครับ/ค่ะ'); window.location='../index.php'</script>";
        exit();
    }
    $id_name = $_POST['id_name'];
    $idproduct_name = $_POST['idproduct_name'];
    $num = $_POST['num'];
    $carttable = Addtable::addCartToTable($conn, $id_name, $idproduct_name, $num);

} else if ($num === "addlike") {
    $id_product = $_GET['id_product'];
    if ($id_product == -1) {
        echo "<script>alert('กรุณาใส่ username และ password ของท่านด้วยครับ/ค่ะ'); window.location='../index.php'</script>";
        exit();
    } else {
        $username = $_GET['username'];
        $carttable = Addtable::addLikeToTable($conn, $id_product, $username);
        $m = $_SESSION["url"];
        header("location:$m");
    }

} else if ($num === "deletecart") {
    $id_product = $_GET['item_id'];
    $user = $_SESSION['id_user'];
    $carttable = Addtable::deleteCart($conn, $id_product, $user, 0);
    header("Location:../CartShow.php");
} else if ($num === "unlike") {
    $id = $_GET['id_product'];
    $username = $_GET['username'];
    $carttable = Addtable::unlikeProduct($conn, (int)$id, (int)$username);
} else if ($num === "searchproduct") {
    $carttable = Addtable::searchProduct($conn);
    if ($carttable == null) {
        $_SESSION["arraysearch"] = null;
    } else {
        $_SESSION["arraysearch"] = $carttable;
    }
    header("location:../Search.php");
} else if ($num === "send_mail") {
    $carttable = Addtable::sendMail($conn);
} else if ($num === "addproduct") {
    $add_brand = $_POST['name_brand'];
    $add_name = $_POST['name'];
    $add_price = $_POST['price'];
    $add_sale = $_POST['sale'];
    $add_detail = $_POST['detail'];
    $add_qty = $_POST['qty'];
    $image = $_FILES['image']['name'];
    $carttable = Addtable::addProduct($conn, $add_brand, $add_name, $add_price, $add_sale, $add_detail, $add_qty, $image);
} else if ($num === "update") {
    include "../classes/reciept.php";
    // Addtable::UpdateStatus($conn, $_SESSION['id_user'], 1);
    $text = Addtable::order($conn, $_SESSION['id_user']);
    $amount = Addtable::amount($conn, $_SESSION['id_user']);
    Addtable::Time($conn, $_SESSION['id_user'], $text, $amount);

    $db = new PDO('mysql:host=localhost;dbname=cs281', 'root', '');
    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTable();
    $pdf->viewTable($db, $text, $amount);
    $pdf->Output();
    foreach ($text as $key => $value) {
        Product::deleteqtyProduct($value->getid_product(), $amount[$key]);
        // echo $value->getid_product() . $amount[$key] . "<br>";
    }
    Addtable::deleteStatus($conn, $_SESSION['id_user']);
    // Addtable::Time($conn, $_SESSION['id_user'], $text, $amount);

} elseif ($num === "updateaddress") {
    $update_name = $_POST['name'];
    $update_namelast = $_POST['lastname'];
    $update_address = $_POST['address'];
    Addtable::Updatedatauser($conn, $_SESSION['id_user'], $update_name, $update_namelast, $update_address);
} elseif ($num === "addcartdatabase") {
    $amount = $_POST['quantity'];
    $idproduct = $_POST['idproduct'];
    $name = $_POST['username'];
    Addtable::upDateAmountCart($conn, $idproduct, $name, $amount);
} elseif ($num === "success") {
    Addtable::UpdateStatus($conn, $_SESSION['id_user'], 1);
    echo '<script type="text/javascript">window.open("Add.php?id=update");</script>';
    echo "<script>alert('การชำระเงินเรียบร้อยแล้วครับ/ค่ะ'); window.location='../index.php'</script>";
}




?>
