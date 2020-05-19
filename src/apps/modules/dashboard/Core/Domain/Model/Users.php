<?php

namespace Its\Example\Dashboard\Core\Domain\Model;

class Users
{
    private $nama;
    private $email;
    private $password;
    private $umur;
    private $jk;
    private $alamat;
    private $nohp;
    private $usersType;

    public function __construct($nama, $email, $password, $umur, $jk, $alamat, $nohp, $usersType)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->alamat = $alamat;
        $this->nohp = $nohp;
        $this->usersType = $usersType;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function isExist()
    {
        return isset($this->email);
    }
}