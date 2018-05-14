<?php

class classification
{

    private $resultArray = array();
    private $namebrand;

    public function setNamebrand($namebrand)
    {
        $this->namebrand = $namebrand;
    }

    public function getNamebrand()
    {
        return $this->namebrand;
    }

    public function getarrayresult()
    {
        return $this->resultArray;
    }

    public function start()
    {

        include "classes/Connection.php";
        $sql = "SELECT * FROM product WHERE name_brand ='" . $this->namebrand . "'";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_array($result)) {
            array_push($this->resultArray, $row);
        }
        // $_SESSION["resultArray"] = getarrayresult() ;
    }
// echo $_SESSION['num'];




// $conn = new mysqli($servername, $username, $password,$dbname);
// $sql = "SELECT * FROM product";
// $result = mysqli_query($conn, $sql);


    
// foreach ($resultArray as $s => $value) {
//     echo $value[0] . " " . $value[1] . " " . $value[2]  . " " . $value[3]  . "<br>";
// }

}
?>