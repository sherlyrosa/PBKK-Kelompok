<?php

namespace Its\Example\Dashboard\Core\Application\Service\Login;

class LoginRequest
{
    protected $email;
    protected $password;
    protected $usersType;

    public function __construct($email, $password, $usersType)
    {
        $this->email = $email;
        $this->password = $password;
        $this->usersType = $usersType;
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