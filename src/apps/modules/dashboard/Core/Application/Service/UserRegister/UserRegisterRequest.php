<?php

namespace Its\Example\Dashboard\Core\Application\Service\UserRegister;

class UserRegisterRequest
{
    protected $nama;
    protected $email;
    protected $password;
    protected $umur;
    protected $jk;
    protected $alamat;
    protected $nohp;
    protected $usersType;

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

    public function getUmur()
    {
        return $this->umur;
    }

    public function getJk()
    {
        return $this->jk;
    }

    public function getAlamat()
    {
        return $this->alamat;
    }

    public function getNohp()
    {
        return $this->nohp;
    }

    public function getUsersType()
    {
        return $this->usersType;
    }
}