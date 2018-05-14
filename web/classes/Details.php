<?php 
class Product
{
    private $id_product;
    private $name_brand;
    private $name;
    private $price;
    private $sale;
    private $detail;
    private $qty;
    private $image;

    public function __construct($id_product, $name_brand, $name, $price, $sale, $detail, $qty, $image)
    {
        $this->id_product = $id_product;
        $this->name_brand = $name_brand;
        $this->name = $name;
        $this->price = $price;
        $this->sale = $sale;
        $this->detail = $detail;
        $this->qty = $qty;
        $this->image = $image;
    }

    public static function insertNameBrand($conn, $namebrand)
    {
        $sql = "SELECT * FROM product WHERE name_brand ='" . $namebrand . "'";
        $result = $conn->query($sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($result)) {
            $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
            $resultArray[] = $mem;
        }
        return $resultArray;
    }


    public static function insertProduct($id)
    {
        include "Connection.php";
        $sql = "SELECT * FROM product WHERE id_product =$id ";
        $query = $conn->query($sql);
        if ($query->num_rows == 0) {
            return null;
        } else {
            $row = $query->fetch_assoc();
            $resultArray = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
            return $resultArray;
        }
    }


    public function suggestion($namebrand, $id)
    {
        include "Connection.php";
        $resultArray = array();
        $sql = "SELECT * FROM product WHERE name_brand ='" . $namebrand . "'";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["id_product"] != $id) {
                $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
                $resultArray[] = $mem;
            }
        }
        shuffle($resultArray);
        return $resultArray;
    }

    public static function showProductall($sexual)
    {
        include "Connection.php";
        $sql = "SELECT * FROM product ";
        $result = $conn->query($sql);
        $resultall = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $p = explode(" ", $row["name_brand"]);
            if ($p[1] === $sexual) {
                $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
                $resultall[] = $mem;
            }
        }
        return $resultall;
    }

    public static function addsearchProduct($arr)
    {

        $resultArray = array();
        if ($arr != null) {
            foreach ($arr as $row) {
                $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
                $resultArray[] = $mem;
            }
            return $resultArray;
        } else {
            return null;
        }

    }

    public static function deleteqtyProduct($idproduct, $deleteamountproduct)
    {
        include "Connection.php";
        $sql = "SELECT * FROM product WHERE id_product ='" . $idproduct . "'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
        $num = $mem->getqty() - $deleteamountproduct;

        $sql = "UPDATE product SET qty = $num WHERE id_product=$idproduct";
        $conn->query($sql);
    }
    // public static function insertqtyProduct($idproduct, $deleteamountproduct)
    // {
    //     include "Connection.php";
    //     $sql = "SELECT * FROM product WHERE id_product ='" . $idproduct . "'";
    //     $result = $conn->query($sql);
    //     $row = mysqli_fetch_array($result);
    //     $mem = new Product($row["id_product"], $row["name_brand"], $row["name"], $row["price"], $row["sale"], $row["detail"], $row["qty"], $row["image"]);
    //     $num = $mem->getqty() - $deleteamountproduct;

    //     $sql = "UPDATE product SET qty = $num WHERE id_product=$idproduct";
    //     $conn->query($sql);
    // }

    public function getid_product()
    {
        return $this->id_product;
    }

    public function getname_brand()
    {
        return $this->name_brand;
    }

    public function getname()
    {
        return $this->name;
    }

    public function getprice()
    {
        return $this->price;
    }

    public function getsale()
    {
        return $this->sale;
    }

    public function getdetail()
    {
        return $this->detail;
    }

    public function getqty()
    {
        return $this->qty;
    }

    public function getimage()
    {
        return $this->image;
    }

}
// $conn = new mysqli($servername, $username, $password,$dbname);
// $sql = "SELECT * FROM product";
// $result = mysqli_query($conn, $sql);
// $resultArray = array();
// while($row = mysqli_fetch_assoc($result))
// {
//     array_push($resultArray,$row);    
// }


?>
