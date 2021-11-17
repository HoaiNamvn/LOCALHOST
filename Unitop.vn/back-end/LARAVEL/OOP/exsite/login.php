<?php
class User
{
    private $username;
    private $password;
    private $db_username = "Nam";
    private $db_password = "unitop!@#";

    public function setInfo($username, $password)
    {
        //set giá trị cho username và password function
        $this->username = $username; //set in 27 line
        $this->password = $password;
    }
    function checkLogin()
    {
        //check username và pass có khớp với username và pass trong db không 
        if (($this->username === $this->db_username) && ($this->password === $this->db_password)) {
            echo "Xin chào ".$this->username;
        } else {
            echo "User không tồn tại trên hệ thống ";
        }
    }
}
// create new object in User class
$u = new User;
$u->setInfo("Nam", "unitop!@#");
$u->checkLogin();
