<?php

class Login
{
    
    public function __construct()
    {
        $this->nik = @htmlentities(strtolower($_POST['nik']));
        $this->nama = @htmlentities(strtolower($_POST['nama']));
    }

    public function login()
    {
        if ($this->verify()) {
            $_SESSION['nik'] = $this->nik;
            $_SESSION['nama'] = $this->nama;
            $_SESSION['is_auth'] = true;

            header("Location: index.php");
            die();
        } else {
            echo '<b style="color: #FF00FF;">Invalid Username Or Password!</b><br>';
            echo '<b style="color: #FF00FF;">Redirect To login Page</b>';
            header("refresh:1; url=login.php");
            die;
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        header("Location: login.php");
        die();
    }

    public function verify()
    {
        $d = file_get_contents("user.txt");
        $data = explode("\n", $d);

        foreach ($data as $row => $data) {

            $row_user = explode('|', $data);
            $this->u = @(strtolower($row_user[0]));
            $this->p = @trim(strtolower($row_user[1]), "\r");

            if (strcmp($this->u, $this->nik) === 0 && strcmp($this->p, $this->nama) === 0) {
                return true;
            }
        }
        return false;
    }
}
