<?php

namespace Its\Example\Dashboard\Core\Application\Service\AddUsers;

class AddUsersRequest
{
    protected $nama;
    protected $email;
    protected $password;
    protected $usersType;

    public function __construct($nama, $email, $password, $usersType)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
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

    public function getUsersType()
    {
        return $this->usersType;
    }
}