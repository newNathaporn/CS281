<?php

class Login
{
    private $uname;
    private $pword;
    public function __construct($username, $password)
    {
        $this->uname = $username;
        $this->pword = md5($password);
    }

    public function setusername($username)
    {
        $this->uname = $username;
    }

    public function setpassword($password)
    {
        $this->pword = $password;
    }

    public function getusername()
    {
        return $this->uname;
    }

    public function getpassword()
    {
        return $this->pword;
    }

    public function checkuser($conn)
    {
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        while ($row = mysqli_fetch_array($result)) {
            if ($row[3] === $this->uname && $row[4] === $this->pword) {
                return $row[0];
            }
        }
        return -1;
    }
}

?>