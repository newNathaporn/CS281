<?php
class Member
{
    private $_id_user;
    private $_firstname;
    private $_lastname;
    private $_uid;
    private $_pwd;
    private $_email;
    private $_address;
    private $_phone;
    private $_type;

    public function __construct($firstname, $lastname, $uid, $pwd, $email, $address, $phone, $type)
    {
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_uid = $uid;
        $this->_pwd = $pwd;
        $this->_email = $email;
        $this->_address = $address;
        $this->_phone = $phone;
        $this->_type = $type;
    }

    public function setidUser($id)
    {
        $this->_id_user = $id;
    }

    public function setfirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    public function setlastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    public function setuid($uid)
    {
        $this->_uid = $uid;
    }

    public function setpwd($pwd)
    {
        $this->_pwd = $pwd;
    }

    public function setemail($email)
    {
        $this->_email = $email;
    }

    public function setaddress($address)
    {
        $this->_address = $address;
    }

    public function setphone($phone)
    {
        $this->_phone = $phone;
    }

    public function getaddress()
    {
        return $this->_address;
    }

    public function getphone()
    {
        return $this->_phone;
    }

    public function getidUser()
    {
        return $this->_id_user;
    }

    public function getfirstname()
    {
        return $this->_firstname;
    }

    public function getlastname()
    {
        return $this->_lastname;
    }

    public function getuid()
    {
        return $this->_uid;
    }

    public function getpwd()
    {
        return $this->_pwd;
    }

    public function getemail()
    {
        return $this->_email;
    }

    public function gettype()
    {
        return $this->_type;
    }

    public static function insertuser($conn, $id_user)
    {
        $sql = "SELECT * FROM user WHERE id =$id_user";
        $query = $conn->query($sql);
        $row = mysqli_fetch_array($query);
        $mem = new Member($row['firstname'], $row['lastname'], $row['uid'], $row['pwd'], $row['email'], $row['address'], $row['phone'], $row['type']);
        $mem->setidUser($row['id']);
        // // foreach ($row as $key => $value) {
        // //     echo $value . "<br>";
        // // }
        // while ($row = mysqli_fetch_array($query)) {
        //     $mem = new Member($row['id'], $row['firstname'], $row['lastname'], $row['uid'], $row['pwd'], $row['email'], $row['address'], $row['phone'], $row['type']);
        //     echo $row['id'] . $row['firstname'];
        // }
        return $mem;
    }


    public function register($conn)
    {
        $sql = "SELECT uid , email FROM user";

        $result = $conn->query($sql);
        $resultArray = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($resultArray, $row);
        }

        foreach ($resultArray as $key => $value) {
            if ($value[0] === $this->_uid && $value[1] === $this->_email) {
                echo "<script>alert('username และ email ของท่านถูกใช้งานแล้วครับ/ค่ะ');window.location='../index.php'</script>";
                return -1;
            } else if ($value[0] === $this->_uid) {
                echo "<script>alert('username ของท่านถูกใช้งานแล้วครับ/ค่ะ');window.location='../index.php'</script>";
                return -1;
            } else if ($value[1] === $this->_email) {
                echo "<script>alert('email ของท่านถูกใช้งานแล้วครับ/ค่ะ');window.location='../index.php'</script>";
                return -1;
            }
        }

        $sql = "INSERT INTO user (firstname,lastname,uid,pwd,email,address,phone,type)
        VALUES ('" . $this->_firstname . "','" . $this->_lastname . "','" . $this->_uid . "','" . $this->_pwd . "','" . $this->_email . "','" . $this->_address . "','" . $this->_phone . "','" . $this->_type . "')";


        if ($conn->query($sql) === true) {
            return 1;
        }
    }

}
?>
